<?php
//�f�[�^�x�[�X�ւ̐ڑ�
//mysqul:dbname=�f�[�^�x�[�X�̖��O;host=localhost(DB�̃z�X�g)//���[�U�[��//�p�X���[�h
$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';
$pdo=new PDO($dsn,$user,$password);

//���������΍�
$stmt=$pdo->query('SET NAMES utf8');

$name='name2';
$comment='test2';

$sql=$pdo->prepare("INSERT INTO tbtest (id,name,comment) VALUES ('2',:name,:comment);");
$sql->bindParam(':name',$name,PDO::PARAM_STR);
$sql->bindParam(':comment',$comment,PDO::PARAM_STR);
$sql->execute();

?>