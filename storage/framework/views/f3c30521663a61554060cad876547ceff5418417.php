<?php $__env->startSection('navigation'); ?>
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
                        <li class=""></li>
                        <li class=""></li>
                        <li class=""></li>
                        <li class=""></li>
                        <?php if(Auth::check()): ?>
                        <li class=""><a href="/logout" title="logout"><?php echo e(Auth::user()->name); ?></a></li>  
                        
                        <?php endif; ?>  
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container">

	<div class="row buttoncenter">
		<div class="col-lg-6 col-lg-offset-3">
			<h1>Schedule</h1>
			<h3>Choose date</h3>
			<form method="POST" action="/schedule">

	            <?php echo e(csrf_field()); ?>


	            <input class="date form-control" name="datesch" type="text" placeholder="Choose date">
                <button class="btn btn-primary" type="submit">Submit date</button> 
                <script>

                  $('.date').datepicker({  

                     format: 'yyyy-mm-dd',
                     
                     todayHighlight: true,

                   });  

                </script> 
	            
	        </form>
	    </div>
	</div>
    
    <?php if(isset($datesch)): ?>
    <div class="row">
    <?php echo e($datesch); ?>

    </div>
    <?php endif; ?>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>