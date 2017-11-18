<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">

			<h1>Register</h1>

			<hr>

			<form method="POST" action="/register">

			<?php echo e(csrf_field()); ?>


				  <div class="form-group">
				    
				    <input type="name" class="form-control" name="name" placeholder="Name" required> 
				  </div>

				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="username" placeholder="User name" required>
				  </div>

				  <div class="form-group">
				    
				    <input type="email" class="form-control" placeholder="E-mail" name="email">
				  </div>

				  <div class="form-group">
				    
				    <input type="password" class="form-control" name="password" placeholder="Password" required>
				  </div>
				  
				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="status" placeholder="Status" required>
				  </div>
				  <div class="form-group">
				  	<button type="submit" class="btn btn-primary">Register</button>
				  </div>
				  <div class="form-group">
				  	<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				  </div>
				</form>

			</div>
		</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>