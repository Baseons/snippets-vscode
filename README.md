# Baseons Snippets

A Visual Studio Code extension for working with Baseons files in `.bns.php` format.

This extension adds support for the Baseons language with snippets for common directives, syntax highlighting for embedded blocks, and basic document formatting.

## Features

### Available snippets

The extension includes shortcuts for creating blocks and directives such as:

- `@if`, `@else`, `@elseif`
- `@foreach`, `@while`, `@for`
- `@include`, `@section`, `@yield`
- `@url`, `@route`, `@server`, `@old`, `@csrf`
- `@php`, `@endphp`
- `@break`, `@continue`
- `{{ ... }}` for expression output
- `{{-- ... --}}` for Baseons comments

### Syntax highlighting

The grammar file adds recognition for:

- Baseons comments
- `{{ ... }}` expressions
- `@php ... @endphp` blocks
- Baseons directives with support for parenthesized parameters
- Highlighting for embedded PHP, CSS, and JavaScript

### Formatting

The extension registers a formatter for Baseons documents using `js-beautify`, making the content easier to read and organize.

## Installation

1. Install the extension in VS Code.
2. Open a file with the `.bns.php` extension.
3. The editor will automatically recognize the Baseons language.

## Usage

Type the snippet prefix and press `Tab` to expand it.

Example:

```baseons
@if(condition)
    ...
@endif
```

You can also use the editor's formatting command:

- `Shift+Alt+F` on Windows/Linux
- `Shift+Option+F` on macOS

## Contributing

Contributions are welcome. If you find issues or want to improve the extension, open an issue or submit a pull request.
