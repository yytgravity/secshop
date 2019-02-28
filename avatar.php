<?php
$conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());
 mysql_select_db("test",$conn) or die("数据库访问错误".mysql_error());
 mysql_query("set names gb2312");
ob_start();
session_start();
$userName=$_SESSION['username'];
$myPictureName = $_FILES['myPicture']['name'];
if((!isset($_FILES['avatar']['name']))||($_FILES['avatar']['name']==NULL))
{
	header("Location:index.php");
    exit();
}
if($_FILES["avatar"]["error"]==1)exit('文件过大');
if (!((($_FILES["avatar"]["type"] == "image/png")||($_FILES["avatar"]["type"] == "image/jpeg")||($_FILES["avatar"]["type"] == "image/pjpeg"))))exit("文件格式错误");
$fileName = $file['name'];
$myPictureName = $_FILES["avatar"]['name'];
$registerSQL = "update user set avatar='{$myPictureName}' where username = '{$userName}'";
mysql_query($registerSQL);
copy($_FILES["avatar"]["tmp_name"],"E:/wamp/wamp64/www/upload/{$_FILES["avatar"]["name"]}");
header("Location:/");
?>