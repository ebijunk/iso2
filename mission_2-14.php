<?php
//�f�[�^�x�[�X�ւ̐ڑ�
//mysqul:dbname=�f�[�^�x�[�X�̖��O;host=localhost(DB�̃z�X�g)//���[�U�[��//�p�X���[�h
$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';
$pdo=new PDO($dsn,$user,$password);

//���������΍�
$stmt=$pdo->query('SET NAMES utf8');
//DELETE���Ńe�[�u���f�[�^�폜
$id=0;//�ԍ��w��
//delete from �e�[�u���̖��O where id='�w��ԍ�'
$sql="delete from keiziban where no='$id';";

$result=$pdo->query($sql);

?>