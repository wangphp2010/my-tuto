<?php
 header("content-type:text/html;charset=utf-8");


$d = $_POST['d'];
$villea = $_POST['villea'];
$villeaa = $_POST['villea'];
$villeb = $_POST['villeb'];
$villebb = $_POST['villeb'];
  require ('imoconn.php');
  $villea=str_replace("(code postal : ","",$villea);
$villea=str_replace(")","",$villea);
  
  
  
$villea = trim($villea);
$arr_villea = explode("\n", $villea);
$villeb = trim($villeb);
$arr_villeb = explode("\n", $villeb);
$numa = count($arr_villea);
echo "我们没有的城市<br>";
$arr_villebb = $arr_villeb;


 







function sx($val)
{   $val = strtolower($val);
    $val = str_replace("-","",$val);
    $val = str_replace("_","",$val);
    $val = str_replace(" ","",$val);
$val =strtr($val,"ÄÂÀÁÅÃÉÈËÊÒÓÔÕÖÌÍÎÏÙÚÛÜçÿ","äâàáåãéèëêòóôõöìíîïùúûücy");

$val = str_replace("ä","a",$val);
$val = str_replace("â","a",$val);
$val = str_replace("à","a",$val);
$val = str_replace("á","a",$val);
$val = str_replace("å","a",$val);
$val = str_replace("ã","a",$val);

$val = str_replace("é","e",$val);
$val = str_replace("è","e",$val);
$val = str_replace("ë","e",$val);
$val = str_replace("ê","e",$val);

$val = str_replace("ò","o",$val);
$val = str_replace("ó","o",$val);
$val = str_replace("ô","o",$val);
$val = str_replace("õ","o",$val);
$val = str_replace("ö","o",$val);

$val = str_replace("ì","i",$val);
$val = str_replace("í","i",$val);
$val = str_replace("î","i",$val);
$val = str_replace("ï","i",$val);

$val = str_replace("ù","u",$val);
$val = str_replace("ú","u",$val);
$val = str_replace("û","u",$val);
$val = str_replace("ü","u",$val);
	return $val;
	}




foreach ($arr_villebb as & $val) {
    $val = sx($val);

}


if($d&&$villea&&$villeb){
for ($i = 0; $i < $numa; $i++) {
    if (!in_array(sx($arr_villea[$i]) , $arr_villebb)) {
        $nom = trim(preg_replace('#\d#', '', $arr_villea[$i]));
		  $cp = trim(preg_replace('#\D#', '', $arr_villea[$i]));
         //确认数据库中有没有相同的ville
        $chk_ville = "SELECT * FROM db415861577.ville WHERE cp like '$cp' ";
	  $chk_ville_result = mysql_query($chk_ville);
        if (!$chk_ville_result) exit('fail&nbsp;ville' . mysql_error());
        $chk_ville_return = 'none';
        while ($chk_ville_array = mysql_fetch_array($chk_ville_result)) {
            if (strtolower(str_replace('-', '', str_replace(' ', '', $chk_ville_array['nom']))) == strtolower(str_replace('-', '', str_replace(' ', '', $ville)))) $chk_ville_return = 'oui';
        }
		
		 
        if ($nom && $cp && $chk_ville_return == 'none') {
             $insert_sql = "INSERT INTO db415861577.ville (nom,cp )VALUES('$nom','$cp' )";
            if (mysql_query($insert_sql)) {
                echo $nom, ' ', $cp, ' ok', '<br >';
            } else echo '<br><font  color="red">', $nom, ' ', $cp, ' non ', mysql_error() , '</font><br >';
            if (substr($cp, 0, 3) != $d) echo '<br><font  color="red"> <strong>*', $nom, ' ', $cp, '*</strong></font><br>';
        }
		
    }
}
}
?>

<form name="form1"  id="form1"   method="post" action="" onSubmit="return InputCheck(this)">
villea
<textarea style=" width:300px; height:300px; border:1px #000 solid" name="villea"  ><?=$villeaa?></textarea>
 villeb
<textarea style= "width:300px; height:300px; border:1px #000 solid" name="villeb"  ><?=$villebb?>
</textarea> 
d
<input name="d" style=" border:1px #000 solid;" value="<?=$d?>"/><br />
<br />
<br />
<br />

<input  id="submit" name="submit"  style=" border:1px #000 solid;" value="Publier cette annonce" type="submit"  />

</form>