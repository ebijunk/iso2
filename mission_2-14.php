<?php
//データベースへの接続
//mysqul:dbname=データベースの名前;host=localhost(DBのホスト)//ユーザー名//パスワード
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password);

//文字化け対策
$stmt=$pdo->query('SET NAMES utf8');
//DELETE文でテーブルデータ削除
$id=0;//番号指定
//delete from テーブルの名前 where id='指定番号'
$sql="delete from keiziban where no='$id';";

$result=$pdo->query($sql);

?>