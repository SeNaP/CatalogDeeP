<?php 
define ('CATALOGDEEP', true);
include_once('init/core.php');
#############################

switch($act)
{
	default:
		header('Location: /index.php');
		exit;
	break;
	
	case 'enter':
		if(isset($_POST['id']) and isset($_POST['password']))
		{
			$u_id = abs(intval($_POST['id']));
			$password = mysql_real_escape_string($_POST['password']);
			$sql = mysql_query("SELECT * FROM `cat_users` WHERE `id` = '".$u_id."' AND `password` = '".$password."' ");
			if(mysql_num_rows($sql) > 0)
			{
				$_SESSION['u_id'] = $u_id;
				$_SESSION['password'] = $password;
				header('Location: member.php');
				exit;
			}
			else
			{
				unset($_SESSION['u_id']);
				unset($_SESSION['password']);
				header('Location: member.php?act=error');
				exit;
			}
		}
		else
		{
			header('Location: member.php?act=error');
			exit;
		}
		
	break;
	
	case 'aenter':
		if(isset($_POST['a_login']) and isset($_POST['a_password']))
		{
			$a_login = mysql_real_escape_string($_POST['a_login']);
			$a_password = mysql_real_escape_string($_POST['a_password']);
			$sql = mysql_query("SELECT * FROM `cat_system` WHERE `admin_login` = '".$a_login."' AND `admin_password` = '".$a_password."' ");
			if(mysql_num_rows($sql) > 0)
			{
				$_SESSION['a_login'] = $a_login;
				$_SESSION['a_password'] = $a_password;
				header('Location: admin.php');
				exit;
			}
			else
			{
				unset($_SESSION['a_login']);
				unset($_SESSION['a_password']);
				header('Location: admin.php?act=error');
				exit;
			}
		}
		header('Location: admin.php?act=error');
		exit;
	break;	
	
	case 'exit':
		if(isset($_SESSION['a_login']) or isset($_SESSION['a_password']))
		{
			unset($_SESSION['a_login']);
			unset($_SESSION['a_password']);
		}
		unset($_SESSION['u_id']);
		unset($_SESSION['password']);
		setcookie('data','');
		header('Location: index.php');
	break;
}




?>
