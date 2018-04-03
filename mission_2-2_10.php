<?php
//php開始
//名前格納
$name=$_POST["n"];
//コメント格納
$com=$_POST["c"];
//作成テキストファイル
$filename="kadai_2-2.txt";
if(empty($com)){
	//コメントなしなら何も起きない
	}else{
	//名前欄がなければ名前を「名無し」に
		if(empty($name)){
			$name="名無し";
		}

	//ファイルを開く
	$fp=fopen($filename,"a");


		//行数を数えるために配列の数を数える
	//ファイルを1行ごとに配列に格納
	$file_array=file("$filename");

	$an=count($file_array);

	$an++;

	//日付と時間
	$day=date("Y/m/d/H:i:s");
	//書き込む
	fwrite($fp,$an."<>".$name."<>".$com."<>".$day."\r\n");
	//ファイルを閉じる
	fclose($fp);

}
?>


<!--html開始-->
<html>
<!--ヘッダー-->
<head>
<!--タイトル作成-->
<title>Cちゃんねる掲示板(仮)</title>
</head>
<!--本文-->
<body>

Cちゃんねる掲示板(仮)

<!--入力フォーム開始-->
<form method="post" action="mission_2-2_10.php">


<!--名前入力欄-->
<p>名前:<input type="text" name="n"></p>
<!--コメント入力欄-->
<p>コメント:<input type="text" name="c"></p>
<!--送信ボタン-->
<p><input type="submit" value="送信"></p>
<!--入力フォーム終了-->
</form>
<!--本文終了-->
</body>
<!--html終了-->
</html>