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
	
	//3、执行语句（插入数据）
	$sqlStr = "insert into users(Phone,passWord,userName,email)
   values('".$userPhone."','".$userPass."','".$userName."','".$userEmail."')";
   
	mysql_query($sqlStr,$conn);
	
	//4、关闭数据库
	mysql_close($conn);

?>