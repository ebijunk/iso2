<?php
//php�J�n
//���O�i�[
$name=$_POST["n"];

//�R�����g�i�[
$com=$_POST["c"];

//���t�Ǝ���
$day=date("Y/m/d/H:i:s");

//�폜�Ώ۔ԍ����i�[
$del=$_POST["del"];

//�ҏW�Ώ̔ԍ����i�[
$ch=$_POST["ch"];

//�B���p�����[�^���i�[
$h=$_POST["hide"];

//�ҏW�t���O�̕ϐ����Z�b�g
$nv="";
$cv="";

//�쐬�e�L�X�g�t�@�C��
$filename='kadai_2-4.txt';

//�t�@�C���̒��g��z��Ƃ��Ċi�[
$filebox=file("$filename");

//�B���p�����[�^�����݂��鎞����
if(!empty($h)){
	$ch=$h;
	//�㏑���̂��߈�x�J��
	$fp=fopen("$filename",w);
	//�������͂�������
	fclose($fp);
	
	foreach($filebox as $hchtxt){
		//�������Ċi�[
		$hchtxtb=explode("<>",$hchtxt);
		
		//�ԍ�����v�����珈���J�n
		if($hchtxtb[0]==$ch){
			
			//��������
			$filebox[$ch-1]="$ch".'<>'."$name".'<>'."$com".'<>'."$day"."\r\n";
		}
	}
	//�㏑���J�n
	foreach($filebox as $hensyu){
		$fp=fopen("$filename","a");
		fwrite($fp,$hensyu);
		fclose($fp);
	}
	//�R�����g���폜
	$com="";
	$ch="";
}

//�ҏW�Ώ̂����݂���ꍇ����
if(!empty($ch)){
//�J��Ԃ��l���擾���Ĕԍ����擾
	foreach($filebox as $chtxt){
	
		//�������Ĕԍ��擾
		$chtxtb=explode("<>",$chtxt);
		
		//�������������ԍ��Ȃ�ΕҏW�̂��ߓ��̓t�H�[���ɖ��O�ƃR�����g����
		if($chtxtb[0]==$ch){
			$nv=$chtxtb[1];
			$cv=$chtxtb[2];
			$hide=$ch;
		}
	}
}

//�폜�Ώۂ����݂���ꍇ����
if(empty($del)){
}else{
	//�㏑���̂��߈�x�J��
	$fp=fopen("$filename",w);
	//�������͂�������
	fclose($fp);
	//echo count($filebox);
	
	foreach($filebox as $value_del){
		//�ԍ��擾�̂��߃t�@�C���̒��g�𕪊�
		$delfile=explode("<>",$value_del);
		//�폜�ԍ��ƈ�v������㏑���̕���
		if($delfile[0]==$del){
		//�Y��������ʂ̌��t�ɏ㏑�����邱�Ƃō폜��̔ԍ���ω������Ȃ�
		$filebox[$del-1]="$del".'<>'.'---'.'<>'.'���̃R�����g�͍폜����܂���'.'<>'.'---'."\r\n";
		}
	}
	//��s����������
	foreach($filebox as $value_del2){
		//�ǋL�p�ɂ�����x�J��
		$fp=fopen("$filename",'a');
		//��s���Ƃɏ�������
		fwrite($fp,$value_del2);
		fclose($fp);
	}
	//foreach($filebox as $a){
	//echo $a."<br/>\r\n";
	//}
	//���Z�b�g�p
	//$fp=fopen("$filename",w);
	//fclose($fp);

}

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
<form method="post" action="mission_2-5.php">


<!--���O���͗�-->
<p>���O:<input type="text" name="n" value="<?php echo $nv ?>"></p>
<!--�R�����g���͗�-->
<p>�R�����g:<input type="text" name="c" value="<?php echo $cv ?>"></p>

<!--�폜�p�ԍ����͓��̓t�H�[��-->
<p>�폜�Ώ۔ԍ�:<input type="text" name="del"></p>

<!--�ҏW�ԍ����̓t�H�[��-->
<p>�ҏW�Ώ̔ԍ�:<input type="text" name="ch"></p>

<!--�B�������D�����ɒl�����邩�ǂ����ŕҏW���邩�ǂ������߂�-->
<p><input type="hidden" name="hide" value="<?php echo $hide;?>"></p>

<!--���M�{�^��-->
<p><input type="submit" value="���M"></p>

<!--���̓t�H�[���I��-->
</form>

<?php
//php�J�n
//�e�L�X�g�t�@�C���̖��O
//$file_n='kadai_2-4.txt';
//�z��ɂ��Ċi�[
//$file_a=file("$file_n");

//��s���\��
foreach($filebox as $value){
	//�z�������ɕ����Ċi�[
	$file_ex=explode("<>",$value);
	//�܂��͕������ꂽ�z������ɕ\��
	foreach($file_ex as $i){
		echo $i.':';
	}
	//���s
	echo"<br/>\r\n";
}
?>


<!--�{���I��-->
</body>
<!--html�I��-->
</html>
