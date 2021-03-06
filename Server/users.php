<!DOCTYPE html>
<html>
<head>
	<title>Users</title>

</head>
<body>
	<?php 
	require 'confirm.php';
	$sql='select * from login';
	$result= mysqli_query($conn,$sql);

	?>
	<div class="container">
		<div class="row">
			<div class="col-s12 col-sm-8 col-md-8 offset-md-2">
			<h1 style="text-decoration: underline;">Users in the system</h1>
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<td>Username</td>
						<td>password</td>
						
					</tr>
				</thead>

				<tbody>

					<?php while ($row=mysqli_fetch_array($result)) { ?>

					<tr>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td>
							<div class="button-group">
								<form action="users.php" method="post">
									<input type="text" name="id" value="<?php echo $row['id'] ?>" hidden="">
									<input type="submit" value="Delete" name="del" class="btn btn-warning">
								</form>
								<button type="button" class="btn btn-info " data-toggle="modal" data-target="#edit<?php echo $row['id']; ?>">Edit</button>
							</div>
						</td>
					</tr>
					
					<div id="edit<?php echo $row['id']; ?>" class="modal fade modal-md" role='dialog'>
						<div class="modal-content">

							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit details for <?php echo $row['username']; ?></h4>
							</div>
							<div class="modal-body">
							<form action="users.php" method="post">
								<input type="text" name="id" hidden="" value="<?php echo $row['id'] ?>">
								<div class="form-group">
									<input class="form-control" type="text" value="<?php echo $row['username']; ?>" name="username" placeholder="Username">
								</div>
							
								
								<div class="form-group">
									<input class="form-control" type="text" value="<?php echo $row['password']; ?>" name="password" placeholder="password">
								</div>
							
								<div class="modal-footer">
									<button type="submit" name="edit" class="btn btn-success">Save</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</form>
							</div>
						</div>
					</div>

					<?php } ?>
				</tbody>
				<tfoot></tfoot>
			</table>
		</div>
		</div>
	</div>
	<button><a href="adminpage.html">Home</a></button>


</body>
</html>