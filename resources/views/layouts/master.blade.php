<!doctype html>
<html>
<head>
    <title>Your dentist</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noodp,noydir" />
    <meta property="og:title" content="Phobos One Page" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="Phobos, Responsive, Bootstrap 3, CSS3, HTML5, theme" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic,600italic,700italic,800italic' rel='stylesheet' type='text/css'>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    
    <link rel="icon" type="image/ico" href="favicon.ico">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <![endif]-->    
        </head>
        <body data-spy="scroll" data-offset='90'>
            <div id="preload">
                <div class="preload"></div>
            </div>

            @yield('carousel')
            
            
            <!-- Slider END -->

            <!-- navigacija -->
            @yield('navigation')
            
            
            <!-- navigacija END-->

            
            <!--About Us-->
            @yield('content')
            
            @include('layouts.footer')        
                    

            <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <!-- <script type="text/javascript" src="js/retina-1.1.0.js"></script> -->
            <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    <!--[if lte IE 8]>
        <script src="js/respond.min.js"></script>
        <![endif]-->        
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/gmap.js"></script>
        <!--<script type="text/javascript" src="js/contact.js"></script><-->
        <script type="text/javascript" src="js/main.js"></script>

        </body>
        </html>