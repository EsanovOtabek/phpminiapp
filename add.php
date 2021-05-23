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

	if($_FILES['file_name']['size']<25000000&&$_FILES['file_name']['error']==0){
		
		$fname=$_FILES['file_name']['name'];
		$rnd=time()+rand();

		$file_name=md5($rnd).$fname;// bazaga shu nom saqlaymiz
		$filename="files/".$file_name;//fayl tushadigan joyga 
		$tmp_name=$_FILES['file_name']['tmp_name'];

		move_uploaded_file($tmp_name, $filename);

		$sql="INSERT INTO table1( name, title, content, mdate, file_name) VALUES ('$name','$title','$content','$date','$file_name')";
		$res=mysqli_query($db,$sql);
		echo("<script>alert(\"Ma'lumotlar qo'shildi\")</script>");
	}else{
		$sql="INSERT INTO table1( name, title, content, mdate) VALUES ('$name','$title','$content','$date')";
		$res=mysqli_query($db,$sql);
		echo("<script>alert(\"Faylni yuklanmadi. Ammo Ma'lumotlar saqlandi.\")</script>");
	}

}
?>
<script>location.href="addpage.php"</script>