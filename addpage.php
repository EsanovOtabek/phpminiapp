<?
session_start();
if($_SESSION['user']!="admin"){
	header("location:login.php");
}
require_once 'config.php';

$sql="SELECT * FROM `table1`";
$res=mysqli_query($db,$sql);


?>

<? include_once 'pages/head.php'; ?>

<body>

	<? include_once 'pages/header.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<?include_once 'pages/sidebar.php'; ?>

			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<h2>Add Data</h2>

				<form class="needs-validation" action="add.php" method="POST" enctype="multipart/form-data">

					<div class="row g-3">
						<div class="row gy-3">
							<div class="col-md-6">
								<label for="cc-name" class="form-label">Name</label>
								<input type="text" name="name" class="form-control" id="cc-name" placeholder="name" required>
								<div class="invalid-feedback">
									Name is required
								</div>
							</div>

							<div class="col-md-6">
								<label for="cc-name" class="form-label">Date</label>
								<input type="date" name="date" class="form-control" id="cc-name" required>
								<div class="invalid-feedback">
									Date is required
								</div>
							</div>


							<div class="col-12">
								<label for="username" class="form-label">Title</label>
								<div class="input-group has-validation">
									<input type="text" class="form-control" name="title" placeholder="Title" required>
									<div class="invalid-feedback">
										Title is required.
									</div>
								</div>
							</div>

							<div class="col-12">
								<label for="content" class="form-label">Content <span class="text-muted">(Optional)</span></label>
								<textarea class="form-control" name="content" placeholder="Content"></textarea>
							</div>
						</div>

						<div class="row gy-3">
							<div class="col-md-6">
								<label for="file-name" class="form-label">File</label>
								<input type="file" name="file_name" class="form-control" id="file-name" required>
								<div class="invalid-feedback">
									File is required
								</div>
							</div>
						</div>
						<hr class="my-4">

					</div>

					<button class="w-100 btn btn-primary btn-lg" type="submit">Save</button>
				</form>
			</main>
		</div>
	</div>


	<script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>