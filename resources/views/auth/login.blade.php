<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <img class="position-absolute top-0 start-50 translate-middle z-index-1 overflow-hidden" src="{{asset('/img/vector-atas-login.png')}}" alt="vector-atas">
    <img class="position-absolute top-100 start-0 translate-middle z-index-1" src="{{asset('/img/vector-bawah-login.png') }}" alt="vector-bawah">
    <div class="position-absolute top-50 start-50 translate-middle z-index-3 container d-flex mt-xxl-5">
        <div class="container">

            <h1 class="fw-bold">Branding</h1>
            <div class="container">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <div class="container">
            <p>kanan</p>
        </div>
    </div>
</body>
</html>
