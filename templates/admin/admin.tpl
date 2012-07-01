{include file='head.tpl'}

<div class="title">Админ панель</div>
{foreach from=$result item=res}
	&#187; {$res}<br/>
{/foreach}
<div class="blog">
<b>!</b> Версия каталога: {$smarty.const.CAT_VERSION}<br/>
<b>!</b> Версия Smarty: {$smarty.version}<br/>
</div>

{include file='foot.tpl'}
