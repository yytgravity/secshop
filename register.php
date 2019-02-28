
<?php
    $conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());
	mysql_select_db("test",$conn) or die("数据库访问错误".mysql_error());
	mysql_query("set names gb2312");
    $password = $_POST['password'];
    $userName = $_POST['username'];
    $idSQL = "select id from user where username = '$userName'";
    $resultSet = mysql_query($userNameSQL);
	session_start();
	$_SESSION['id']=$resultSet['id'];
    $registerSQL = "insert into user (username,password) values( '$userName', '$password')";
    mysql_query($registerSQL);
    header("Location:login.html");
?>