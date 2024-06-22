<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Life Mosaic</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/landing.css') }}" />
</head>

<body>
    @include('components.navbar')
    <div class="container d-flex flex-column p-5 vh-100 vw-100">
        <section class="d-flex flex-column justify-content-between w-100 h-100">
            <div class="top">
                <h1 class="text-center fw-bold">Organize your life with Life Mosaic</h1>
                <h4 class="text-center pl-4">Life Mosaic is a simple web-based application to help manage schedule and
                    expenses to achieve your goals.</h3>
            </div>
            <img src="https://placehold.co/1200x600" alt="Placeholder">
            <div class="bottom d-flex gap-3 justify-content-center">
                <img src="https://placehold.co/50x50" alt="Placeholder">
                <img src="https://placehold.co/50x50" alt="Placeholder">
                <img src="https://placehold.co/50x50" alt="Placeholder">
                <img src="https://placehold.co/50x50" alt="Placeholder">
                <img src="https://placehold.co/50x50" alt="Placeholder">
            </div>
        </section>
        <section class="d-flex flex-column justify-content-between w-100 h-100">
            <div class="top">
                <h1 class="text-center fw-bold">Organize your life with Life Mosaic</h1>
                <h4 class="text-center pl-4">Life Mosaic is a simple web-based application to help manage schedule and
                    expenses to achieve your goals.</h3>
            </div>
            <img src="https://placehold.co/1200x600" alt="Placeholder">
            <div class="bottom d-flex gap-3 justify-content-center">
                <img src="https://placehold.co/50x50" alt="Placeholder">
                <img src="https://placehold.co/50x50" alt="Placeholder">
                <img src="https://placehold.co/50x50" alt="Placeholder">
                <img src="https://placehold.co/50x50" alt="Placeholder">
                <img src="https://placehold.co/50x50" alt="Placeholder">
            </div>
        </section>
    </div>
    <script src="{{ asset('scripts/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
