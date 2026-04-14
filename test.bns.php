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

      setTimeout(() => {

      }, timeout);

    </script>


    <style>
      body {
        color: red
      }

    </style>
    </style>
  </body>

</html>
