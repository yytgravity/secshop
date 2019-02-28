<?php
session_start();
if(!isset($_SESSION['username']))
	 header("location:first.php");
?>
<html>
<head>

</head>
<body>
<ul>
<img src='<?php
$conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());
mysql_select_db("test",$conn) or die("数据库访问错误".mysql_error());
mysql_query("set names gb2312");
session_start();
$result = mysql_query("select avatar from user where username='{$_SESSION['username']}'");
$rows = mysql_fetch_assoc($result);
echo 'upload/'.$rows["avatar"];
?>
' width='200px'/><li><a href="avatar.html">上传头像</a></li>
    <li><a href="change.html">修改密码</a></li>
    <li><a href="list.php">安全利器商店</a></li>
     <li><a href="logout.php">退出</a></li>
   
</ul>
<h1>欢迎来到secshop</h1>
</body>
</html>