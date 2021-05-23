<?
$dbname="docs";
$dbUserName="mysql";
$dbPassword="mysql";
$dbHost="localhost";

$db=mysqli_connect($dbHost,$dbUserName, $dbPassword,$dbname)or die("Connection Error");
?>