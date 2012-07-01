<?php
define ('CATALOGDEEP', true);
include_once('init/core.php');
$smarty->template_dir = 'templates';
##############################

$sql = mysql_query("SELECT * FROM `cat_category` ORDER BY `position`");
if(mysql_num_rows($sql) > 0)
{
	$i = 0;
	while($row = mysql_fetch_assoc($sql))
	{
		$result[$i] = $row;
		$result[$i]['name'] = htmlspecialchars($row['name']);
		$result[$i]['about'] = htmlspecialchars($row['about']);
		
		if($system['whitecat'] == 0)
		{
			$user_act = mysql_result(mysql_query("SELECT count(*) from (SELECT DISTINCT `id_site` FROM `cat_stats` WHERE `category` = '".$row['id']."' AND `date` = '".$date."' AND `in` > 0)x"),0);
			$user_all = mysql_result(mysql_query("SELECT COUNT(`category`) FROM `cat_users` WHERE `category` = '".$row['id']."' AND `status` != 'ban'"),0);
		}
		else
		{
			$user_act = mysql_result(mysql_query("SELECT count(*) FROM `cat_users` WHERE `category` = '".$row['id']."' AND `status` = 'on' "),0);
			$user_all = mysql_result(mysql_query("SELECT count(`category`) FROM `cat_users` WHERE `category` = '".$row['id']."' AND `status` != 'ban' "),0);
		}
		
		$result[$i]['user_act'] = $user_act;
		$result[$i]['user_all'] = $user_all;
		
		$i++;
	}
}


$smarty->assign('result', $result);
$smarty->display('index.tpl');

/*
echo $count_sql."<br/>";
echo round(microtime(true) - $time_start, 5)."<br/>";
echo $sql_time_result;*/
?>
