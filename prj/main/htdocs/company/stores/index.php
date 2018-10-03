<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наши салоны");?><?$APPLICATION->IncludeComponent(
	"qsoft:stores.list", 
	"stores_full", 
	array(
		"ALL_SALONS_URL" => "",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "salons",
		"SALONS_COUNT" => "0",
		"SHOW_MAP" => "Y",
		"SORT_BY" => "NAME",
		"SORT_ORDER" => "ASC",
		"COMPONENT_TEMPLATE" => "stores_full"
	),
	false
);?><? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>