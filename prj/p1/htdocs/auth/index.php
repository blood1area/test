<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if($_REQUEST['TYPE'] == 'REGISTRATION'):
	$APPLICATION->SetTitle("Благодарим Вас за регистрацию в интернет-магазине «Рога и сила»!");
?>
<p>Добро пожаловать!</p>
<p>Пожалуйста, проверьте Ваш e-mail – мы отправили Вам приветственное письмо.</p>
<p>Теперь у Вас есть возможность:</p>
<ul>
	<li>Сохранять в Личном кабинете персональные данные</li>
	<li>Легко отслеживать статус Вашего заказа в режиме online</li>
	<li>В любой момент просмотреть историю Ваших заказов</li>
</ul>
<p>Что Вы хотите сделать прямо сейчас?</p>
<?else:
	if (is_string($_REQUEST["backurl"]) && strpos($_REQUEST["backurl"], "/") === 0){
		LocalRedirect($_REQUEST["backurl"]);
	}else{
		LocalRedirect("/");
	}
endif;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>