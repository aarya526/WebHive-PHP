<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Use this instead of the kit -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    {{-- Include the header --}}
    @include('common.header')

    {{-- <div class="container"> --}}
    <div class="wrapper">
        @yield('main-content') {{-- This will be replaced by page content --}}
    </div>
    {{-- </div> --}}

    {{-- Include the footer --}}
    @include('common.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    {{-- <script src="https://kit.fontawesome.com/377edd747b.js" crossorigin="anonymous"></script> --}}
    <script src="{{ secure_asset('js/script.js') }}"></script>
    @yield('scripts')

</body>

</html>
