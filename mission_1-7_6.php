<?php

//�t�@�C���̓ǂݍ��ݕϐ��ɔz��Ƃ��Ċi�[
$file=file("kadai6.txt");
$filename="kadai6.txt";
//���̓t�H�[���̕������i�[
$post=$_POST['po'];
//��������F���͕��������̏ꍇ���͂���Ȃ�
if(empty($post)){
//���͕����L�̏ꍇkadai6.txt�ɓ��͏���
}else{
//�t�@�C�����J��
$fp=fopen($filename,"a");
//�t�@�C���ɒǋL
fwrite($fp,$post."\r\n");
//�t�@�C�������
fclose($fp);
}
//���[�v�J�n
foreach($file as $value){
//���s���\��
echo $value."<br/>\n";
}


?>

<!--html�J�n-->
<html>
<!--�{��-->
<body>
<!--�`�Â���-->
<form method="post" name="mission_1-7_6.php">
<!--���̓t�H�[���Ƒ��M�{�^���쐬-->
<p><input type="text" name="po"></p>
<p><input type="submit" name="b1" value="���M"></p>
</form>
</body>
</html>