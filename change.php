
<?php
    $conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());
	mysql_select_db("test",$conn) or die("数据库访问错误".mysql_error());
	mysql_query("set names gb2312");
	$oldpassword = $_POST['old'];
    $newpassword = $_POST['new'];
     $sql = "update user set password='{$newpassword}' where password = '{$oldpassword}'";
	$result = mysql_query($sql);
     if ($result) {
	 echo '修改成功';
     }
	 else
	 {
	 echo "失败";
	 }
         header("Location:login.php");
?> 