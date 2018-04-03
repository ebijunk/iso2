<?php
//データベースへの接続
//mysqul:dbname=データベースの名前;host=localhost(DBのホスト)//ユーザー名//パスワード
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password);

$stmt=$pdo->query('SET NAMES utf8');

$sql='SELECT * FROM keiziban;';
$results=$pdo->query($sql);
foreach($results as $row){
echo $row['no'].',';
echo $row['name'].',';
echo $row['commen'].'<br>';
}
?>