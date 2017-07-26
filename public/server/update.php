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
		@$newsid = $_POST['id'];
	
//		$sql = "UPDATE 'news' SET 'newstitle'='{$newstitle}','newstype'='{$newstype}','newsimg'='{$newsimg}','$newstime'='{$newstime}','$newssrc'='{$newssrc}' WHERE 'id'={$newsid}"
	
//		$sql = "UPDATE INTO `news` SET ( `newstype`, `newstitle`, `newsimg`, `newstime`, `newssrc`) VALUES ( '{$newstitle}', '{$newstype}', '{$newsimg}', '{$newstime}', '{$newssrc}')";
	
	$sql = "UPDATE `news` SET `newstype` = '{$newstype}',`newstitle` = '{$newstitle}', `newsimg` = '{$newsimg}', `newstime` = '{$newstime}', `newssrc` = '{$newssrc}' WHERE `news`.`id` = {$newsid}";
	
		mysqli_query($link,"SET NAMES utf8");
		$result =mysqli_query($link,$sql);
		
		echo json_encode(array('success'=>'ok'));
	}
?>