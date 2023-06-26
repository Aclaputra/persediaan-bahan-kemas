<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard @yield('page') Page</title>
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">--}}
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                <img class="mx-auto" src="{{asset('/img/shiba.png')}}" alt="">
                <a href="/" class="text-center align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fst-italic text-secondary">PT. SHIBA SUKSES SEJAHTERA</span>
                    <hr>
                    <span class="fs-6 d-none d-sm-inline text-secondary fst-italic">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
{{--                    home--}}
                    <li class="nav-item">
                        <a href="{{ route('customer.dashboard') }}" class="nav-link align-middle px-0 text-secondary">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-light">Home</span>
                        </a>
                    </li>
{{--                    dashboard--}}
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2 text-secondary"></i> <span class="ms-1 d-none d-sm-inline text-light">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0 text-secondary"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-secondary"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    {{-- orders--}}
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table text-secondary"></i> <span class="ms-1 d-none d-sm-inline text-light">Orders</span></a>
                    </li>
                    {{-- proucts--}}
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid text-secondary"></i> <span class="ms-1 d-none d-sm-inline text-light">Products</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0 text-secondary"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-secondary"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-secondary"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-secondary"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    {{-- customers--}}
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people text-secondary"></i> <span class="ms-1 d-none d-sm-inline text-light">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                {{-- dropdown akun--}}
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://businesscasecompetition.files.wordpress.com/2019/04/icon-user.png" alt="hugenerd" width="30" height="30" class="rounded-circle mx-2">
                        <span class="d-none d-sm-inline mx-1">{{auth()->user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Kartu Persediaan baru...</a></li>
                        <li><a class="dropdown-item" href="{{ route('marketing.setting') }}">Settings</a></li>
                        <li><a class="dropdown-item" href="{{ route('marketing.profile') }}">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('logout')}}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Sign out </a>
                        </li>
                        <form id="logout-form" method="POST" action="{{route('logout')}}">@csrf</form>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3 bg-dark text-light">
            <span class="text-secondary">Marketing > Dashboard > @yield('page')</span>
            <!-- <span class="text-secondary">User > Dashboard > (current page)</span> -->
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
