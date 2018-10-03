<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arCurrentValues */

if(!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(array("-"=>" "));

$arIBlocks=array();
$db_iblock = CIBlock::GetList(array("SORT"=>"ASC"), array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = "[".$arRes["ID"]."] ".$arRes["NAME"];

$arSorts = array("ASC"=>GetMessage("SORT_ORDER_ASC_TITLE"), "DESC"=>GetMessage("SORT_ORDER_DESC_TITLE"));
$arSortFields = array(
		"ID"=>GetMessage("T_IBLOCK_DESC_FID"),
		"NAME"=>GetMessage("T_IBLOCK_DESC_FNAME"),
		"ACTIVE_FROM"=>GetMessage("T_IBLOCK_DESC_FACT"),
		"SORT"=>GetMessage("T_IBLOCK_DESC_FSORT"),
		"TIMESTAMP_X"=>GetMessage("T_IBLOCK_DESC_FTSAMP"),
		"RAND"=>GetMessage("T_IBLOCK_DESC_FRAND")
	);

$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_TYPE_TITLE"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "salons",
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_ID_TITLE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"REFRESH" => "Y",
		),
		"SALONS_COUNT" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SALONS_COUNT_TITLE"),
			"TYPE" => "STRING",
			"DEFAULT" => "2",
		),
		"ALL_SALONS_URL" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("ALL_SALONS_URL_TITLE"),
			"TYPE" => "STRING",
		),
		"SHOW_MAP" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SHOW_MAP_TITLE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"SORT_BY" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("SORT_BY_TITLE"),
			"TYPE" => "LIST",
			"DEFAULT" => "RAND",
			"VALUES" => $arSortFields,
		),
		"SORT_ORDER" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("SORT_ORDER_TITLE"),
			"TYPE" => "LIST",
			"DEFAULT" => "DESC",
			"VALUES" => $arSorts,
		),
		"CACHE_TIME"  =>  array("DEFAULT"=>3600),
	),
);

$arTemplateParameters = array( 
	"DISPLAY_DATE" => Array(
		"HIDDEN" => 'Y',
	),
	"DISPLAY_NAME" => Array(
		"HIDDEN" => 'Y',
	),
	"DISPLAY_PICTURE" => Array(
		"HIDDEN" => 'Y',
	),
	"DISPLAY_PREVIEW_TEXT" => Array(
		"HIDDEN" => 'Y',
	),
);