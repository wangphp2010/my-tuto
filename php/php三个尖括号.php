
<?php
function checkbox(string $name , string $value   ) : string 
{
	//<<<后面接的大写字母 只是告诉我们用的html格式的
	return <<<HTML
	<input type="checkbox" name="{$name}[]" value="{$value}">
	HTML;
}

$parfums = [
"fraise"=> 3,
"vanille" => 4,
"banane" =>5
];



?>


<?php foreach( $parfums as $parfum => $prix ): ?>
	<div>
		<label>
			<?=checkbox('parfum' , $parfum )?>
			<?=$parfum .' - '. $prix?>
		</label>
	</div>
<?php endforeach ; ?>
