{include file='head.tpl'}
<div class="title">Регистрация в катлоге</div>

{if !empty($msg)}
	<div class="rmenu"><p><b>ОШИБКА!</b></p>
	{foreach from=$msg item=message}
		 <div>{$message}</div>
	{/foreach}
	<p></p></div>
{/if}

<form action="/registration.php" method="POST">
URL сайта:<br/>
<input type="text" name="url" value="http://"><br/>
Название сайта:<br/>
<input type="text" name="name"><br/>
Описание сайта:<br/>
<input type="text" name="about"><br/>
Ваш пароль:<br/>
<input type="text" name="password"><br/>
Ваш E-mail:<br/>
<input type="text" name="email"><br/>
Категория:<br/>
<select name="category">

{foreach from=$category item=i}

<option value="{$i.id}" >{$i.name}</option>

{/foreach}

</select>
	
<input type="submit" name="send" value="Регистрация"><br/>




{include file='foot.tpl'}
