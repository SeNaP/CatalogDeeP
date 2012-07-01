{include file='head.tpl'}
<div class="title">Регистрация в катлоге</div>

Регистрация в каталоге завершена!<br/>
<b>Ваши данные:</b><br/>
<ui>
{foreach from=$msg key=i item=message}

	<li>{$i}{$message}</li>

{/foreach}
</ui>
<br/>
<a href="member.php"><b>В личную панель</b></a>

{include file='foot.tpl'}
