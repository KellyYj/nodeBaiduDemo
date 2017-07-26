var express = require('express');
var router = express.Router();
var mysql = require('mysql');
var db = require('./db');

var connection = mysql.createPool(db);

/* 后台路由页面 */
router.get('/getnews', function(req, res, next) {
	connection.query('select * from `news` order by id desc',function(err,rows){
		res.json(rows);
	});
});

//确认更新
router.post('/update',function(req,res){
	var newsid = req.body.id,
	newstype = req.body.newstype,
	newstitle = req.body.newstitle,
	newsimg = req.body.newsimg,
	newstime = req.body.newstime,
	newssrc = req.body.newssrc;
	connection.query('UPDATE `news` SET `newstype` = ?,`newstitle` = ?, `newsimg` = ?, `newstime` = ?, `newssrc` = ? WHERE `id` = ?',[newstype,newstitle,newsimg,newstime,newssrc,newsid],function(err,rows){
//		console.log(rows.changeRows);
			res.json({"code":"200"});
	});
});

//模态框取值
router.get('/currentews',function(req,res){
	var newsid = req.query.newsid;
	connection.query('select * from `news` where `id` = ?',[newsid],function(err,rows){
		res.json(rows);
	});
});

//删除模态框
router.post('/deletenews',function(req,res){
	var newsid = req.body.newsid;
	connection.query('delete from `news` where `id` = ?',[newsid],function(err,result){
//		console.log(result.affectedRows);
			res.json({"code":"200"});
	});
});

//insert
router.post('/insertnews',function(req,res){
		var newsid = req.body.id,
		newstype = req.body.newstype,
		newstitle = req.body.newstitle,
		newsimg = req.body.newsimg,
		newstime = req.body.newstime,
		newssrc = req.body.newssrc;
	 connection.query('INSERT INTO `news` ( `newstype`, `newstitle`, `newsimg`, `newstime`, `newssrc`) VALUES (?,?,?,?,?)',[newstype,newstitle,newsimg,newstime,newssrc],function(err,result){
//	 	console.log("insert ok");
		res.json({"code":"200"});
	});
});
module.exports = router;