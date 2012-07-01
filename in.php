<?php
define ('CATALOGDEEP', true);
include_once('init/core.php');
##############################
$user = mysql_fetch_assoc(mysql_query("SELECT `url`,`category` FROM `cat_users` WHERE `id` = '".$id."' LIMIT 1"));
$ip = '95.109.194.248';//getenv('REMOTE_ADDR');
$sql = mysql_query("SELECT `ids` FROM `cat_ip` WHERE INET_ATON('".$ip."') BETWEEN `ip1` AND `ip2` ");
if(mysql_num_rows($sql) > 0)
{
	$ids = mysql_result($sql,0);
	$row = mysql_fetch_assoc(mysql_query("SELECT * FROM `cat_ip_name` WHERE `ids` = '".$ids."' "));
	$sql = mysql_query("SELECT * FROM `cat_stats` WHERE `operator` = '".$row['operator']."' AND 
							    `country` = '".$row['country']."' AND 
							    `date` = '".$date."'  AND `id_site` = '".$id."' ");
	if(mysql_num_rows($sql) > 0)
	{
		$sql1 = mysql_query("SELECT * FROM `cat_stats` WHERE `operator` = '".$row['operator']."' AND `date` = '".$date."' AND `ip` LIKE '%".$ip."%' AND `id_site` = '".$id."' ");
		if(mysql_num_rows($sql1) < 1)
		{    
			$s_upd = mysql_query("UPDATE `cat_stats` SET `in` = (`in`+1), `ip` = concat_ws('|',`ip`,'".$ip."') WHERE `id_site` = '".$id."' ");
		}
		
	}
	else
	{
		$s_ins = mysql_query("INSERT INTO `cat_stats` SET `id_site` = '".$id."', 
								  `category` = '".$user['category']."',
								  `date` = '".$date."', 
								  `in` = (`in`+1), 
								  `operator` = '".$row['operator']."', 
								  `country` = '".$row['country']."',
								  `co` = '".$row['coun']."',
								  `ip` = '".$ip."' ");	
	}
	mysql_query("UPDATE `cat_users` SET `status` = 'on' WHERE `id` = '".$id."' ");
}

header('Location: http://'.$_SERVER['SERVER_NAME']);
exit;

?>
