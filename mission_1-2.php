<?php
//�e�L�X�g�t�@�C������ϐ�$filename�ɑ������D
$filename='kadai2.txt';
//�e�L�X�g�t�@�C���Ɂutest�v�Ə�������
//�܂���fopen��w���[�h�i�������݃��[�h�j�Ńt�@�C�����J��
$fp=fopen($filename,'w');

//fopen�ŊJ�����e�L�X�g
fwrite($fp,'test');
fclose($fp);
?>