<?php
//post�œ��͕��i�[
$p=$_POST['m_6_inp'];
//if���ŕ���J�n
if(empty($p)){
}else{
//�t�@�C����
$filename='kadai6.txt';
//�t�@�C����ǋL�`���ŊJ��
$fp=fopen($filename,'a');
//�t�@�C���ɏ�������
fwrite($fp,$p."\r\n");
//�t�@�C�������
fclose($fp);
}

?>
<!--//html�J�n-->
<html>
<!--//�{��-->
<body>
<!--//form�Ō`���-->
<form method="post" name="mission_1-6_11.php">
<!--//���͗�-->
<p><input type="text" name="m_6_inp"></p>
<!--//���M�{�^��-->
<p><input type="submit" name="m_6_b" value="���M"></p>
</form>

</body>
</html>
