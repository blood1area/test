<?

use \Bitrix\Main\Loader;
//page start
AddEventHandler("main", "OnPageStart", "loadLocalLib", 1);
function loadLocalLib()
{
    Loader::includeModule('local.lib');
}

$eventManager = \Bitrix\Main\EventManager::getInstance();

?>