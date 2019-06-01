<style type="text/css">
.STYLE1{ font-size:15px; font-family:"Times New Roman", Times, serif;}
.ul1{display:block;  height:20px;line-height:20px; border: #CCCCCC 1px solid; position:relative; float:left; text-align:center; margin:0; text-align:center;padding:0}
.ul1 .ulshow{ display:none}
.ul1 .ulshow li{border-bottom:#CCCCCC 1px solid; display: block; width:200px; background-color:#FFFFFF;}
.ul1:hover .ulshow{display:block; position:absolute;display:block;position:absolute; top:20px; left:-10px; width:100px;}	


.ul2{display:block;  height:20px;line-height:20px;border: #CCCCCC 1px solid; position:relative;float:left;text-align:center;margin:0;text-align:center; padding:0}
.ul2 .ulshow{ display:none}
.ul2 .ulshow li{border:#CCCCCC 1px solid; display: block; width:150px;background-color:#FFFFFF;}
.ul2:hover .ulshow{display:block; position:absolute;display:block;position:absolute; top:20px; left:-10px; width:100px;}	


.ul3{display:block;  height:20px;line-height:20px;border: #CCCCCC 1px solid; position:relative;float:left;text-align:center;margin:0; text-align:center;padding:0}
.ul3 .ulshow{ display:none}
.ul3 .ulshow li{border:#CCCCCC 1px solid; display: block; width:150px;background-color:#FFFFFF;}
.ul3:hover .ulshow{display:block; position:absolute;display:block;position:absolute; top:20px; left:-10px; width:100px;}	
</style> 
<div  class="STYLE1"><b>

<ul class="ul1">
<a  class="a3s" href="http://monpub.com">Accueil</a>-&gt;

      <ul class="ulshow">
	   <li><a href="http://monpub.com/recherche-fonds-de-commerce.html" class="a3">Fonds de commerce</a></li>
	   <li><a href="http://monpub.com/recherche-voiture.html" class="a3">Véhicule</a></li>
	   <li><a href="http://monpub.com/recherche-immobilier.html" class="a3">Immobilier</a></li>
	   <li><a href="http://monpub.com/recherche-rencontre.html" class="a3">Rencontre</a></li>
	   </ul>
	   

</ul>


<ul class="ul2">
<a  class="a3s" href="http://monpub.com/rechercheregion.php?p=1&region=<?=$gb_array['region']?>">Provence-Alpes-Côte-d'Azur</a>-&gt;
    
	 <ul class="ulshow">
	   <li><a href="http://monpub.com/rechercheregion.php?p=1&region=<?=$gb_array['region']?>" class="a3">Fonds de commerce</a></li>
	   <li><a href="http://monpub.com/rechercheregion.php?p=1&region=<?=$gb_array['region']?>" class="a3">Véhicule</a></li>
	   <li><a href="http://monpub.com/rechercheregion.php?p=1&region=<?=$gb_array['region']?>" class="a3">Immobilier</a></li>
	   <li><a href="http://monpub.com/rechercheregion.php?p=1&region=<?=$gb_array['region']?>" class="a3">Rencontre</a></li>
	   </ul>

</ul>

<ul class="ul3">
<a class="a3s"  href="http://monpub.com/rechercheregion.php?p=1&region=<?=$gb_array['region']?>&categorie=<?=$gb_array['categorie']?>">Bureau&Local-commercial </a>-&gt; 

</ul>
<ul  style="float: left">
<?=strtoupper(strtr($gb_array['titre'],"äâàáåãéèëêòóôõöøìíîïùúûüýñçþÿæœðø€²’","ÄÂÀÁÅÃÉÈËÊÒÓÔÕÖØÌÍÎÏÙÚÛÜÝÑÇÞÝÆŒÐØ€²’"))?>
</ul>

</b>
</div>




<br /><br />
