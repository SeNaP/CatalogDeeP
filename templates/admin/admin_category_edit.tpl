{include file='head.tpl'}
<div class="title"><a href="admin.php">Админ панель</a> | Редактировать категорию</div>
{if !empty($msg)}
	<div class="rmenu"><p><b>Внимение!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
		 <div><a href="admin.php?act=category">К категориям</a></div>
	{/foreach}
	<p></p></div>
{else}

{foreach from=$result item=i}
<form action="admin.php?act=category_edit&id={$i.id}" method="POST">
Название:<br/>
<input type="text" name="name" value="{$i.name}"><br/>
Описание:<br/>
<input type="text" name="about" value="{$i.about}"><br/>
Позиция:<br/>
<input type="text" name="position" value="{$i.position}"><br/>
<input type="submit" name="send" value="Изменить">


{/foreach}
{/if}
{include file='foot.tpl'}
