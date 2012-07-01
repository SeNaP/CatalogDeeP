{include file='head.tpl'}

<div class="title"><a href="admin.php">Админ панель</a> | Редактирование пользоателя</div>
{if !empty($msg)}
	<div class="rmenu"><p><b>Внимание!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
	{/foreach}
	<p></p></div>
{/if}
{foreach from=$result item=i}

<form action="/admin.php?act=user_edit&id={$smarty.get.id}" method="POST">
Пароль:<br/>
<input type="text" name="password" value="{$i.password}"><br/>
Email:<br/>
<input type="text" name="email" value="{$i.email}"><br/>
URL:<br/>
<input type="text" name="url" value="{$i.url}"><br/>
Описание:<br/>
<input type="text" name="about" value="{$i.about}"><br/>
Категория:<br/>
<select name="category">

{$i.set_cat}
	
</select><br/>
Статуc:<br/>
<select name="status">

{$i.set_status}

</select><br/>
<input type="submit" name="send" value="Изменить"><br/>

{/foreach} 

{include file='foot.tpl'}
