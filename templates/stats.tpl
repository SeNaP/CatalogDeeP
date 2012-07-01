{include file='head.tpl'}
{if isset($admin_page)}
<div class="niz_a">&#187; {$admin_page}</div>
{/if}
<div class='title'>Статистика | <b>{$site}</b></div>
{if !empty($msg)}
	<div class="rmenu"><p><b>ОШИБКА!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
	{/foreach}
	<p></p></div>
{/if}

<ui>
{foreach from=$result key=k item=i}

<li>{$k}{$i|default:0}</li>
 
 
{/foreach}
</ui>


{include file='foot.tpl'}
