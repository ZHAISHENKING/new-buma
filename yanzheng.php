<?php
	
	
	header("content-type","text/html;charset=utf-8");
	
	$userName = $_GET['userName'];
	//建立连接
	$conn = mysql_connect("localhost:3306","root","qianfeng");
	//2、选择数据库
	mysql_select_db("buma",$conn);
	
	//3、查找
	
	$sqlstr = "select * from users where userName='".$userName."'" ;
	$result = mysql_query($sqlstr,$conn);
	//$query = @mysql_query("select * from users");
	//echo mysql_result($result, 1, 'userName'); 
    $rows=mysql_num_rows($result);
	
	
	//4、关闭数据库
	mysql_close($conn);
	
	echo($rows);
?>

