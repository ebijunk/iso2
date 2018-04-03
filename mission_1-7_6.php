<?php

//ファイルの読み込み変数に配列として格納
$file=file("kadai6.txt");
$filename="kadai6.txt";
//入力フォームの文字を格納
$post=$_POST['po'];
//条件分岐：入力文字無しの場合入力されない
if(empty($post)){
//入力文字有の場合kadai6.txtに入力処理
}else{
//ファイルを開く
$fp=fopen($filename,"a");
//ファイルに追記
fwrite($fp,$post."\r\n");
//ファイルを閉じる
fclose($fp);
}
//ループ開始
foreach($file as $value){
//改行しつつ表示
echo $value."<br/>\n";
}


?>

<!--html開始-->
<html>
<!--本文-->
<body>
<!--形づくる-->
<form method="post" name="mission_1-7_6.php">
<!--入力フォームと送信ボタン作成-->
<p><input type="text" name="po"></p>
<p><input type="submit" name="b1" value="送信"></p>
</form>
</body>
</html>