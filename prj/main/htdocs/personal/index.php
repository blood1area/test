<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");?>

<p>В личном кабинете Вы можете проверить текущее состояние корзины, ход выполнения Ваших заказов, просмотреть или изменить личную информацию.</p>

<p>
	<h2>Личная информация</h2>
 	<a href="/personal/profile/">Изменить регистрационные данные</a>
</p>

<p>
	<h2>Заказы</h2>
	<a href="/personal/cart/">Посмотреть содержимое корзины</a><br>
	<a href="/personal/order/">Посмотреть историю заказов</a>
</p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>