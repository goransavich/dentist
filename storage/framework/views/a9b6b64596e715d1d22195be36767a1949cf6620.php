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
                        <li class=""><a href="/logout"><?php echo e(Auth::user()->name); ?></a></li>  
                        
                        <?php endif; ?>  
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($event->event_id); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>