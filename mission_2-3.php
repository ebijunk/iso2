<?php
//php�J�n
//���O�i�[
$name=$_POST["n"];
//�R�����g�i�[
$com=$_POST["c"];
//�쐬�e�L�X�g�t�@�C��
$filename="kadai_2-2.txt";
if(empty($com)){
	//�R�����g�Ȃ��Ȃ牽���N���Ȃ�
	}else{
	//���O�����Ȃ���Ζ��O���u�������v��
		if(empty($name)){
			$name="������";
		}

	//�t�@�C�����J��
	$fp=fopen($filename,"a");


		//�s���𐔂��邽�߂ɔz��̐��𐔂���
	//�t�@�C����1�s���Ƃɔz��Ɋi�[
	$file_array=file("$filename");

	$an=count($file_array);

	$an++;

	//���t�Ǝ���
	$day=date("Y/m/d/H:i:s");
	//��������
	fwrite($fp,$an."<>".$name."<>".$com."<>".$day."\r\n");
	//�t�@�C�������
	fclose($fp);

}
?>


<!--html�J�n-->
<html>
<!--�w�b�_�[-->
<head>
<!--�^�C�g���쐬-->
<title>C�����˂�f����(��)</title>
</head>
<!--�{��-->
<body>

C�����˂�f����(��)

<!--���̓t�H�[���J�n-->
<form method="post" action="mission_2-2_10.php">


<!--���O���͗�-->
<p>���O:<input type="text" name="n"></p>
<!--�R�����g���͗�-->
<p>�R�����g:<input type="text" name="c"></p>
<!--���M�{�^��-->
<p><input type="submit" value="���M"></p>
<!--���̓t�H�[���I��-->
</form>

<?php
//php�J�n
//�e�L�X�g�t�@�C���̖��O
$file_n='kadai_2-2.txt';
//�z��ɂ��Ċi�[
$file_a=file("$file_n");

//��s���\��
foreach($file_a as $value){
	//�z�������ɕ����Ċi�[
	$file_ex=explode("<>",$value);
	//�܂��͕������ꂽ�z������ɕ\��
	foreach($file_ex as $i){
		echo $i;
	}
	//���s
	echo"<br/>\r\n";
}
?>


<!--�{���I��-->
</body>
<!--html�I��-->
</html>
