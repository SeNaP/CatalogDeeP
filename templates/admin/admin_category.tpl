{include file='head.tpl'}
<div class="title"><a href="admin.php">Админ панель</a> | Категории</div>
{if !empty($msg)}
	<div class="rmenu"><p><b>Внимение!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
	{/foreach}
	<p></p></div>
{/if}
&#187;	<a href="admin.php?act=category_add"><b>Добавить категорию</b></a><br/><br/>
{foreach from=$result item=i}
<div class="blog">
&#187; <b>{$i.name}</b><br/>
Описание: {$i.about}<br/>
{$i.edit} | {$i.del}
</div>
{/foreach}
{include file='foot.tpl'}
