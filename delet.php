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

$sql="DELETE FROM `table1` WHERE id=".$id;
$res=mysqli_query($db,$sql);
header("location:index.php");
?>

