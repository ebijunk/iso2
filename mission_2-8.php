<?php
//データベースへの接続
//mysqul:dbname=データベースの名前;host=localhost(DBのホスト)//ユーザー名//パスワード
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password);


$stmt=$pdo->query('SET NAMES utf8');

//テーブル作成
$sql="CREATE TABLE tbtest"
." ("
. "id INT,"
. "name char(32),"
. "comment TEXT"
.");";
$stmt=$pdo->query($sql);


?>