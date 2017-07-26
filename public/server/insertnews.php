<?php
	header("Content-type:application/json; charset=utf-8");
	require_once('db.php');
	if($link){
		//insert news
		@$newstitle = $_POST['newstitle'];
		@$newstype = $_POST['newstype'];
		@$newsimg = $_POST['newsimg'];
		@$newstime = $_POST['newstime'];
		@$newssrc = $_POST['newssrc'];
		
//		$sql = "INSERT INTO news ('newstitle','newstype','newsimg','newstime','newssrc') VALUES('{$newstitle}','{$newstype}','{$newsimg}','{$newstime}','{$newssrc}')";
		
		$sql = "INSERT INTO `news` ( `newstype`, `newstitle`, `newsimg`, `newstime`, `newssrc`) VALUES ( '{$newstype}', '{$newstitle}','{$newsimg}', '{$newstime}', '{$newssrc}')";
		
		mysqli_query($link,"SET NAMES utf8");
		$result =mysqli_query($link,$sql);
		
		echo json_encode(array('success'=>'ok'));
	}
?>