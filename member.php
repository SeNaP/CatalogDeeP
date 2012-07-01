<?php
define ('CATALOGDEEP', true);
include_once('init/core.php');
$smarty->template_dir = 'templates';
##############################
$msg = array();

if($act == 'error')
{
	$msg[] = 'Ошибка авторизации';
}

if(isset($_SESSION['u_id']) and isset($_SESSION['password']))
{	
	$sql = mysql_query("SELECT * FROM `cat_users` WHERE `id` = '".$_SESSION['u_id']."' AND `password` = '".$_SESSION['password']."'");
	if(mysql_num_rows($sql) > 0)
	{
		switch($act)
		{
			default:
			
				$i = 0;
				while($row = mysql_fetch_assoc($sql))
				{	
					$sy_day = mysql_fetch_assoc(mysql_query("SELECT sum(`out`) as sum_out,sum(`in`) as sum_in FROM `cat_stats` WHERE `id_site` = '".$row['id']."' AND 
																	 `date` = '".date('Y-m-d',strtotime('-1 day'))."'"));
			
					$sy_day['sum_out'] = (!empty($sy_day['sum_out'])) ? $sy_day['sum_out'] : 0;
					$sy_day['sum_in'] = (!empty($sy_day['sum_in'])) ? $sy_day['sum_in'] : 0;
					$this_day = mysql_fetch_assoc(mysql_query("SELECT sum(`out`) as sum_out,sum(`in`) as sum_in FROM `cat_stats` WHERE `id_site` = '".$row['id']."' AND 
																	   `date` = '".$date."'"));
					$user[$i] = $row;
					$user[$i]['sy_out'] = $sy_day['sum_out'];
					$user[$i]['sy_in'] = $sy_day['sum_in'];
					$user[$i]['this_out'] = (!empty($this_day['sum_out'])) ? $this_day['sum_out'] : 0;
					$user[$i]['this_in'] = (!empty($this_day['sum_in'])) ? $this_day['sum_in'] : 0;
					$i++;
				}
			
			break;
			
			case 'edit':
				if(!isset($_POST['send']))
				{	
					$category = array();
					while($row = mysql_fetch_assoc($sql))
					{
						$user[] = $row;
					}
					$cat = mysql_query("SELECT * FROM `cat_category`");
					while($row = mysql_fetch_assoc($cat))
					{
						$category_s[] = $row;
					}
				}
				else
				{
					$email = (!empty($_POST['email'])) ? mysql_real_escape_string($_POST['email']) : '';
					$password = (!empty($_POST['password'])) ? mysql_real_escape_string($_POST['password']) : '';
					$url = (!empty($_POST['url'])) ? mysql_real_escape_string($_POST['url']) : '';
					$about = (!empty($_POST['about'])) ? mysql_real_escape_string($_POST['about']) : '';
					$category = (!empty($_POST['category'])) ? mysql_real_escape_string($_POST['category']) : '';
					
					if(empty($email)) { $msg[] = 'Пустое поле E_mail';}
					if(empty($password)) { $msg[] = 'Пустое поле Пароль';}
					if(empty($url)) { $msg[] = 'Пустое поле URL';}
					if(empty($about)) { $msg[] = 'Пустое поле Описание';}
					if(empty($category)) { $msg[] = 'Пустое поле Категория';}
					
					if(empty($msg))
					{
						$sql = mysql_query("UPDATE `cat_users` SET `email` = '".$email."', 
											     `password` = '".$password."', 
											     `url` = '".$url."',
											     `about` = '".$about."',
											     `category` = '".$category."' WHERE `id` = 1 ");
						if($sql){$msg[] = 'Данные изменены';} else { $msg[] = 'Ошибка при изменении данных';}
					}						     			
					
				}
				$tpl = '_edit';
			break;
		}
	}
}
else
{
	$tpl = '_login';
}

$smarty->assign('cat', $category_s);
$smarty->assign('user', $user);
$smarty->assign('msg', $msg);
$smarty->display('member'.$tpl.'.tpl');


?>
