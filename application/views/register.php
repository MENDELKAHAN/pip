<?php include('header.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1>Register</h1>


				<form action="<?php echo BASE_URL; ?>register/create" method="post">
					<div class="form-group">
						<input type="text" class="form-control" id="user" aria-describedby="user" placeholder="User Name" name="register[user]" required>
					</div>

 					<div class="form-group">
						<input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Password" name="register[password]" required>
					</div>

					<div class="form-group">
						<input type="password" class="form-control" id="password_2" aria-describedby="password" placeholder="Repeat Password" name="register[password_2]" required>
					</div>

				  <button type="submit" id="submit" class="btn btn-primary btn-block" name="register['submit']">Submit</button>
				</form>
				
				<a href="login" class="btn register btn-block">Have An Account</a>
						
        		
			</div>
			<div class="col-md-3"></div>
		</div> <!-- end row -->
	</div> <!-- end container -->


<?php include('footer.php'); ?>