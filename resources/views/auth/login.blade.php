    <!doctype html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title  >IR Clinic</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo URL('/'); ?>/assets/images/hospitalimages/ir-logo.png">
        
        <!-- Library / Plugin Css Build -->
        <link href="{{ asset('css/libs.min.css') }}" rel="stylesheet">


        
        
        
        
        
        
        
        
        
        
        <link rel="stylesheet" href="<?php echo URL('/'); ?>/assets/css/qompac-ui.minf700.css?v=1.0.1">
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="<?php echo URL('/'); ?>/assets/css/custom.minf700.css?v=1.0.1">
        <!-- Dark Css -->
        <link rel="stylesheet" href="<?php echo URL('/'); ?>/assets/css/dark.minf700.css?v=1.0.1">
        
        <!-- Customizer Css -->
        <link rel="stylesheet" href="<?php echo URL('/'); ?>/assets/css/customizer.minf700.css?v=1.0.1" >
        
        <!-- RTL Css -->
        <link rel="stylesheet" href="<?php echo URL('/'); ?>/assets/css/rtl.minf700.css?v=1.0.1">
        
        
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">  </head>
    <body class=" ">
        <!-- loader Start -->
        <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img src="<?php echo URL('/'); ?>/assets/images/hospitalimages/ir-logo.png" height="100px" width="100px"  alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
        </div>
        <!-- loader END -->
        <div class="wrapper">
        <section class="login-content overflow-hidden">
            <div class="row no-gutters align-items-center bg-white">
                <div class="col-md-12 col-lg-6 align-self-center">
                <a href="../index.html" class="navbar-brand d-flex align-items-center justify-content-center text-primary">
                    
                        
                        <img src="<?php echo URL('/'); ?>/assets/images/hospitalimages/ir-transpaernt.png" viewBox="0 0 10 100" width="500px" fill="none" xmlns="http://www.w3.org/2000/svg">

                    
                    
                </a>
                <div class="row justify-content-center pt-5">
                    <div class="col-md-9">
                        <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
                            <div class="card-header">{{ __('Login') }}</div>
                            <div class="card-body">
                            <h2 class="mb-2 text-center">Sign In</h2>
                            <p class="text-center">Login to stay connected.</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                            
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>

                                            
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                
                                </div>
                                
                                
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none bg-primary p-0  overflow-hidden">
                <img src="<?php echo URL('/'); ?>/assets/images/auth/01.png" class="img-fluid gradient-main" alt="images" loading="lazy" >
                </div>
            </div>
        </section>
        </div>
        <!-- Library Bundle Script -->
        <script src="<?php echo URL('/'); ?>/assets/js/core/libs.min.js"></script>
        <!-- Plugin Scripts -->
        
        
        
        
        
        
        
        
        
        <!-- Slider-tab Script -->
        <script src="<?php echo URL('/'); ?>/assets/js/plugins/slider-tabs.js"></script>
        
        
        
        
        
        <!-- Lodash Utility -->
        <script src="<?php echo URL('/'); ?>/assets/vendor/lodash/lodash.min.js"></script>
        <!-- Utilities Functions -->
        <script src="<?php echo URL('/'); ?>/assets/js/iqonic-script/utility.min.js"></script>
        <!-- Settings Script -->
        <script src="<?php echo URL('/'); ?>/assets/js/iqonic-script/setting.min.js"></script>
        <!-- Settings Init Script -->
        <script src="<?php echo URL('/'); ?>/assets/js/setting-init.js"></script>
        <!-- External Library Bundle Script -->
        <script src="<?php echo URL('/'); ?>/assets/js/core/external.min.js"></script>
        <!-- Widgetchart Script -->
        <script src="<?php echo URL('/'); ?>/assets/js/charts/widgetchartsf700.js?v=1.0.1" defer></script>
        <!-- Dashboard Script -->
        <script src="<?php echo URL('/'); ?>/assets/js/charts/dashboardf700.js?v=1.0.1" defer></script>
        <script src="<?php echo URL('/'); ?>/assets/js/qompac-uif700.js?v=1.0.1" defer></script>
        <script src="<?php echo URL('/'); ?>/assets/js/sidebarf700.js?v=1.0.1" defer></script>
        
    </body>

    </html>

