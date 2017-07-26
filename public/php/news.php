<?php

$servername = "localhost";
$username = "root";
$password="";
//create
$conn = new mysqli($servername,$username,$password);
//check db
if($conn->connect_error){
	die("connection faild:".$conn->connect_error);
}else{
//	echo "connected successfully";

$sql = "SELECT * FROM  news";
$result = $conn->query($sql);
//	if(!$result){
//		die("errofffr".$conn->connect_error);
//	}else{
//		echo "successfully";
//	}

if($result -> num_rows >0){
	while($row = $result ->fetch_assoc()){
		echo "<br> id:".$row["id"]."-newsName".$row["newsName"]."newsContent".$row["newsContent"];
	}
}else{
	echo "0 results";
}
	
}

$conn->close();
?>