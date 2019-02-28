<html>
<head>
<title>买买买！</title>
</head>
<body>
<table>
<tr>
    <th>ID</th> <th>名称</th><th>数量</th> <th>购买</th>
<?php
$conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());
 mysql_select_db("test",$conn) or die("数据库访问错误".mysql_error());
 mysql_query("set names gb2312");
$rs = mysql_query('select * from goods');
    while($rows = mysql_fetch_assoc($rs)){
    echo '<tr>';
    echo  '<td>'.$rows['id'].'</td>'; 
    echo  '<td>'.$rows['name'].'</td>';  
    echo  '<td>'.$rows['num'].'</td>';	
    echo  '<td><a href="buy.php?id='.$rows['id'].'">购买</td>' ;
    echo '</tr>';
    }
?>
</tr>
</table>
</form>
</body>
</html>