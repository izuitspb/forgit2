<?php

// echo (md5($model->password));
$this->title = 'Восстановление данных';
$this->params['breadcrumbs'][] = $this->title;


if ($flag == 1)
	echo "<h2>пароль изменен.</h2>";
if ($flag == 2)
	echo "<h2>по этому коду уже было восстановление пароля. Если вы забыли пароль, запросите новый код</h2>";
if ($flag == 3)
	echo "<h2>неизвестная строка. Свяжитесь пожалуста с нами</h2>";


?>

