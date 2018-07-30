<?php include('header.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1>Register</h1>


				<form action="">
					<div class="form-group">
						<!-- <label for="user">User</label> -->
						<input type="text" class="form-control" id="user" aria-describedby="user" placeholder="User Name">
					</div>

 					<div class="form-group">
						<!-- <label for="password">Password</label> -->
						<input type="password" class="form-control" id="password" aria-describedby="user" placeholder="Password">
					</div>

					<div class="form-group">
						<!-- <label for="password">Password</label> -->
						<input type="password" class="form-control" id="password" aria-describedby="user" placeholder="Password">
					</div>

				  <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
				</form>
				<a href="login" class="btn register btn-block">Have An Account</a>
						
        		
			</div>
			<div class="col-md-3"></div>
		</div> <!-- end row -->
	</div> <!-- end container -->


<?php include('footer.php'); ?>