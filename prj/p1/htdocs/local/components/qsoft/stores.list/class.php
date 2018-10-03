<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Context,
	Bitrix\Main\Loader,
	Bitrix\Iblock;

class QsoftStoreList extends CBitrixComponent
{
	public function onPrepareComponentParams($arParams) {
		if (!isset($arParams["CACHE_TIME"])) {
			$arParams["CACHE_TIME"] = 3600;
		}

		$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
		if (strlen($arParams["IBLOCK_TYPE"])<=0) {
			$arParams["IBLOCK_TYPE"] = "salons";
		}

		$arParams["IBLOCK_ID"] = trim($arParams["IBLOCK_ID"]);

		$arParams["SORT_BY"] = trim($arParams["SORT_BY"]);
		if (strlen($arParams["SORT_BY"]) <= 0) {
			$arParams["SORT_BY"] = "ID";
		}

		if (!preg_match('/^(asc|desc|nulls)(,asc|,desc|,nulls){0,1}$/i', $arParams["SORT_ORDER"])) {
			$arParams["SORT_ORDER"] = "DESC";
		}

		$arParams["ALL_SALONS_URL"] = trim($arParams["ALL_SALONS_URL"]);

		$arParams["SALONS_COUNT"] = intval($arParams["SALONS_COUNT"]);
		if ($arParams["SALONS_COUNT"] == 0){
			$arParams["SALONS_COUNT"] = false;
		}

		return $arParams;
	}

	public function executeComponent(){
		if (!Loader::IncludeModule('iblock')) {
			ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
			return;
		}
		if ($this->startResultCache(false, false)) {
		    	$this->arResult = $this->GetSalonList();
		    	if($this->arParams["SHOW_MAP"]=="Y"){
		    		$this->arResult["SALON_MAP_ARRAY"] = $this->getMapArray($this->arResult["ITEMS"]);
		    	}
			    $this->setResultCacheKeys(
			    	[
			    		"ITEMS",
			       		"SALON_MAP_ARRAY"
			    	]
			    );
			    $this->includeComponentTemplate();
		}
		$arButtons = CIBlock::GetPanelButtons(
            $this->arParams['IBLOCK_ID'],
            0,
            0,
            array("SECTION_BUTTONS" => false)
        );

        global $APPLICATION;

        if ($APPLICATION->GetShowIncludeAreas()) {
            $this->addIncludeAreaIcons(CIBlock::GetComponentMenu($APPLICATION->GetPublicShowMode(), $arButtons));
        }
	}

	private function GetSalonList() {
		$salons = [];
		$arImgID = [];
		$arSelect = [
			'ID',
			'NAME',
			'PREVIEW_PICTURE',
			'PROPERTY_PHONE', 
			'PROPERTY_WORK_HOURS', 
			'PROPERTY_ADDRESS'
		];
		if ($this->arParams["SHOW_MAP"] == "Y") {
			$arSelect[] = 'PROPERTY_MAP';
		}
		$salonsList = CIBlockElement::GetList (
			[
				$this->arParams["SORT_BY"] => $this->arParams["SORT_ORDER"]
			],
			[
				"IBLOCK_TYPE" => $this->arParams["IBLOCK_TYPE"], 
				"IBLOCK_ID" => $this->arParams["IBLOCK_ID"], 
				"ACTIVE" => "Y",
			],
			false,
			[
				"nPageSize" => $this->arParams["SALONS_COUNT"]
			],
			$arSelect
		);
		while ($salon = $salonsList->GetNext()) {
			if (!empty($salon['PREVIEW_PICTURE'])) {
				$arImgID[$salon['ID']] = $salon['PREVIEW_PICTURE'];
			}

			$arEditButtons = CIBlock::GetPanelButtons(
                $this->arParams['IBLOCK_ID'],
                $salon["ID"],
                0,
                array("SECTION_BUTTONS" => false, "SESSID" => false)
            );

            $salon["EDIT_LINK"]   = $arEditButtons["edit"]["edit_element"]["ACTION_URL"];
            $salon["DELETE_LINK"] = $arEditButtons["edit"]["delete_element"]["ACTION_URL"];

            $salon['EDIT_LINK_TEXT'] = $arEditButtons["edit"]["edit_element"]["TEXT"];
			$salon['DELETE_LINK_TEXT'] = $arEditButtons['edit']['delete_element']['TEXT'];

			$salons["ITEMS"][] = $salon;
		}
		$arImg = $this->getImageUrl($arImgID);
		foreach ($salons["ITEMS"] as &$salon) {
			if (!empty($salon["PREVIEW_PICTURE"])) {
				$salon["PREVIEW_PICTURE"] = $arImg[$salon["PREVIEW_PICTURE"]];
			}else{
				$salon['PREVIEW_PICTURE'] = NO_IMAGE_URL;
			}
		}
		$salon["IBLOCK_ID"] = $this->arParams["IBLOCK_ID"];
		return $salons;
	}

	private function getImageUrl($arId) {
		$dbImg = CFile::GetList (
			[],
			[
				"@ID" => implode(",", $arId)
			]
		);

		while ($salonImg = $dbImg->GetNext()) {
			$arImg[$salonImg['ID']]='/upload/' . $salonImg['SUBDIR'] . '/' . $salonImg['FILE_NAME'];
		}

		return $arImg;
	}

	private function getMapArray($salons)
	{
		$arMap = [];
		foreach ($salons as $salon => $value) {
			if (!empty($value['PROPERTY_MAP_VALUE'])) {
				list($LAT, $LON) = explode(',', $value['PROPERTY_MAP_VALUE']);
				$arMap['PLACEMARKS'][] = [
					'TITLE' => $value['NAME'],
					'TEXT' => $value['PROPERTY_ADDRESS_VALUE'],
					'LON' => $LON,
					'LAT' => $LAT
				];
			}
		}
		$arMap['yandex_lat'] = 55.7537;
		$arMap['yandex_lon'] = 37.6198;
		return serialize($arMap);
	}
}