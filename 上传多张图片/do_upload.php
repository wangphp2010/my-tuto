<?php 
  //ȫ������$_FILES
  //$_FILES['userfile']['tmp_name']�ļ���web����������ʱ�洢��λ��
  //$_FILES['userfile']['name']�û�ϵͳ�е��ļ�����
  //$_FILES['userfile']['size']�ļ����ֽڴ�С
  //$_FILES['userfile']['type']�ļ���MIME���ͣ�text/plain,image/gif
  //$_FILES['userfile']['error']���ļ�������صĴ������
?>
<?php
  for ($i=0;$i<count($_FILES['userfile']['tmp_name']);$i++)
  {
   $upfile=$new_folder."/".$_FILES['userfile']['name'][$i];//�˴�·���������
  if(move_uploaded_file($_FILES['userfile']['tmp_name'][$i],$upfile)){
    echo "��".($i+1)."��ͼƬ�ϴ��ɹ�<br>";    
  }
    else{
     echo "��".($i+1)."��ͼƬ�ϴ�����<br>";     
    }
  }
?>
