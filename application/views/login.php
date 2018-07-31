<?php include('header.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1>Login</h1>


				<form action="<?php echo BASE_URL; ?>login/login" method="post">
					<div class="form-group">
						<!-- <label for="user">User</label> -->
						<input type="text" class="form-control" id="user" aria-describedby="user" placeholder="User Name" name="login[user]" required>
					</div>

 					<div class="form-group">
						<!-- <label for="password">Password</label> -->
						<input type="password" class="form-control" id="password" aria-describedby="user" placeholder="Password" name="login[password]" required>
					</div>

				  <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
				</form>
				<a href="register" class="btn register btn-block">Create your Account</a>
						
        		
			</div>
			<div class="col-md-3"></div>
		</div> <!-- end row -->
	</div> <!-- end container -->


<?php include('footer.php'); ?>