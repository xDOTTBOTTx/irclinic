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
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">  
    
    
    </head>
    <body class=" ">
        <!-- loader Start -->
        <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img src="<?php echo URL('/'); ?>/assets/images/hospitalimages/ir-logo.png" height="100px" width="100px" alt="loader" class="image-loader img-fluid ">

            </div>
        </div>
        </div>
        <!-- loader END -->
        <aside class="sidebar sidebar-base sidebar-white sidebar-default navs-rounded-all " id="first-tour" data-toggle="main-sidebar" data-sidebar="responsive">
            <div class="sidebar-header d-flex align-items-center justify-content-start">
                <a href="dashboard" class="navbar-brand">
                    
                    <!--Logo start-->
                    <div class="logo-main">
                    
                        
                        <img src="<?php echo URL('/'); ?>/assets/images/hospitalimages/ir-logo.png" height="50" width="50">

                        
                    </div>
                    <!--logo End-->            <h4 class="logo-title" >IR Clinic</h4>
                </a>
                <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                    <i class="icon">
                        
                        <svg class="icon-10" width="10" height="10" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.29853 8C7.11974 8 6.94002 7.93083 6.80335 7.79248L3.53927 4.50446C3.40728 4.37085 3.33333 4.18987 3.33333 4.00036C3.33333 3.81179 3.40728 3.63081 3.53927 3.4972L6.80335 0.207279C7.07762 -0.069408 7.52132 -0.069408 7.79558 0.209174C8.06892 0.487756 8.06798 0.937847 7.79371 1.21453L5.02949 4.00036L7.79371 6.78618C8.06798 7.06286 8.06892 7.51201 7.79558 7.79059C7.65892 7.93083 7.47826 8 7.29853 8Z" fill="white"/>
                            <path d="M3.96552 8C3.78673 8 3.60701 7.93083 3.47034 7.79248L0.206261 4.50446C0.0742745 4.37085 0.000325203 4.18987 0.000325203 4.00036C0.000325203 3.81179 0.0742745 3.63081 0.206261 3.4972L3.47034 0.207279C3.74461 -0.069408 4.18831 -0.069408 4.46258 0.209174C4.73591 0.487756 4.73497 0.937847 4.4607 1.21453L1.69649 4.00036L4.4607 6.78618C4.73497 7.06286 4.73591 7.51201 4.46258 7.79059C4.32591 7.93083 4.14525 8 3.96552 8Z" fill="white"/>
                        </svg>
                    </i>
                </div>
            </div>
            <div class="sidebar-body pt-0 data-scrollbar">
                <div class="sidebar-list">
                    <!-- Sidebar Menu Start -->
                    <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                        <li class="nav-item static-item">
                            <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
                                <span class="default-icon">Home</span>
                                <span class="mini-icon" data-bs-toggle="tooltip" title="Home" data-bs-placement="right">-</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard">
                                <i class="icon" data-bs-toggle="tooltip" title="Dashboard" data-bs-placement="right">
                                    <img width="20" class="icon-20" viewBox="0 0 14 14" fill="none" data-bs-placement="right" src="<?php echo URL('/'); ?>/assets/images/sidebar/dashboard.png">

                                </i>
                                <span class="item-name">Dashboard </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/hospitaldata">
                                <i class="icon" data-bs-toggle="tooltip" title="Hospital" data-bs-placement="right">
                                    <img width="20" class="icon-20" viewBox="0 0 14 14" fill="none" data-bs-placement="right" src="<?php echo URL('/'); ?>/assets/images/sidebar/hospital.png">

                                </i>
                                <span class="item-name">Hospital</span>
                            </a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/equipmentdata">
                                <i class="icon" data-bs-toggle="tooltip" title="Equipment" data-bs-placement="right">
                                    <img width="20" class="icon-20" viewBox="0 0 14 14" fill="none" data-bs-placement="right" src="<?php echo URL('/'); ?>/assets/images/sidebar/equipment.png">

                                </i>
                                <span class="item-name">Equipments</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/doctordata">
                                <i class="icon" data-bs-toggle="tooltip" title="doctor" data-bs-placement="right">
                                    <img width="20" class="icon-20" viewBox="0 0 14 14" fill="none" data-bs-placement="right" src="<?php echo URL('/'); ?>/assets/images/sidebar/doctor.png">

                                </i>
                                <span class="item-name">Doctors</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/operationdata">
                                <i class="icon" data-bs-toggle="tooltip" title="Operation" >
                                    <img width="20" class="icon-20" viewBox="0 0 14 14" fill="none" data-bs-placement="right" src="<?php echo URL('/'); ?>/assets/images/sidebar/operation.png">

                                </i>
                                <span class="item-name">Operations</span>
                                
                            </a>
                            
                        </li>  
                        
                    </ul>
                    
                    <!-- Sidebar Menu End -->        </div>
            </div>
            <div class="sidebar-footer"></div>
        </aside>
        

            @yield('content')
            <footer class="footer">
                <div class="footer-body">
                    <ul class="left-panel list-inline mb-0 p-0">
                        <li class="list-inline-item"><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0);">Terms of Use</a></li>
                    </ul>
                    <div class="right-panel">
                        ©<script>2022</script> <span>IR Clinic</span>
                        <span class="text-gray">
                            <svg class="icon-16" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->
        </main>

            <script src="<?php echo URL('/'); ?>/assets/js/core/libs.min.js"></script>
            <!-- Plugin Scripts -->
            
            
            <!-- Flatpickr Script -->
            <script src="<?php echo URL('/'); ?>/assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
            <script src="<?php echo URL('/'); ?>/assets/js/plugins/flatpickr.js" defer></script>
            
            
            
              <!-- Select2 Script -->
              <script src="<?php echo URL('/'); ?>/assets/js/plugins/select2.js" defer></script>
            
            
            
            
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
    

