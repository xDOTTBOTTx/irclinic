{{-- @extends('layouts.front')
@yield('content') --}}
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>IR Clinic</title>
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="<?php echo URL('/'); ?>/assets/images/hospitalimages/ir-logo.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL('/'); ?>/assets/images/hospitalimages/ir-logo.png">
    <link rel="stylesheet" href="<?php echo URL('/'); ?>/assets/front/css/style.css">
    {{-- <link rel="manifest" href="<?php echo URL('/'); ?>/__manifest.json"> --}}
    <style>
        #loginbutton{
            background-color: #2bafbc;
            color: white;
        }
        </style>
</head>
<body>



    <!-- loader -->
    {{-- <div id="loader">
        <img src="assets/front/img/loading-icon.png" alt="icon" class="loading-icon">
    </div> --}}
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        
        <div class="pageTitle"></div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section text-center">
        <img src="<?php echo URL('/')?>/assets/images/hospitalimages/ir-logo.png" height="100" width="100">
        </div>
        <div class="section mt text-center">
            <h1>Log in</h1>
            <h4>Doctor Login</h4>
        </div>
        <div class="section mb-5 p-2">

            <form>
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">E-mail</label>
                                <input type="email" class="form-control" id="email1" placeholder="Your e-mail">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Password</label>
                                <input type="password" class="form-control" id="password1" autocomplete="off"
                                    placeholder="Your password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>


                

                <div class="form-button-group  transparent">
                    <a id="loginbutton" class="btn btn-block btn-lg" href="<?php echo URL('/'); ?>/doctor/dashboard">Log in</a>
                </div>

            </form>
        </div>

    </div>
    
    
    <script src="<?php echo URL('/'); ?>/assets/front/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="<?php echo URL('/'); ?>/assets/front/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="<?php echo URL('/'); ?>/assets/front/js/base.js"></script>
</body>
</html>
