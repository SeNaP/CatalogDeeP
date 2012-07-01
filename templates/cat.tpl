{include file='head.tpl'}
{if isset($admin_page)}
<div class="niz_a">&#187; {$admin_page}</div>
{/if}

{if !empty($msg)}
	<div class="rmenu"><p><b>Ошибка!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
	{/foreach}
	<p></p></div>
{else}

<div class='title'>Категория | {$category}</div>
{foreach from=$result item=i}
<div class="menu">
<img src='/templates/images/go.gif' alt='' /><a href="out.php?id={$i.id}">{$i.name}</a> [{$i.in} /{$i.out} ] | <a href="stats.php?id={$i.id}">инф.</a><br/>
&#187;<span class='menu_s'>{$i.about}</span>
</div>
{foreachelse}
<b>Активных сайтов нет.</b>
{/foreach}
{$navigator}
{/if}
{include file='foot.tpl'}
