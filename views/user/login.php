<?php include ROOT . '/views/layouts/header.php';?>

<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <br>
		 <?php if (isset($errors) && is_array($errors)) :?>
		 <ul>
			 <?php foreach ($errors as $error): ?>
			 <li><?php echo $error; ?></li>
			 <?php endforeach; ?>
		 </ul>
		 <?php endif; ?>

		 <div class="col-md-6 log">
				 <form action="" method="post">
					 <h5>User Email</h5>
					 <input type="email" name="email" value="<?php echo $email ?>">
					 <h5>Password</h5>
					 <input type="password" name="password" value="<?php echo $password; ?>">
					 <input type="submit" name="submit" value="Login">
						<a class="acount-btn" href="/user/register/">Create an Account</a>
				 </form>
				 <a href="#">Forgot Password ?</a>

		 </div>

		 <div class="clearfix"></div>
	 </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
