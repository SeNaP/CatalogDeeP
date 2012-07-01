{include file='head.tpl'}

<div class="title">Личная панель</div>
&#187; <a href="member.php?act=edit">Редактировать личные данные</a><br/>
{foreach from=$user item=i}

<b>ID:</b> {$i.id} | <b>URL:</b> {$i.url}<br/>
<b>Описание:</b> {$i.about}<br/>
<b>Переходы:</b><br/>
Вчера: В [{$i.sy_in}] <b>|</b> Из [{$i.sy_out}]<br/>
Сегодня: В [{$i.this_in}] <b>|</b> Из [{$i.this_out}]<br/>


{/foreach}


{include file='foot.tpl'}
