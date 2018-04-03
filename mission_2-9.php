<?php
//データベースへの接続
//mysqul:dbname=データベースの名前;host=localhost(DBのホスト)//ユーザー名//パスワード
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password);

$stmt=$pdo->query('SET NAMES utf8');

//テーブル一覧表示
$sql='SHOW TABLES;';
$result=$pdo->query($sql);
foreach($result as $row){
echo $row[0];
echo '<br>';
}
echo "<hr>";


?>