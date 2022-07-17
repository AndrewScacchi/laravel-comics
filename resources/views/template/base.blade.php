{{-- in questo file vanno inserite tutte le componenti che restano fisse, cioè sono presenti in tutte
    le pagine del sito, ad esempio header e footer --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    @include('includes._header')

    @yield('pageMain')

    @include('includes._footer')
</body>
</html>
