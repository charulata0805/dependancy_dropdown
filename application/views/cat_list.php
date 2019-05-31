<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Dependancy Dropdown</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">LINOSYS PVT LTM TASK</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url(); ?>index.php/cats/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Catogory</a><br><br>
			<a href="<?php echo base_url(); ?>index.php/subcats/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Sub Catogory</a><br><br>
			<a href="<?php echo base_url(); ?>index.php/products/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Products</a><br><br>
			<a href="<?php echo base_url(); ?>index.php/catproducts/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Category Products</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Category</th>
						<!--<th>Password</th>
						<th>FullName</th>--->
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($cats as $user){
						?>
						<tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->category; ?></td>
							<!--<td><?php echo $user->password; ?></td>
							<td><?php echo $user->fname; ?></td>--->
							<td><a href="<?php echo base_url(); ?>index.php/cats/edit/<?php echo $user->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/cats/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>