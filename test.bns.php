<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
  </head>

  <body>


    <form enctype="multipart/form-data" action="@route('web.form.create')" method="post">
      <input type="hidden" name="_token" value="@csrf">
      <input type="text" name="text" value="{{ old('text') }}" id="">
      <input type="text" name="mult[a][b]" value="@old('mult.a.b')" id="">
      <button type="submit">Send</button>
    </form>

    {{ dump(request()->old('text')) }}

    @include('view')

    @yield('name')

    @section('name') @endsection

    @url() @url('path')

    @route()

    @csrf

    @php @endphp

    @if('dition')

    @endif

    @if(!empty())

    @endif

    @foreach ()
    @break
    @continue

    @endforeach


    <script>
      let t = 'sdfasfsdff';

      <!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Baseons Syntax Test</title>
        </head>
        <body>

          {{-- Comentário Blade-like --}}

          <!-- Echos simples e complexos -->
          {{ $simple }}
          {{  $object->property  }}
          {{ strtoupper($name) }}

          <!-- Diretivas de controle: if / elseif / else / endif -->
          @if($user && $user->isAdmin())
            <p>Admin: {{ $user->name }}</p>
          @elseif($user && $user->isGuest())
            <p>Guest</p>
          @else
            <p>No user</p>
          @endif

          <!-- foreach com key => value e aninhamento -->
          @foreach($items as $key => $item)
            @if($item->visible)
              <div class="item">{{ $key }}: {{ $item->title }}</div>
            @else
              {{-- item invisível --}}
            @endif
          @endforeach

          <!-- for loop -->
          @for($i = 0; $i < 3; $i++)
            <span>for {{ $i }}</span>
          @endfor

          <!-- while loop com break/continue -->
          @php $j = 0; @endphp
          @while($j < 5)
            @php $j++; @endphp
            @if($j === 2)
              @continue
            @endif
            <span>while {{ $j }}</span>
            @if($j === 4)
              @break
            @endif
          @endwhile

          <!-- section / yield -->
          @section('title')
            Página de Teste
          @endsection

          <h1>@yield('title')</h1>

          <!-- include / route / url / csrf / old -->
          @include('partials.header')
          <a href="@url('/path/to/page')">Link</a>
          <a href="@route('home')">Home</a>
          <form method="POST">
            @csrf
            <input name="name" value="@old('name')">
          </form>

          <!-- bloco PHP embutido -->
          @php
            $now = date('Y-m-d H:i:s');
          @endphp
          <div>Agora: {{ $now }}</div>

          <!-- testar anomalias e casos com vírgula/parênteses incorretos -->
          @if($a, phpinfo())
            {{-- caso inválido para teste de parsing --}}
          @endif

          <!-- comentários, echoes e tags PHP cruas -->
          {{-- comentário extenso
               continua aqui --}}
          <?php echo 'raw php tag'; ?>

          <!-- blocos de estilo e script embutidos (embedded languages) -->
          <style>
            .test { color: red; }
          </style>

          <script>
            console.log('teste');
          </script>

        </body>
      </html>
