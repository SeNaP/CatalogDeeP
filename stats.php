<?php
define ('CATALOGDEEP', true);
include_once('init/core.php');
$smarty->template_dir = 'templates';
##############################

if(!empty($id))
{
	$site = mysql_query("SELECT `url` FROM `cat_users` WHERE `id` = '".$id."' ");
	if(mysql_num_rows($site) > 0)
	{
		$site = mysql_result($site,0);
		$sql = mysql_query("SELECT * FROM `cat_stats` WHERE `id_site` = '".$id."'");
		$smarty->assign('site', $site);
		if(mysql_num_rows($sql) > 0)
		{
		
			while($row = mysql_fetch_assoc($sql))
			{
				$result[] = $row;
			}
		}
		else
		{
			$msg[] = 'Статистика не найдена!';
		}
	}
	else
	{
		$msg[] = 'Такой сайта нет!';
	}
	
	$tpl = '_sites';
}
else
{
	$result['Всего пользователей: '] = mysql_result(mysql_query("SELECT count(`id`) FROM `cat_users` "),0);
	$result['Заблокированных пользователей: '] = mysql_result(mysql_query("SELECT count(`id`) FROM `cat_users` WHERE `status` = 'ban' "),0);
	$result['Участвуют в каталоге: '] = mysql_result(mysql_query("SELECT count(`id`) FROM `cat_users` WHERE `status` = 'on' "),0);
	$result['Активные пользователи: '] = mysql_result(mysql_query("SELECT count(*) from (SELECT DISTINCT `id_site` FROM `cat_stats` WHERE  `date` = '".$date."' AND `in` > 0)x"),0);
	$result['На модерации: '] = mysql_result(mysql_query("SELECT count(`id`) FROM `cat_users` WHERE `status` = 'mod' "),0);
	$result['Сегодня всего В: '] = mysql_result(mysql_query("SELECT sum(`in`) FROM `cat_stats` WHERE `date` = '".$date."' "),0);
	$result['Сегодня всего Из: '] = mysql_result(mysql_query("SELECT sum(`out`) FROM `cat_stats` WHERE `date` = '".$date."' "),0);
	$result['Всего В: '] = mysql_result(mysql_query("SELECT sum(`in`) FROM `cat_stats` "),0);
	$result['Всего Из: '] = mysql_result(mysql_query("SELECT sum(`out`) FROM `cat_stats` "),0);
	$result['Вчера всего В: '] = mysql_result(mysql_query("SELECT sum(`in`) FROM `cat_stats` WHERE `date` = '".$ydate."' "),0);
	$result['Вчера всего Из: '] = mysql_result(mysql_query("SELECT sum(`out`) FROM `cat_stats` WHERE `date` = '".$ydate."' "),0);
	
	$site = 'Каталога';
}
	
$smarty->assign('site', $site);
$smarty->assign('msg', $msg);
$smarty->assign('result', $result);
$smarty->display('stats'.$tpl.'.tpl');


?>
