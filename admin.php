<?php
define ('CATALOGDEEP', true);
include_once('init/core.php');
include_once('init/navigator.php');
##############################
if($act == 'error')
{
	$msg[] = 'Не тот Логин или Пароль';
}
if($_SESSION['a_login'] == $system['admin_login'] and $_SESSION['a_password'] == $system['admin_password'])
{
	switch($act)
	{
		default:
			$on_users = mysql_result(mysql_query("SELECT COUNT(*) FROM `cat_users` WHERE `status` = 'on' "),0);
			$ban_users = mysql_result(mysql_query("SELECT COUNT(*) FROM `cat_users` WHERE `status` = 'ban' "),0);
			$off_users = mysql_result(mysql_query("SELECT COUNT(*) FROM `cat_users` WHERE `status` = 'off' "),0);
			$cat_all = mysql_result(mysql_query("SELECT COUNT(*) FROM `cat_category`"),0);
			$last_update = mysql_result(mysql_query("SELECT `date_ipbase` FROM `cat_system`"),0);
			$result = array(
					'<a href="admin.php?act=users&mode=on">Активные пользователи</a> ['.$on_users.']',
					'<a href="admin.php?act=users&mode=ban">Заблокированные пользователи</a> ['.$ban_users.']',
					'<a href="admin.php?act=users&mode=off">Отключенные пользователи</a> ['.$off_users.']',
					'<a href="admin.php?act=category">Категории</a> ['.$cat_all.']',
					'<a href="admin.php?act=system">Настройка системы</a>',
					'<a href="http://lovap.ru/forum/index.php?id=942">Проверить обновление скрипта</a>',
					'Последнее обновление базы: <b>'.$last_update.'</b>',
					'<a href="admin.php?act=update_ip_base">Проверить обновление базы IP</a>'
					);
		
		break;
#############################################################Пользователи#######################################################################################	
		case 'users':
			if($_GET['mode'] == 'on') { $where = " WHERE `status` = 'on' "; $subtitle = 'Активные';}
			elseif($_GET['mode'] == 'off') { $where = " WHERE `status` = 'off' "; $subtitle = 'Отключенные ( На модерации )';}
			elseif($_GET['mode'] == 'ban') { $where = " WHERE `status` = 'ban' "; $subtitle = 'Заблокированные';}
			
$q=mysql_query("SELECT COUNT(*) FROM `cat_users` $where ");
$all=mysql_result($q,0,0);
$pnumber=5; 
$n=new Navigator($all,$pnumber,'act='.$act);

			$sql = mysql_query("SELECT * FROM `cat_users` $where LIMIT {$n->start()},$pnumber ");
			if(mysql_num_rows($sql) > 0)
			{	
				$i = 0;
				while($row = mysql_fetch_assoc($sql))
				{
					$q = mysql_query("SELECT sum(`in`) as s_in, sum(`out`) as s_out FROM `cat_stats` WHERE  `date` = '".$date."' AND `id_site` = '".$row['id']."' ");
					$row1 = mysql_fetch_assoc($q);
					if($row1['s_in'] == 0){ $row1['s_in'] = 0; }
					if($row1['s_out'] == 0){ $row1['s_out'] = 0;}
					$result[$i] = $row;
					$result[$i]['in'] = $row1['s_in'];
					$result[$i]['out'] = $row1['s_out'];
					$result[$i]['edit'] = '<a href="admin.php?act=user_edit&id='.$row['id'].'">Редактировать</a>';
					$result[$i]['stat'] = '<a href="stats.php?id='.$row['id'].'">Статистика</a>';
					$i++;
				}
			}
			else
			{
				$msg[] = 'Пользователей нет';
			}
			$tpl = '_users';
			$smarty->assign('navigator', $n->navi());
		break;
		
		case 'user_edit':
		if(empty($id))
		{
			$msg[] = 'Не указан ID пользоателя';
		}
			if(isset($_POST['send']) and !empty($id))
			{
				$in = intval(abs($_POST['in']));
				$out = intval(abs($_POST['out']));
				$url = mysql_real_escape_string($_POST['url']);
				$name = mysql_real_escape_string($_POST['url']);
				$email = mysql_real_escape_string($_POST['email']);
				$about = mysql_real_escape_string($_POST['about']);
				$status = mysql_real_escape_string($_POST['status']);
				$category = abs(intval($_POST['category']));
				$password = mysql_real_escape_string($_POST['password']);
				$sql = mysql_query("UPDATE `cat_users` SET `url` = '".$url."', 
									   `name` = '".$name."', 
									   `email` = '".$email."',
									   `about` = '".$about."',
									   `status` = '".$status."',
									   `category` = '".$category."',
									   `password` = '".$password."' WHERE `id` = '".$id."'");
				if($sql)
				{
					$msg[] = 'Пользователь отредактирован';
					$msg[] = '<a href="admin.php">В админ панель</a>';
				}
				
			
			
			
			}
			else
			{
				$status = array('on' => 'Активен', 'off' => 'Отключен', 'ban' => 'Забанен');
				$sql = mysql_query("SELECT * FROM `cat_users` WHERE `id` = '".$id."' ");
				$i = 0;
				$cat = mysql_query("SELECT * FROM `cat_category`");					
				while($row = mysql_fetch_assoc($sql))
				{
					$q = mysql_query("SELECT sum(`in`) as s_in, sum(`out`) as s_out FROM `cat_stats` WHERE  `date` = '".$date."' AND `id_site` = '".$id."' ");
					$row1 = mysql_fetch_assoc($q);
					if($row1['s_in'] == 0){ $row1['s_in'] = 0; }
					if($row1['s_out'] == 0){ $row1['s_out'] = 0;}
					$result[$i] = $row;
					
					while($row2 = mysql_fetch_assoc($cat))
					{
						if($row['category'] == $row2['id'])
						{ $result[$i]['set_cat'] .= '<option value="'.$row2['id'].'" selected="selected">'.$row2['name'].'</option>'; }
						else
						{ $result[$i]['set_cat'] .= '<option value="'.$row2['id'].'">'.$row2['name'].'</option>'; }
					}
					foreach($status as $st => $k)
					{
						if($row['status'] == $st)
						{
							$result[$i]['set_status'] .= '<option value="'.$st.'" selected="selected">'.$k.'</option>';
						}
						else
						{
							$result[$i]['set_status'] .= '<option value="'.$st.'" >'.$k.'</option>';
						}
					}
					$result[$i]['in'] = $row1['s_in'];
					$result[$i]['out'] = $row1['s_out'];
					$i++;
				}	
				
			}
			$tpl = '_users_edit';

		break;
#############################################################Настройка системы###############################################################################					
		case 'system':
			if(isset($_POST['send']))
			{
				$moderacia = intval(abs($_POST['moderacia']));
				$registration = intval(abs($_POST['registration']));
				$whitecat = intval(abs($_POST['whitecat']));
				
				$sql = mysql_query("UPDATE `cat_system` SET `moderacia` = '".$moderacia."', `registration` = '".$registration."', `whitecat` = '".$whitecat."' WHERE `id` = 1");
				if($sql)
				{
					$msg[] = 'Настройки каталога изменины';
					$msg[] = 'Модерация: '.s_k($moderacia);
					$msg[] = 'Регистрация в каталоге: '.s_k($registration);
					$msg[] = 'Белый каталог: '.s_k($whitecat);
				}
				else
				{
					$msg[] = 'Произошла ошибка!';
				}
			}
			else
			{
				$sql = mysql_query("SELECT * FROM `cat_system` WHERE `id` = 1");
				$i = 0;
				$select = array('Откл','Вкл');
				while($row = mysql_fetch_assoc($sql))
				{
					foreach($select as $st => $k)
					{
						if($row['moderacia'] == $st)
						{
							$result[$i]['mod'] .= '<option value="'.$st.'" selected="selected">'.$k.'</option>';
						}
						else
						{
							$result[$i]['mod'] .= '<option value="'.$st.'"">'.$k.'</option>';
						}
						
						
						
						if($row['registration'] == $st)
						{
							$result[$i]['reg'] .= '<option value="'.$st.'" selected="selected">'.$k.'</option>';
						}
						else
						{
							$result[$i]['reg'] .= '<option value="'.$st.'"">'.$k.'</option>';
						}
						
						if($row['whitecat'] == $st)
						{
							$result[$i]['wc'] .= '<option value="'.$st.'" selected="selected">'.$k.'</option>';
						}
						else
						{
							$result[$i]['wc'] .= '<option value="'.$st.'"">'.$k.'</option>';
						}
					}
					$i++;
				}
				
			}
			$tpl = '_system';
		break;
#############################################################Категори#######################################################################################		
		case 'category':
			$sql = mysql_query("SELECT * FROM `cat_category` ");
			$i = 0;
			while($row = mysql_fetch_assoc($sql))
			{
				$result[$i] = $row;
				$result[$i]['edit'] = '[<a href="admin.php?act=category_edit&id='.$row['id'].'">edit</a>]';
				$result[$i]['del'] = '[<a href="admin.php?act=category_del&id='.$row['id'].'">del</a>]';
				$i++;
			}
			
			
			$tpl = '_category';
		break;
		
		case 'category_edit':
		if(!empty($id))
		{
			if(!isset($_POST['send']))
			{
				$sql = mysql_query("SELECT * FROM `cat_category` WHERE `id` = '".$id."' ");
				if(mysql_num_rows($sql) > 0)
				{
					while($row = mysql_fetch_assoc($sql))
					{
						$result[] = $row;
					}
				}
				else
				{
					$msg[] = 'Категория не найдена';
				}
			}
			else
			{
				$position = abs(intval($_POST['position']));
				$name = mysql_real_escape_string(trim($_POST['name']));
				$about = mysql_real_escape_string(trim($_POST['about']));
				
				$sql = mysql_query("UPDATE `cat_category` SET `name` = '".$name."', `about` = '".$about."', `position` = '".$position."' WHERE `id` = '".$id."'  ");
				if($sql)
				{
					$msg[] = 'Категория отредактирована';
				}
				else
				{
					$msg[] = 'Ошибка';
				}
			}
		}
		else
		{
			$msg[] = 'Не указана категория';
		}
		
			$tpl = '_category_edit';
		break;
		
		case 'category_del':
			if(!empty($id))
			{
				$sql = mysql_query("DELETE  FROM `cat_category` WHERE `id` = '".$id."'");
				if($sql)
				{
					$msg[] = 'Категория удалена';
				}
				else
				{
					$msg[] = 'Ошибка';
				}
			}
			$tpl = '_category';
		break;
		
		case 'category_add':
			if(isset($_POST['send']))
			{
				$name = mysql_real_escape_string($_POST['name']);
				$about = mysql_real_escape_string($_POST['about']);
				$position = abs(intval($_POST['position']));
				$sql = mysql_query("INSERT INTO `cat_category` SET `name` = '".$name."', `about` = '".$about."', `position` = '".$position."' ");
				if($sql)
				{
					$msg[] = 'Категория добавлена';
				}
				else
				{
					$msg[] = 'Ошибка';
				}
			}
			
			$tpl = '_category_add';
		
		break;
		
		case 'news':
			
			$tpl = '_news';
		break;
		
		case 'editstats':
		
			$tpl = '_editstats';
		break;
		/////////////////////////////////////////////////////
		case 'update_ip_base':
/**
 * Получение ip базы логофона
 * автор: Nc_Soft
 * Перепилил: deep
 * 
 */
 function curlHeaderCallback($ch, $header) 
	{
    	$s = explode(': ', $header, 2);
		if ($s[0] == 'Last-Modified') $GLOBALS['last_mod'] = date("Y-m-d",strtotime(trim($s[1])));

		return strlen($header);
	}
	
	$last_update = mysql_result(mysql_query("SELECT `date_ipbase` FROM `cat_system` "),0);

	$GLOBALS['last_mod'] = '';
	$ch = curl_init('http://www.logofon.ru/xml/ips.xml');
	curl_setopt($ch, CURLOPT_USERAGENT, 'lovap.ru');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'curlHeaderCallback');
	$xml_data = curl_exec($ch);
	curl_close($ch);

	
	
	if($GLOBALS['last_mod'] != $last_update)
	{
		if($_GET['mode'] == 'ok')
		{
			$xml = simplexml_load_string($xml_data);
			mysql_query("DROP `ip_name`");
			mysql_query("DROP `ip`");
			foreach ($xml->operator as $opsos) 
			{
				$ids++;
				mysql_query("INSERT INTO `ip_name` SET `ids` = '".$ids."', `operator` = '".$opsos['name']."', `country` = '".$opsos['country']."', `coun` = '".$opsos['tld']."'");
				foreach ($opsos->range as $range) 
				{
					mysql_query("INSERT INTO `ip` SET `ids` = '".$ids."', `ip1` = '".$range['ip1']."', `ip2` = '".$range['ip2']."'");
					$ids_d++;
				}	
			}
			mysql_query("UPDATE `cat_system` SET `date_ipbase` = '".$GLOBALS['last_mod']."' ");
		
		$msg[] = 'База IP обновлена';
		$msg[] = 'Всего операторов: '.$ids;
		$msg[] = 'Всего диапазонов: '.$ids_d;
		
		}
		else
		{
			$msg[] = 'Доступна новая база';
			$msg[] = '<a href="admin.php?act=update_ip_base&mode=ok">! Обновить</a>';
		}
	}
	else
	{
		$msg[] = 'У вас последняя версия базы';
	}	
	
	$tpl = '_update_ip_base';
			
		break;
		
	}
}
else
{
	$tpl = '_login';
}

#########################################################
$smarty->assign('subtitle', $subtitle);
$smarty->assign('result', $result);
$smarty->assign('msg', $msg);
$smarty->display('admin/admin'.$tpl.'.tpl');










?>
