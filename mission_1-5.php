<?php
//���̓e�L�X�g��"$post2"�Ɋi�[
$p2=$_POST["inp2"];
//failname�Ńe�L�X�g�t�@�C���̖��O���쐬
$filename='kadai5.txt';
//fopen�̏������݃��[�hw�Ńt�@�C�����J��
$fp=fopen($filename,'w');
//fopen�ŊJ�����t�@�C���ɏ�������
fwrite($fp,$p2);
//�t�@�C�������
fclose($fp);

?>


<!--html�J�n-->
<html>
<head>
</head>
<!--�{���J�n-->
<body>
<!--form�ŗv�f�쐬-->
<form method="post" action="mission_1-5.php">
<!--input�œ��̓t�H�[���ƃ{�^���쐬-->
<p><input type="text" name="inp2"></p>
<p><input type="submit" name="b2" value="���M"></p>

</form>
</body>
</html>
