
<?php
if(!isset($_POST['password'])){
    header("location:login.php");
}
$username = htmlspecialchars($_POST['username']);
$password = $_POST['password'];
$conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());
mysql_select_db("test",$conn) or die("数据库访问错误".mysql_error());
mysql_query("set names gb2312");
$check_query = mysql_query("select username from user where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['username'] = $result['username'];
	header("Location:index.php");
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
 ?>
