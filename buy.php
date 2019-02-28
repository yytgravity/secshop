<?php                                                                                                                                                            
$conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());
 mysql_select_db("test",$conn) or die("数据库访问错误".mysql_error());
 mysql_query("set names gb2312");
$id=(int)$_GET['id'];
    $rs = mysql_query('select * from goods');
    while($rows = mysql_fetch_assoc($rs)){
     $name=$rows['name'];
	 $num=$rows['num'];
	 $num=$num-1;
	}
	$sql = "update goods set num='{$num}' where id = '{$id}'";
    mysql_query($sql);
	header("Location:http://localhost/list.php");
?>