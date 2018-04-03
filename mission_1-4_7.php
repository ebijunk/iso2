
<?php
//変数impに送信フォームの内容保存
$imp=$_POST["imp"];
//送信された内容を表示
echo $imp;
?>


<!--html宣言-->
<html>
<!--本文部分作成-->
<head>
</head>
<body>
<!--formタグで要素作成-->
<form method="post" action="mission_1-4_7.php">
<!--methodでpost形式を，actionでデータ送信先を指定-->
<!--inputタグで入力フォーム配置-->
<p><input type="text" name="imp" value="テキストを入力してください"></p>
<!--inputタグで送信ボタン配置-->
<p><input type="submit" name="bottan" value="送信"></>


</form>
</body>
</html>