<?php
//データベースへの接続
//mysqul:dbname=データベースの名前;host=localhost(DBのホスト)//ユーザー名//パスワード
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password);

//文字化け対策
$stmt=$pdo->query('SET NAMES utf8');

$sql='SHOW CREATE TABLE keiziban;';
$result=$pdo->query($sql);
foreach($result as $row){
	print_r($row);
}
echo"<hr>";
?>