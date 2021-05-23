<?
session_start();
ob_start();
if($_SESSION['user']!="admin"){
	header("location:login.php");
}
require_once 'config.php';
if($_POST){
	$name=trim(htmlspecialchars($_POST['name'],ENT_QUOTES));
	$title=trim(htmlspecialchars($_POST['title'],ENT_QUOTES));
	$content=trim(htmlspecialchars($_POST['content'],ENT_QUOTES));
	$date=trim(htmlspecialchars($_POST['date'],ENT_QUOTES));
	$id=trim(htmlspecialchars($_POST['id'],ENT_QUOTES));
	if($_FILES['file_name']['size']<25000000&&$_FILES['file_name']['error']==0){
		
		$fname=$_FILES['file_name']['name'];
		$rnd=time()+rand();

		$file_name=md5($rnd).$fname;// bazaga shu nom saqlaymiz
		$filename="files/".$file_name;//fayl tushadigan joyga 
		$tmp_name=$_FILES['file_name']['tmp_name'];

		move_uploaded_file($tmp_name, $filename);

		$sql="UPDATE  table1 SET  name='$name', title='$title', content='$content', mdate='$date', file_name='$file_name' WHERE id='$id'";
		$res=mysqli_query($db,$sql);
		echo("<script>alert(\"Ma'lumotlar Saqlandi\")</script>");
	}else{

		$sql="UPDATE  table1 SET  name='$name', title='$title', content='$content', mdate='$date' WHERE id='$id'";
		$res=mysqli_query($db,$sql);
		echo("<script>alert(\"Ma'lumotlar Saqlandi\")</script>");
	}

}
?>
<script>location.href="edit.php?id=<?=$id?>"</script>