<?php
//�f�[�^�x�[�X�ւ̐ڑ�
//mysqul:dbname=�f�[�^�x�[�X�̖��O;host=localhost(DB�̃z�X�g)//���[�U�[��//�p�X���[�h
$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';
$pdo=new PDO($dsn,$user,$password);

$stmt=$pdo->query('SET NAMES utf8');

//�e�[�u���ꗗ�\��
$sql='SHOW TABLES;';
$result=$pdo->query($sql);
foreach($result as $row){
echo $row[0];
echo '<br>';
}
echo "<hr>";


?>