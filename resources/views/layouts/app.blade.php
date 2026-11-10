<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
    </head>
    <body style="color: #493323; background-color:#FFF8E7 ;">

        @isset($username)
        <x-navbar :username="$username" />
        @endisset

        @yield('content')

        @include('components.footer')
    </body>
    </html>
</div>
