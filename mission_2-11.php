<?php
//データベースへの接続
//mysqul:dbname=データベースの名前;host=localhost(DBのホスト)//ユーザー名//パスワード
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password);

//文字化け対策
$stmt=$pdo->query('SET NAMES utf8');

$name='name2';
$comment='test2';

$sql=$pdo->prepare("INSERT INTO tbtest (id,name,comment) VALUES ('2',:name,:comment);");
$sql->bindParam(':name',$name,PDO::PARAM_STR);
$sql->bindParam(':comment',$comment,PDO::PARAM_STR);
$sql->execute();

?>