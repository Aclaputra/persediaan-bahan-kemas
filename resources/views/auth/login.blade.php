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
    <div class="container overflow-hidden">
        <img class="position-absolute top-0 start-50 translate-middle z-index-1" src="{{asset('/img/vector-atas-login.png')}}" alt="vector-atas">
        <img class="position-absolute top-100 start-0 translate-middle z-index-1" src="{{asset('/img/vector-bawah-login.png') }}" alt="vector-bawah">
    </div>

    <div class="position-absolute top-50 end-0 translate-middle-y z-index-3 container d-flex mt-xxl-5 mx-0">
        <div class="mt-xxl-5">
            <div class="container mt-xxl-5">
                <h1 class="fw-bold">SHIBA SUKSES SEJAHTERA PERSEDIAAN BAHAN KEMAS</h1>
                <div class="container">
                    <p>Visi kami adalah Menjadi Perusahaan terbesar dan terbaik di Indonesia dalam bidang Obat Tradisional dan Kosmetik dalam rangka mencapai kepuasan konsumen dengan memanfaatkan bahan-bahan alami.</p>
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <button class="btn btn-outline-success fw-bold">Tampilkan Persediaan Bahan Kemas</button>
            </div>
        </div>

        <div class="container bg-dark rounded-circle d-flex shadow-lg opacity-75">
            <div class="container p-4 m-lg-5 text-dark">
                <div class="card-header d-flex flex-column">
                    <img class="mx-auto" src="{{asset('/img/shiba.png')}}" alt="">
                    <h1 class="text-center text-light fw-bold">Log-in</h1>
                </div>
                <form class="card container p-4">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username / Email</label>
                        <input type="email" autofocus placeholder="shibasukses@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" placeholder="***********" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success mb-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
