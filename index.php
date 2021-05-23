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
				<h2>Home</h2>
				<div class="table-responsive">
					<table class="table-bordered table table-striped table-sm">
						<thead>
							<tr>
								<th>id</th>
								<th>name</th>
								<th>title</th>
								<th>Date</th>
								<th>File</th>
								<th>CRUD</th>
							</tr>
						</thead>
						<tbody>
							<? while ($tData=mysqli_fetch_array($res)) {?>
								<tr>
									<td><?=$tData['id']?></td>
									<td><?=$tData['name']?></td>
									<td><?=$tData['title']?></td>
									<td><?=$tData['mdate']?></td>
									<td><a class="btn btn-dark" href="files/<?=$tData['file_name']?>"><i class="fa fa-download"></i></a></td>
									<td> 
										<a href="view.php?id=<?=$tData['id']?>" class="btn btn-primary"><i class="fa fa-eye"></i></a> 
										<a href="edit.php?id=<?=$tData['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
										<a href="" onclick="delet(<?=$tData['id']?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a> 

									</td>
								</tr>
							<?} ?>
							
						</tbody>
					</table>
				</div>
			</main>
		</div>
	</div>


	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">

		function delet(id) {
			if(confirm("Ma'lumotni o'chirmoqchimisiz?")){
				window.location.href="delet.php?id="+id;
			}
		}
	</script>
</body>
</html>

<!-- enctype="multipart/form-data"  -->

<!-- if($_FILES['image']['size']<3000000&&$_FILES['image']['error']==0){
		$file_type=$_FILES['image']['type'];
		$img_name="../images/avatars/".md5(time()).file_type($file_type);
		$tmp_name=$_FILES['image']['tmp_name'];
		$nameimg=md5(time()).file_type($file_type);
		move_uploaded_file($tmp_name,$img_name);
	}
	else{
		$nameimg="no-avatar.jpg";
	} -->