<?php


/*

ob_end_flush �� ��ˢ�����ͳ���������������ݲ��رջ���

ob_clean �� ��գ����������������

ob_end_clean �� ��գ����������������ر��������

ob_flush �� ��ˢ�����ͳ�������������е�����

ob_get_contents �� �������������������

*/


 
	/* 	ob_start();

		echo 'Hellon'; //���
		phpinfo(); //ʹ��phpinfo����

		$contents = ob_get_contents();
		echo "xxxx";
		//header('location:index.php'); //��������ض���index.php
		ob_end_clean();//���ȫ�����ݵ������

		echo 			$contents ;
		 
		*/
//**********************************************
echo "1234";
echo "56";
 
//ob_clean�Ǻ��Ե�ǰ�����е���� Ҳ����˵ǰ���������������������������
ob_clean(); 
 
//ob_start����php���￪ʼҪ��¼����������ˣ�������������ŵ��������ڴ����
ob_start(); 
 
echo "123";
echo "31";
$b = ob_get_contents();//��ʱ$b��ֵ����ǰ��������������ݣ�������$b��ֵΪ"12331"
echo $b; 





//*******************

ob_start(); 
echo   'level 1<br/> ';
ob_start(); 
echo   'level 2<br/> ';
ob_start(); 
echo   'level 3<br/> ';
ob_end_clean(); //��һ���޸�
ob_end_flush();
ob_end_clean(); //�ڶ����޸�



/*
�տ�ʼ��  F:null 

ob_start();
 �½�������A��  A: null -> F:null

echo 'level 1<br/> ';
��������������������͵Ļ�����A  A: 'level 1<br/>' -> F:null

ob_start(); 
�½�������B �� B:null  ->  A: 'level 1<br/>' -> F:null

echo   'level 2<br/> ';
��������������������͵Ļ�����B     B:'level 2<br/> ' ->  A: 'level 1<br/>' ->F:null

ob_start();
�½�������C   C:null  B:'level 2<br/> '   A: 'level 1<br/>' -> F:null

echo 'level 3<br/> ';
��������������������͵Ļ�����C    C:'level 3<br/> '  ->  B:'level 2<br/> '  ->  A: 'level 1<br/>' -> F:null

ob_end_clean(); //��һ���޸�
������C����ղ��رա�  B:'level 2<br/> '  ->  A: 'level 1<br/>' -> F:null

ob_end_flush();
������B�������һ���Ļ�����A���رա�   A: 'level 1<br/>level 2<br/> ' -> F:null

ob_end_clean(); //�ڶ����޸�
������A����ղ��رա� ��ʱ������A�Ķ�����û������������յ�F�У����Ҳ����������Ҳ��û���κε�����ˡ�

*/
?>

 