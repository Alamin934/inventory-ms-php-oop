<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inventory Management System</title>
        <link rel="stylesheet" href="includes/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="includes/css/bootstrap.min.css">
    </head>
    <body> 

		<div class="overlay"><div class="loader"></div></div>


		<div class="container mt-5 pt-5" id="index">
			<div class="card mx-auto" style="width: 40rem;">
				<div class="card-header">Register</div>
					<div class="card-body">
						<form id="register_form" autocomplete="off">
							<div class="form-group mb-3">
								<label for="username">Full Name</label>
								<input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
								<small id="u_error" class="form-text text-muted"></small>
							</div>

							<div class="form-group mb-3">
								<label for="email">Email address</label>
								<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
								<small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>

							<div class="form-group mb-3">
								<label for="password1">Password</label>
								<input type="password" name="password1" class="form-control"  id="password1" placeholder="Password">
								<small id="p1_error" class="form-text text-muted"></small>
							</div>

							<div class="form-group mb-3">
								<label for="password2">Re-enter Password</label>
								<input type="password" name="password2" class="form-control"  id="password2" placeholder="Password">
								<small id="p2_error" class="form-text text-muted"></small>
							</div>

							<div class="form-group mb-3">
								<label for="usertype">Usertype</label>
								<select name="usertype" class="form-control" id="usertype">
								<option value="">Choose User Type</option>
								<option value="Admin">Admin</option>
								<option value="Other">Other</option>
								</select>
								<small id="t_error" class="form-text text-muted"></small>
							</div>

							 <!-- Login & Register Button -->
							 <div class="mt-3">
								 <button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Register</button>
								<a class="btn btn-secondary" href="index.php">Login</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
        
		<script src="includes/js/jquery-3.7.1.min.js"></script>
        <script src="includes/js/bootstrap.bundle.min.js"></script>
        <script src="includes/js/main.js"></script>
    </body>
</html>