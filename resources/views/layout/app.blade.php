<html lang='en'>

<head>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <title> @yield('pageTitle','X') </title>

</head>

<body>

    @include('layout.nav')

    @yield('bodyContent')

    @include('layout.footer')



    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
