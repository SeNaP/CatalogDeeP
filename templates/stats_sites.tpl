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
{else}
<table border="0"><tr bgcolor="" bordercolor=""><td><b>Страна</b></td><td><b>Оператор</b></td><td><b>Пришло</b></td><td><b>Ушло</b></td></tr>
{/if}
{foreach from=$result item=i}


 <tr class="td1"><td bgcolor="">{$i.country}</td><td bgcolor="">{$i.operator}</td><td> {$i.in}</td><td>{$i.out}</td></tr></td></tr>
 
{/foreach}






</table>




{include file='foot.tpl'}
