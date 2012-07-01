<?php
define ('CATALOGDEEP', true);
include_once('init/core.php');
##############################
$msg = array();
$cat = array();
if($system['registration'] != 0)
{
	if($system['moderacia'] == 0)
	{
		$status = 'on';
	}
	else
	{
		$status = 'off';
	}

	if(isset($_POST['send']))
	{
		$email = (!empty($_POST['email'])) ? mysql_real_escape_string(trim($_POST['email'])) : '';
		$password = (!empty($_POST['password'])) ? mysql_real_escape_string(trim($_POST['password'])) : '';
		$url = (!empty($_POST['url'])) ? mysql_real_escape_string(trim($_POST['url'])) : '';
		$about = (!empty($_POST['about'])) ? mysql_real_escape_string(trim($_POST['about'])) : '';
		$name = (!empty($_POST['name'])) ? mysql_real_escape_string(trim($_POST['name'])) : '';
		$category = (!empty($_POST['category'])) ? intval($_POST['category']) : '';
	
		if(empty($email)) { $msg[] = 'Пустое поле E-mail';}
		elseif (@!preg_match("#^[a-z0-9\-\._]+\@([a-z0-9]+\.)+([a-z0-9]{2,4})$#ui",$email))
		{
			$msg[] = 'Ошибочный формат EMAIL-адреса !';
		}
		if(empty($password)) { $msg[] = 'Пустое поле Пароль';}
		if(empty($url)) { $msg[] = 'Пустое поле URL';}
		if(empty($about)) { $msg[] = 'Пустое поле Описание';}
		if(empty($name)) { $msg[] = 'Пустое поле Название сайта';}
		if(empty($category)) { $msg[] = 'Пустое поле Категория';}
		
			$req = mysql_query("SELECT * FROM `cat_users` WHERE `email` = '".$email."'");
		if (mysql_num_rows($req) !=0)
		{
			$msg[] = 'Этот E-Mail уже зарегистрирован.';
		}
		$req = mysql_query("SELECT * FROM `cat_users` WHERE `url` = '".$url."'");
		if (mysql_num_rows($req) !=0)
		{
			$msg[] = 'Этот Адрис сайта уже зарегистрирован.';
		}
		if(mb_strlen($about) > 50)
		{
			$msg[] = 'Слишком большое описание';
		}
		if(mb_strlen($name) > 12)
		{
			$msg[] = 'Слишком большое название';
		}
		
		if(empty($msg))
		{
			$sql = mysql_query("INSERT INTO `cat_users` SET `url` = '".$url."', 
															`name` = '".$name."',
															`about` = '".$about."',
															`category` = '".$category."',
															`password` = '".$password."',
															`email` = '".$email."',
															`status` = '".$status."' ");
			$msg = array('Ваш ID: ' => mysql_insert_id(),
						 'Пароль: ' => $password,
						 'URL: ' => $url,
					 	 'Название сайта: ' => $name,
						 'Описание: ' => $about,
						 'Категория: ' => is_cat($category));
			$tpl = '_end';
		}
	
	}


	$sql = mysql_query("SELECT * FROM `cat_category`");
	while($row = mysql_fetch_assoc($sql))
	{
		$cat[] = $row;
	}

	$smarty->assign('category', $cat);

}
else
{
	$msg[] = 'Извените, но в данный момент регистрация запрещена';
	$tpl = '_close';
}
$smarty->assign('msg', $msg);
$smarty->display('registration'.$tpl.'.tpl');
?>
