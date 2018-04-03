<?php
header('Content-Type: text/html; charset=UTF-8');
//データベースへの接続
//mysqul:dbname=データベースの名前;host=localhost(DBのホスト)//ユーザー名//パスワード
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password);

//文字化け対策
$stmt=$pdo->query('SET NAMES utf8');


//掲示板プログラム作成
//テーブル作成
//テーブル作成は2-15_maketable.phpで先に行っておく．
//$sql="CREATE TABLE keiziban"

//." ("
//
//. "no INT AUTE_INCREMENT,"
//. "name char(32) ,"
//. "comment TEXT ,"
//. "time TEXT,"
//. "pass TEXT"
//. "index (no);"
//.");";
//
//$stmt=$pdo->query($sql);


//フォームからの入力受け取り部分
//名前格納
$n=$_POST["n"];

//コメント格納
$c=$_POST["c"];

//日付と時間
$d=date("Y/m/d/H:i:s");

//削除対象番号を格納
$del=$_POST["del"];

//編集対称番号を格納
$ch=$_POST["ch"];

//隠しパラメータを格納
$h=$_POST["hide"];

//パスワードを格納
$pass=$_POST["pass"];


$nv="";
$cv="";

//パスワード機能
//パスワードが異なる場合フラグ変数の中身を空にする．
if(!empty($ch)){
	$sql='SELECT * FROM kb';
	$results=$pdo->query($sql);
	foreach($results as $row){
		//編集番号と一致する部分を調べる
		if($ch==$row['no']){
			//パスワード部分が空かどうか調べる．空ならそのまま
			if(!empty($row['pass'])){
				//パスワードが一致しなければ編集番号削除してフラグを消す
				if($pass != $row['pass']){
					$ch='';
				}
			}
		}	
	}
}


if(!empty($del)){
	$sql='SELECT * FROM kb';
	$results=$pdo->query($sql);
	foreach($results as $row){
		//削除番号と一致する部分を調べる
		if($del==$row['no']){
			//パスワード部分が空かどうか調べる．空ならそのまま
			if(!empty($row['pass'])){
				//パスワードが一致しなければ削除番号削除してフラグを消す
				if($pass !=$row['pass']){
					$del='';
				}
			}
		}	
	}
}

//名前が書かれていなければ名無しとする
if(empty($n)){
	$n='no_name';
}
//削除機能
//削除番号があれば開始
if(!empty($del)){
	//コメントに入力があった場合空に．
	$c='';
	//UPDATE文でコメントの中身を書き換える．
	$ndel='---'; $cdel='comment delete'; $tdel='---';
	$sql="update kb set name='$ndel', commen='$cdel', time='$tdel', pass='' where no='$del';";
	$result=$pdo->query($sql);	
}

//編集機能
//隠しパラメータあり(編集後の入力)であれば分岐
if(!empty($h)){
	//編集時パスワード変更されていなければもとのパスワードのままに
	if(empty($pass)){
		//MySQLのデータをSELECTで取得
		$sql='SELECT * FROM kb';
		$results=$pdo->query($sql);
		//取得した物を代入
		foreach($results as $row){
		//番号が一致したら代入
			if($row['no']==$h){
				$pass=$row['pass'];
			}
		}
		
	}
	//UPDATE文で書き換える．
	$sql="update kb set name='$n',commen='$c',time='$d',pass='$pass' where no='$h';";
	$result=$pdo->query($sql);
	//他の条件分岐に引っかからないよう不必要情報整理
	$c='';$ch='';
}

//編集番号があれば開始
if(!empty($ch)){
	//コメント中身を空に
	$c='';
	//隠しパラメータに値を代入
	$hide=$ch;
	//編集番号に対応する部分を抜き出して名前欄，コメント欄に表示
	//MySQLのデータをSELECTで取得
	$sql='SELECT * FROM kb';
	$results=$pdo->query($sql);
	//取得した物を代入
	foreach($results as $row){
		//番号が一致したら代入
		if($row['no']==$ch){
			$nv=$row['name'];
			$cv=$row['commen'];
		}
	}
}

//新コメント入力
if(!empty($c)){
	//MySQLのテーブルに入力する．
	$sql=$pdo->prepare("INSERT INTO kb (name,commen,time,pass) VALUES (:n,:c,:day,:pass);");
	$sql->bindParam(':n',$n,PDO::PARAM_STR);
	$sql->bindParam(':c',$c,PDO::PARAM_STR);
	$sql->bindParam(':day',$d,PDO::PARAM_STR);
	$sql->bindParam(':pass',$pass,PDO::PARAM_STR);
	$sql->execute();
}

//php終了部分
?>

<!--html開始-->
<html>
	<!--ヘッダー-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!--タイトル作成-->
		<title>Cちゃんねる掲示板(仮)</title>
	</head>
	<!--本文-->
	<body>
	
	Cちゃんねる掲示板(仮)
	
		<!--入力フォーム開始-->
		<form method="post" action="mission_2-15_2.php">
			
			
			<!--名前入力欄-->
			<p>名前:<input type="text" name="n" value="<?php echo $nv ?>"></p>
			
			<!--コメント入力欄-->
			<p>コメント:<input type="text" name="c" value="<?php echo $cv ?>"></p>
			
			<!--削除用番号入力入力フォーム-->
			<p>削除対象番号:<input type="text" name="del"></p>
			
			<!--編集番号入力フォーム-->
			<p>編集対称番号:<input type="text" name="ch"></p>
			
			<!--パスワード入力フォーム-->
			<p>パスワード:<input type="password" name="pass"></p>
			
			<!--隠し部分．ここに値があるかどうかで編集するかどうか決める-->
			<p><input type="hidden" name="hide" value="<?php echo $hide;?>"></p>
			
			<!--送信ボタン-->
			<p><input type="submit" value="送信"></p>
			
		<!--入力フォーム終了-->
		</form>
		<?php
			//MySQLのデータをSELECTで取得
			$sql='SELECT * FROM kb';
			//取得情報の表示
			$results=$pdo->query($sql);
			foreach($results as $row){
				echo $row['no'].',';
				echo $row['name'].',';
				echo $row['commen'].',';
				echo $row['time'].'<br>';
			}
		?>
	</body>
</html>