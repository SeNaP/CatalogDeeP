<?php
defined('CATALOGDEEP') or die('Хакер чтоле?');
############################################

############################################
function smiles($smile)
{
	//Добовляем смайлы
	$str = strtr($smile,array( ':)' => '<img src="/templates/smiles/1.gif">',
					':(' => '<img src="templates/smiles/3.gif">',
					':D' => '<img src="templates/smiles/2.gif">',
					'0_0' => '<img src="templates/smiles/13.gif">',
					':p' => '<img src="templates/smiles/14.gif">',
					'<_<' => '<img src="templates/smiles/16.gif">' ));

return $str;
}

function is_cat($cat)
{	
	$cat = intval(abs($cat));
	$res = mysql_result(mysql_query("SELECT `name` FROM `cat_category` WHERE `id` = '".$cat."'"),0);
return $res;
}
 
 
function s_k($var)
{
	if($var == 0)
	{
		$result = 'Выкл';
	}
	else
	{
		$result = 'Вкл';
	}
return $result;
}


  

?>
