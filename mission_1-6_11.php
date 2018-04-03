<?php
//postで入力分格納
$p=$_POST['m_6_inp'];
//if文で分岐開始
if(empty($p)){
}else{
//ファイル名
$filename='kadai6.txt';
//ファイルを追記形式で開く
$fp=fopen($filename,'a');
//ファイルに書き込み
fwrite($fp,$p."\r\n");
//ファイルを閉じる
fclose($fp);
}

?>
<!--//html開始-->
<html>
<!--//本文-->
<body>
<!--//formで形作る-->
<form method="post" name="mission_1-6_11.php">
<!--//入力欄-->
<p><input type="text" name="m_6_inp"></p>
<!--//送信ボタン-->
<p><input type="submit" name="m_6_b" value="送信"></p>
</form>

</body>
</html>
