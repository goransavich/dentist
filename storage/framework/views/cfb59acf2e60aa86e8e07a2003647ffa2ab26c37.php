<!DOCTYPE html>
<html>
<head>
    <title>Office</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

    

    
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    
    
    
    <link rel="icon" type="image/ico" href="favicon.ico">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    
    
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <![endif]-->    

</head>
<body>

<div class="navigacija">
    <div class="nav-outer"> 
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="#page_top"><img src="images/logo1@2x.png" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav pull-right">
                        
                        <li class=""><a href="/">Home</a></li>
                        <?php if(!Auth::check()): ?>
                        <li class=""><a href="/login">Login</a></li>
                        <?php endif; ?>
                        <li class=""><a href="/register">Register</a></li>
                                                                                                
                        <?php if(Auth::check()): ?>
                        <li class=""><a href="/logout"><?php echo e(Auth::user()->name); ?></a></li>  
                        
                        <?php endif; ?>  
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>



<div class="container">
    <div class="row positionrow">
        <div class="col-md-2">
        </div>
        
        
        <div class="col-md-8 offset-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong><?php if(Auth::check()): ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?></strong></div>
                    
                    
                   
                    <div class="panel-body">
                        <h2>Choose the doctor:</h2>
                        

                            <div class="positioncenter">
                                <ul class="list-group officelist">
                                                              
                                

                                  <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/office/<?php echo e($doctor->user_id); ?>"><li class="list-group-item"><?php echo e($doctor->name); ?></li></a>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>

                            </div>
                            
                                

                           


                     
                    </div>
                </div>
                

                  
        </div>
    </div>
</div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>


<script src="https://raw.githubusercontent.com/moment/moment/develop/min/moment-with-locales.min.js"></script>



</body>
</html>

