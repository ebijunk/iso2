<?php
//�f�[�^�x�[�X�ւ̐ڑ�
//mysqul:dbname=�f�[�^�x�[�X�̖��O;host=localhost(DB�̃z�X�g)//���[�U�[��//�p�X���[�h
$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';
$pdo=new PDO($dsn,$user,$password);

//���������΍�
$stmt=$pdo->query('SET NAMES utf8');

//�f�[�^�ҏW,UPDATE��
$id=1; $nm="namex"; $kome="testx";
$sql="update tbtest set name='$nm' ,comment='$kome' where id='$id';";
$result=$pdo->query($sql);

?>