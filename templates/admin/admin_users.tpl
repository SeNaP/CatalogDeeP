{include file='head.tpl'}

<div class="title"><a href="admin.php">Админ панель</a> | Пользователи {$subtitle}</div>
{if !empty($msg)}
	<div class="rmenu"><p><b>ОШИБКА!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
	{/foreach}
	<p></p></div>
{/if}

{foreach from=$result item=i}
	<div class="blog">
	<b>ID:</b> {$i.id}<br/>
	<b>URL:</b> <a href="{$i.url}">{$i.url}</a> | <b>Название:</b> {$i.name} <br/>
	<b>Описание:</b> {$i.about}<br/>
	<b>Сегодня переходов:</b><br/>
	В: {$i.in} | Из: {$i.out}<br/>
	[{$i.edit}] | [{$i.stat}]
	</div>
{/foreach}

{$navigator}

{include file='foot.tpl'}
