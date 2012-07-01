{include file='head.tpl'}


<div class="title"><a href="admin.php">Админ панель</a> | Настройка системы</div>
{if !empty($msg)}
	<div class="rmenu"><p><b>Внимание!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
	{/foreach}
	<p></p></div>
{/if}

{foreach from=$result item=i}
<form action="admin.php?act=system" method="POST">
Модерация: <br/>
<select name="moderacia">
	{$i.mod}
</select><br/>
Регистрация: <br/>
<select name="registration">
	{$i.reg}
</select><br/>
Белый каталог: <br/>
<select name="whitecat">
	{$i.wc}
</select><br/>
<input type="submit" name="send" value="Изменить">
{/foreach}

{include file='foot.tpl'}
