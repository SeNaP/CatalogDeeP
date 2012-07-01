{include file='head.tpl'}


<div class="title">Авторизация</div>
{section name=i loop=$msg}
 <b>{$msg[i]}</b><br/>
{/section}

<form action="/input.php?act=enter" method="POST">
Ваш ID:<br/>
<input type="text" name="id"><br/>
Пароль:<br/>
<input type="text" name="password"><br/>
<input type="submit" name="send" value="Войти"><br/>

{include file='foot.tpl'}
