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
<body class="p-5">

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-9"><h2><?=$row['name']?></h2></div>
		<div class="col-lg-3 text-center"><a href="index.php" class=" text-white btn btn-primary">Go Home</a></div>
		<div class="col-md-12">
			<div class="card bg-dark p-3 text-white">
				<h3><?=$row['title']?></h3>
				<p class="">
					<span><i class="fa fa-eye"></i> <?=$row['mdate']?></span><br>
					<span><i class="fa fa-file"></i> <?=$row['file_name']?></span><br>
				</p >
				<p class=""><?=$row['content']?></p>
			</div>
		</div>	

	</div>

</div>

</body>