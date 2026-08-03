<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        @foreach($item as $list)
        {{ $list }}
        @endforeach


        {{ $value }}

        @if($value->test, phpinfo())
        @else
        @endif

        @else
        @elseif($value->test )
        @foreach
        @while
        @for
        @include
        @section @endsection
        @yield
        @url
        @route
        @csrf

        @php
        $test = 'test';
        @endphp

        @break @continue
        @old('input')

        {{ $value->test }}

        <style>
            .test {
                color: red;
            }

        </style>
    </body>

</html>
