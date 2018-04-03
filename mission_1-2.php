<?php
//テキストファイル名を変数$filenameに代入する．
$filename='kadai2.txt';
//テキストファイルに「test」と書き込む
//まずはfopenのwモード（書き込みモード）でファイルを開く
$fp=fopen($filename,'w');

//fopenで開いたテキスト
fwrite($fp,'test');
fclose($fp);
?>