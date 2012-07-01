{include file='head.tpl'}
<div class="title"><a href="admin.php">Админ панель</a> | Добавить категорию</div>
{if !empty($msg)}
	<div class="rmenu"><p><b>Внимение!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
		 <div><a href="admin.php?act=category">К категориям</a></div>
	{/foreach}
	<p></p></div>
{else}

<form action="admin.php?act=category_add" method="POST">
Название:<br/>
<input type="text" name="name"><br/>
Описание:<br/>
<input type="text" name="about"><br/>
Позиция:<br/>
<input type="text" name="position"><br/>
<input type="submit" name="send" value="Добавить">

{/if}
{include file='foot.tpl'}
