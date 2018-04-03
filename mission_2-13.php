<?php
//データベースへの接続
//mysqul:dbname=データベースの名前;host=localhost(DBのホスト)//ユーザー名//パスワード
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password);

//文字化け対策
$stmt=$pdo->query('SET NAMES utf8');

//データ編集,UPDATE文
$id=1; $nm="namex"; $kome="testx";
$sql="update tbtest set name='$nm' ,comment='$kome' where id='$id';";
$result=$pdo->query($sql);

?>