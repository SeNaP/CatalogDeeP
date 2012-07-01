{include file='head.tpl'}


<div class="title">Авторизация</div>
{if !empty($msg)}
	<div class="rmenu"><p><b>ОШИБКА!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
	{/foreach}
	<p></p></div>
{/if}

<form action="/input.php?act=aenter" method="POST">
Логин:<br/>
<input type="text" name="a_login"><br/>
Пароль:<br/>
<input type="text" name="a_password"><br/>
<input type="submit" name="send" value="Войти"><br/>

{include file='foot.tpl'}
