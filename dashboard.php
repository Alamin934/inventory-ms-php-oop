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

        <!-- Navbar -->
        <?php include_once("includes/templates/navbar.php"); ?>

		<div class="container mb-4">
			<div class="row">
				<div class="col-md-4">
					<div class="card mx-auto">
					<img class="card-img-top mx-auto" style="width:60%;" src="includes/images/user.png" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title">Profile Info</h4>
						<p class="card-text"><i class="fa fa-user">&nbsp;</i>Rizwan Khan</p>
						<p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
						<p class="card-text">Last Login : xxxx-xx-xx</p>
						<a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
					</div>
					</div>
				</div>
				<div class="col-md-8 bg-light p-4">
					<div class="jumbotron" style="width:100%;height:100%;">
						<h1>Welcome Admin,</h1>
						<div class="row pt-3">
							<div class="col-sm-6">
								<iframe src="https://free.timeanddate.com/clock/i94fdnv2/n5259/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>

							</div>
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">New Orders</h4>
										<p class="card-text">Here you can make invoices and create new orders</p>
										<a href="new_order.php" class="btn btn-primary">New Orders</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<!-- Category -->
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Categories</h4>
							<p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#addNewCategory" class="btn btn-primary">Add</a>
							<a data-bs-toggle="modal" data-bs-target="#updateCategory" class="btn btn-primary">Manage</a>
						</div>
					</div>
				</div>
				<!-- Brand -->
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Brands</h4>
							<p class="card-text">Here you can manage your brand and you add new brand</p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#addNewBrand" class="btn btn-primary">Add</a>
							<a data-bs-toggle="modal" data-bs-target="#updateBrand" class="btn btn-primary">Manage</a>
						</div>
					</div>
				</div>
				<!-- Products -->
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Products</h4>
							<p class="card-text">Here you can manage your prpducts and you add new products</p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#addNewProduct" class="btn btn-primary">Add</a>
							<a data-bs-toggle="modal" data-bs-target="#updateProduct" class="btn btn-primary">Manage</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Content Include -->
		<?php 
			// Brand Modal Content                   
			include_once("includes/templates/brand.php");
			// Category Modal Content                   
			include_once("includes/templates/category.php");
			// Product Modal Content                   
			include_once("includes/templates/product.php");
		?>



        
        <script src="includes/js/jquery-3.7.1.min.js"></script>
        <script src="includes/js/bootstrap.bundle.min.js"></script>
        <script src="includes/js/main.js"></script>
    </body>
</html>