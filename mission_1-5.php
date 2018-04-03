<?php
//入力テキストを"$post2"に格納
$p2=$_POST["inp2"];
//failnameでテキストファイルの名前を作成
$filename='kadai5.txt';
//fopenの書き込みモードwでファイルを開く
$fp=fopen($filename,'w');
//fopenで開いたファイルに書き込む
fwrite($fp,$p2);
//ファイルを閉じる
fclose($fp);

?>


<!--html開始-->
<html>
<head>
</head>
<!--本文開始-->
<body>
<!--formで要素作成-->
<form method="post" action="mission_1-5.php">
<!--inputで入力フォームとボタン作成-->
<p><input type="text" name="inp2"></p>
<p><input type="submit" name="b2" value="送信"></p>

</form>
</body>
</html>
