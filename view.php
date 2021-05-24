<?
session_start();
if($_SESSION['user']!="admin"){
	header("location:login.php");
}
require_once 'config.php';

$id=intval($_GET['id']);
if(!$id>0){
	header("location:index.php");
	exit();
}

$sql="SELECT * FROM table1 WHERE id='$id'";
$res=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($res);
?>


<? include_once 'pages/head.php'; ?>
<body><hr>
<div class="container">
	<div class="m-5"></div>
	<div class="row border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative m-1 p-1 pb-5 pt-4">
		<div class="col-lg-9"><h2><?=$row['name']?></h2></div>
		<div class="col-lg-3 text-center"><a href="index.php" class=" text-white btn btn-primary">Go Home</a></div>
		<div class="col-md-12">
			<div class="card bg-dark p-3 text-white mt-2">
				<h3 class="text-center"><?=$row['title']?></h3>
				<p class="">
					<div class="row p-2">
						<div class="col-lg-4">
							<span class="btn btn-primary text-light w-100"><i class="fa fa-clock"></i> O'tkazilgan sanasi: <?=$row['mdate']?></span>
						</div>
						<div class="col-lg-4"><br></div>
						<div class="col-lg-4">
							<span><a class="btn btn-primary text-light w-100" href="files/<?=$row['file_name']?>"> <i class="fa fa-download"></i> Faylni yuklab olish.</a></span>
						</div>
					</div>
					
					
				</p >
				<p class="p-2"><?=$row['content']?></p>
				<div class="card-footer text-light row p-0 pt-4"><div class="col-lg-9"> </div><div class="col-lg-3"><p> Qo'shilgan sana: <?=$row['addtime']?></p></div> </div>
			</div>
		</div>	

	</div>

</div>

</body>
