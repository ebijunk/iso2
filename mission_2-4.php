<?php
//php開始
//名前格納
$name=$_POST["n"];
//コメント格納
$com=$_POST["c"];
//削除対象番号を記録
$del=$_POST["del"];
//作成テキストファイル
$filename='kadai_2-4.txt';
//ファイルの中身を配列として格納
$filebox=file("$filename");

//削除対象が存在する場合分岐
if(empty($del)){
}else{
	//上書きのため一度開く
	$fp=fopen("$filename",w);
	//fweite($fp,"");
	//何も入力せず閉じる
	fclose($fp);
	//echo count($filebox);
	
	foreach($filebox as $value_del){
		//番号取得のためファイルの中身を分割
		$delfile=explode("<>",$value_del);
		//削除番号と一致したら上書きの分岐
		if($delfile[0]==$del){
		//該当部分を別の言葉に上書きすることで削除後の番号を変化させない
		$filebox[$del-1]="$del".':このコメントは削除されました'."\r\n";
		}
	}
	//一行ずつ書き込む
	foreach($filebox as $value_del2){
		//追記用にもう一度開く
		$fp=fopen("$filename",'a');
		//一行ごとに書き込む
		fwrite($fp,$value_del2);
		fclose($fp);
	}
	//foreach($filebox as $a){
	//echo $a."<br/>\r\n";
	//}
	//リセット用
	//$fp=fopen("$filename",w);
	//fclose($fp);

}

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
<form method="post" action="mission_2-4.php">


<!--名前入力欄-->
<p>名前:<input type="text" name="n"></p>
<!--コメント入力欄-->
<p>コメント:<input type="text" name="c"></p>
<!--削除用番号入力入力フォーム-->
<p>削除対象番号:<input type="text" name="del"></p>
<!--送信ボタン-->
<p><input type="submit" value="送信"></p>
<!--入力フォーム終了-->
</form>

<?php
//php開始
//テキストファイルの名前
$file_n='kadai_2-4.txt';
//配列にして格納
$file_a=file("$file_n");

//一行ずつ表示
foreach($file_a as $value){
	//配列をさらに分けて格納
	$file_ex=explode("<>",$value);
	//まずは分割された配列を一列に表示
	foreach($file_ex as $i){
		echo $i.':';
	}
	//改行
	echo"<br/>\r\n";
}
?>


<!--本文終了-->
</body>
<!--html終了-->
</html>
