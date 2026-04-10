const vscode = require('vscode');
const beautifyHtml = require('js-beautify').html;

function activate(context) {
    const provider = vscode.languages.registerDocumentFormattingEditProvider('baseons', {
        provideDocumentFormattingEdits(document, options) {
            try {
                const fullText = document.getText();

                // Garantia de que o arquivo não será limpo
                if (!fullText || !fullText.trim()) return [];

                // Configurações de formatação baseadas nas preferências atuais do VS Code do usuário
                const formatOptions = {
                    indent_size: options.tabSize,
                    indent_char: options.insertSpaces ? ' ' : '\t',
                    wrap_line_length: 120,
                    preserve_newlines: true,
                    max_preserve_newlines: 2,
                    end_with_newline: true
                };

                // Aplica a formatação HTML ao texto
                const formattedText = beautifyHtml(fullText, formatOptions);

                // Seleção segura do documento inteiro
                const lastLine = document.lineAt(document.lineCount - 1);
                const fullRange = new vscode.Range(
                    new vscode.Position(0, 0),
                    lastLine.range.end
                );

                // Substitui o texto antigo pelo texto formatado
                return [vscode.TextEdit.replace(fullRange, formattedText)];
            } catch (err) {
                console.error("Erro na formatação:", err);
                return [];
            }
        }
    });

    context.subscriptions.push(provider);
}

function deactivate() { }

module.exports = { activate, deactivate };