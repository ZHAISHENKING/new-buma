
<?php
	
	
	header("content-type","text/html;charset=utf-8");
	
	$userPhone = $_POST['userPhone'];
	$userPass = $_POST['userPass'];
	$userName=$_POST['userName'];
	$userEmail=$_POST['userEmail'];
	//echo($userName.$userPass);


	//建立连接
	$conn = mysql_connect("localhost:3306","root","qianfeng");
	
	if($conn){
		echo("连接成功");
	}else{
		echo("连接失败");
	}
	
	//2、选择数据库
	mysql_select_db("buma",$conn);
	
	//3、查找
	
	$sqlstr = 'select * from users' ;
	$query = @mysql_query("select * from users");
	echo mysql_result($query, 0, 'userName'); 
   
	
	
	//4、关闭数据库
	mysql_close($conn);
	?>