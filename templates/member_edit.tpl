{include file='head.tpl'}


<div class="title"><a href="/member.php">Личная панель</a> | редактор данных</div>
{section name=i loop=$msg}

 ! <b>{$msg[i]}</b><br/>
 
{/section}

{foreach from=$user item=i}

<form action="/member.php?act=edit" method="POST">
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

	{section name=j loop=$cat}
	{if $cat[j].id == $i.category}
	
	<option value="{$cat[j].id}" selected="selected">{$cat[j].name}</option>
	
	{else}
    	
    	<option value="{$cat[j].id}" >{$cat[j].name}</option>
    	
    	{/if}
	{/section}
	
</select>

<input type="submit" name="send" value="Изменить"><br/>

{/foreach} 

{include file='foot.tpl'}
