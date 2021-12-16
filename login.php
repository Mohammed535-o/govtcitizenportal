<section class="loginWrapper">
  
	<ul class="tabs">
		<li class="active">Login</li>
		<li>Register</li>
	</ul>

	<ul class="tab__content">
    
		<li class="active">
			<div class="content__wrapper">
				<form method="POST" action="">
					<input type="email" name="email" placeholder="email">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" value="Login" name="login">
				</form>
			</div>
		</li>
   
		<li>
			<div class="content__wrapper">
				<form method="POST" action="">
					<input type="name" name="name" placeholder="Username">
					<input type="email" name="email" placeholder="email">
					<input type="pass" name="pass" placeholder="Password">
					<input type="repass" name="repass" placeholder="Repeat-Password">
					<input type="submit" value="Register" name="register">
				</form>
			</div>
		</li>
  
	</ul>

</section>

	<div class="logginFormFooter">
	&copy; 2015-<?php echo date(Y);?> hello world <a href="#">website.com</a>
	</div>
