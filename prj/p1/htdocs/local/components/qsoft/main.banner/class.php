<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
\Bitrix\Main\Loader::includeModule('advertising');

CBitrixComponent::includeComponentClass("bitrix:advertising.banner");

class QsoftMainBanner extends AdvertisingBanner
{
	public function onPrepareComponentParams($params)
	{
		$params = AdvertisingBanner::onPrepareComponentParams($params);
		global $USER;
		if (!$USER->IsAuthorized()) {
			$params['QUANTITY'] = 1;
		}
		return $params;
	}
}
?>