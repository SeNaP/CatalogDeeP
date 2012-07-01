<?php
defined('CATALOGDEEP') or die('Хакер чтоле?');
define('CAT_VERSION','3.0');
$time_start = microtime(true); 
##################БД###############
include 'db.config.php';

mysql_connect($db['host'], $db['user'], $db['password']) or die( "Ошибка при подключении к БД" );
mysql_select_db($db['name']) or die( "Ошибка при выборе БД" );
mysql_unbuffered_query("SET NAMES 'utf8';");
###################################
$date = date('Y-m-d');
$ydate = date('Y-m-d',strtotime('-1 day'));
session_start();
//ob_start("ob_gzhandler", 9); //Сжимаем страницу

##############
if(isset($_SESSION['u_id']) and isset($_SESSION['password'])){
	$u_id = mysql_real_escape_string($_SESSION['u_id']);
	$password = mysql_real_escape_string($_SESSION['password']);
	}
elseif(isset($_COOKIE['data'])){
	$cook = explode(':',$_COOKIE['data']);
	$u_id = mysql_real_escape_string($cook[0]);
	$password = mysql_real_escape_string($cook[1]);
}

//Запрашиваем данные пользователя
if(isset($u_id) and isset($password))
{
	$sql = mysql_result(mysql_query("SELECT COUNT(*) FROM `cat_users` WHERE `id` = '".$u_id."' AND `password` = '".$password."'"),0);
	if($sql == 0){
		if(isset($_COOKIE['data'])){
		setcookie('data','');
		}
		unset($_SESSION['u_id']);
		unset($_SESSION['password']);
		header("Location: member.php?act=error");
		exit;
	}
	else
	{
		$_SESSION['u_id'] = $u_id;
		$_SESSION['password'] = $password;
	}
		
}
//Получаем настройки каталога
$sql = mysql_query("SELECT * FROM `cat_system`");
$system = mysql_fetch_assoc($sql); 
###############
if($_SESSION['a_password'] == $system['admin_password'])
{
	$admin_page = '<a href="admin.php"><font color="red">Админ меню</font></a>';
}
$id = abs(intval($_GET['id']));
$act = $_GET['act'];
##############
include_once("func.php");
include_once("Smarty/Smarty.class.php");
##############
$smarty = new Smarty();     
$smarty->compile_dir  = 'templates/complate';  
$smarty->assign('admin_page', $admin_page);



?>
