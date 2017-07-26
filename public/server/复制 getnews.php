<?php

	header("Content-type: application/json; charset=utf-8");
	
	$localhost = 'localhost';
	$dbusername = 'root';
	$dbpassword = '';
	$dbName = 'mynewsdb';
	$dbport = 3306;
	
	$link = mysqli_connect($localhost,$dbusername,$dbpassword,$dbName,$dbport);
	
	if(!$link){
		echo json_encode(array('连接信息'=>'连接失败'))；
	}else{
		echo json_encode(array('连接信息'=>'连接成功'))
	}
	
//	if($link){
//		//success 
//		$sql = 'SELECT * FROM news';
//		
//		mysqli_query($link,"SET NAMES utf-8");
//
//		$result = mysqli_query($link,$sql);
//		$senddata = array();
//		while($row = mysqli_fetch_asso($result)){
//			array_push($senddata,array(
//			'id'=>$row['id'],
//			'newstype'=>['newstitle'],
//			'newsimg'=>['newsimg'],
//			'newstime'=>['newstime'],
//			'newssrc'=>['newssrc']
//			));
//		}
//		echo json_encode($senddata);
//	}else{
//		echo json_encode(array('success'=>'none'))
//	}
//	mysqli_close($link);
//	$arr = array(
//		'newstype'=>'百家',
//		'newsimg'=>'img/2.jpg',
//		'newstime'=>'2017-07-18',
//		'newssrc'=>'财经',
//		'newstitle'=>'测试获取新闻页'
//	);
//	echo json_encode($arr);
?>