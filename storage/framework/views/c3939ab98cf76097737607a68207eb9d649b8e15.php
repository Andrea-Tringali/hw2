<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href='<?php echo e(url("css/change.css")); ?>'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="/change" method="post">
		<?php echo csrf_field(); ?>
     	<h2>Change Password</h2>
     	
		<?php if(isset($error)): ?>
     		<p class="error"><?php echo e($error); ?></p>
     	<?php endif; ?>

     	<label>Old Password</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <br>

     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password">
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
     	       <br>

     	<button type="submit">CHANGE</button>
          <a href='<?php echo e(url("/home")); ?>' class="ca"><strong>HOME</strong></a>
     </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\homework\resources\views/change-password.blade.php ENDPATH**/ ?>