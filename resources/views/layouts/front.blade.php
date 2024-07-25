<!doctype html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>IR Clinic</title>
    <link rel="icon" type="image/png" href="<?php echo URL('/'); ?>/assets/images/hospitalimages/ir-logo.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL('/'); ?>/assets/images/hospitalimages/ir-logo.png">
    <link rel="stylesheet" href="<?php echo URL('/'); ?>/assets/front/css/style.css">
    
</head>

@yield('content')

<!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="<?php echo URL('/'); ?>/assets/front/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="http://unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="<?php echo URL('/'); ?>/assets/front/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="<?php echo URL('/'); ?>/assets/front/js/base.js"></script>
    
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
    </script>

</body>


</html>