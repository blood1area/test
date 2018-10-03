<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 ошибка: Страница не найдена");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>

<p>К сожалению, такая страница не найдена. Данная страница была удалена с сайта, либо ее никогда не существовало. Вы можете вернуться на <a href="/">Главную страницу</a> или воспользоваться <a href="/search/">поиском</a>.</p>
<p>Если Вы хотите что-то сообщить, напишите нам с помощью формы <a href="/company/contacts/">Обратная связь</a>.</p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>