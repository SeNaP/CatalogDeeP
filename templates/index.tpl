{include file='head.tpl'}
{if isset($admin_page)}
<div class="niz_a">&#187; {$admin_page}</div>
{/if}
<div class='title'>Категории</div>
{foreach from=$result item=i}
<div class="menu">
<img src='/templates/images/go.gif' alt='' /><a href="cat.php?id={$i.id}">{$i.name}</a> [{$i.user_act} / {$i.user_all}]<br/>
&#187;<span class='menu_s'>{$i.about}</span>
</div>
{/foreach}

{include file='foot.tpl'}
