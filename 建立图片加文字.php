<?php
// ����һ�� 100X30 ��ͼ��
$im = imagecreate(120, 30);

// ��ɫ��������ɫ�ı�
$bg = imagecolorallocate($im, 255, 255, 255);//����ɫ
$textcolor = imagecolorallocate($im, 0, 0, 0);//������ɫ

// ���ַ���д��ͼ�����Ͻ�
imagestring($im, 3, 10, 7, "06 52 23 88 63", $textcolor);

// ���ͼ��
header("Content-type: image/png");
imagepng($im);
?> 
