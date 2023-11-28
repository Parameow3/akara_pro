<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Akara Podcast</title>
    <link rel="icon" type="image/png"
          href="{{asset('akara_logo.jpg')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Style -->
    <link href="{{asset('assets/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="#" style="color: #6f42c1">
            <strong><img class="rounded-2" src="{{asset('akara_logo.jpg')}}" style="width: 32px"/> Akara</strong> Podcast
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('subscription')}}">Premium</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-1"><a href="#" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-right me-1"></i>Login</a></li>
                    <li class="nav-item mx-1"><a href="#" class="btn btn-outline-primary"><i class="bi bi-person-plus-fill me-1"></i></i>Register</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bunchhay
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>
@yield('content')

<!--  FOOTER  -->
<div class="mt-5 pt-0"
     style="background-color: #8b51fe; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <footer class="container px-5 pt-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 mt-3">
            <div class="col">
                <a href="#" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="{{asset('akara_logo.jpg')}}" width="128" alt="logo">
                </a>
            </div>

            <div class="col mb-3">
                <p class="text-white-50" style="font-size: 12px">COMPANY</p>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">About</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">Jobs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">For the Record</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <p class="text-white-50" style="font-size: 12px">COMMUNITIES</p>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">For Artists</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">Developers</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">Advertising</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">Investors</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">Vendors</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <p class="text-white-50" style="font-size: 12px">USEFUL LINKS</p>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">Support</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">Web Player</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 14px">Free Mobile App</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <p class="text-white-50" style="font-size: 12px">OUR SOCIAL MEDIA</p>
                <ul class="list-unstyled d-flex">
                    <!--       Facebook         -->
                    <li><a class="text-white-50" href="https://www.facebook.com/authenticadvancedacademy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a></li>

                    <!--        Telegram        -->
                    <li class="ms-3"><a class="text-white-50" href="https://t.me/+85516669229">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bi bi-telegram" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                            </svg>
                        </a></li>

                    <!--       email         -->
                    <li class="ms-3"><a class="text-white-50" href="mailto:aaaschool.kh@gmail.com">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                        </a></li>

                    <!--       Twitter         -->
                    <li class="ms-3"><a class="text-white-50" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg>
                        </a></li>

                    <!--       Youtube         -->
                    <li class="ms-3"><a class="text-white-50"
                                        href="https://www.youtube.com/channel/UCE3oNkdyUrcKkqzn0CkSD0w">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                            </svg>
                        </a></li>
                </ul>
            </div>

        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top">
            <p class="text-white-50" style="font-size: 12px">&copy; 2023 Akara Podcast, Inc. All rights reserved.</p>

            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-underline-light text-white-50" href="#" style="font-size: 12px">
                        Privacy Policy
                    </a></li>
                <li class="ms-3"><a class="link-underline-light text-white-50" href="#" style="font-size: 12px">
                        Terms & Conditions
                    </a></li>
            </ul>
        </div>
    </footer>
</div>
<!--  End Footer  -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
