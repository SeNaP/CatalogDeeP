<?php
define ('CATALOGDEEP', true);
include_once('init/core.php');
include_once('init/navigator.php');
$smarty->template_dir = 'templates';
##############################
$q=mysql_query("SELECT count(*) FROM `cat_users`"); 
$all=mysql_result($q,0,0);
$pnumber=5; 
$n=new Navigator($all,$pnumber,'id='.$id); 


$category = mysql_query("SELECT `name`, `id` FROM `cat_category` WHERE `id` = '".$id."' ");
if(mysql_num_rows($category) > 0)
{
	$category = mysql_fetch_assoc($category);
	$sql = mysql_query("SELECT * FROM `cat_users` WHERE `category` = '".$id."' AND `status` = 'on' LIMIT {$n->start()},$pnumber ");

	if(mysql_num_rows($sql) > 0)
	{
		$i = 0;
		while($row = mysql_fetch_assoc($sql))
		{
			if($system['whitecat'] == 0) //Если мод белого каталога off
			{
				$q = mysql_query("SELECT sum(`in`) as s_in, sum(`out`) as s_out FROM `cat_stats` WHERE  `date` = '".$date."' AND `id_site` = '".$row['id']."' ");
				$row1 = mysql_fetch_assoc($q);
				if($row1['s_in'] > 0)
				{
				
					$result[$i] = $row;
					$result[$i]['name'] = htmlspecialchars($row['name']);
					$result[$i]['about'] = htmlspecialchars($row['about']); 
					$result[$i]['in'] = $row1['s_in'];
					$result[$i]['out'] = $row1['s_out'];
					$navi = $n->navi();
				
					
				}
			}
			else //Иначе белый каталог on
			{
				$q = mysql_query("SELECT sum(`in`) as s_in, sum(`out`) as s_out FROM `cat_stats` WHERE `date` = '".$date."' AND `id_site` = '".$row['id']."' ");
				$row1 = mysql_fetch_assoc($q);
				if($row1['s_in'] == 0)
				{
					$row1['s_in'] = 0;
				}
				if($row1['s_out'] == 0)
				{
					$row1['s_out'] = 0;
				} 
				$result[$i] = $row;
				$result[$i]['name'] = htmlspecialchars($row['name']);
				$result[$i]['about'] = htmlspecialchars($row['about']); 
				$result[$i]['in'] = $row1['s_in'];
				$result[$i]['out'] = $row1['s_out'];
				$navi = $n->navi();
			}
						
			$i++;
		}
		
	}
}
else
{
	$msg[] = 'Категория не найдена';
}

$smarty->assign('navigator', $navi);
$smarty->assign('msg', $msg);
$smarty->assign('category', $category['name']);
$smarty->assign('result', $result);
$smarty->display('cat.tpl');
			  

							  
?>
