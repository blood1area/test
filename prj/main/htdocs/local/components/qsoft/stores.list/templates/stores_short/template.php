<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="shops_block">
	<h2 class="inline-block"><?=GetMessage("OUR_SALON")?></h2>
	<span class="dark_grey all_list">&nbsp;/&nbsp;<a href="<?=$arParams["ALL_SALONS_URL"]?>" class="text_decor_none"><b><?=GetMessage("ALL_URL_TITLE")?></b></a></span>
	<div>
		<? foreach ($arResult["ITEMS"] as $arItem): ?>
			<?
	        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	        ?>
			<figure class="shops_block_item" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
				<a href=""><img src="<?=$arItem["PREVIEW_PICTURE"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" /></a>
				<figcaption class="shops_block_item_description">
					<h3 class="shops_block_item_name"><?=$arItem["NAME"]?></h3>
					<p class="dark_grey"><?=$arItem["PROPERTY_ADDRESS_VALUE"]?></p>
					<p class="black"><?=$arItem["PROPERTY_PHONE_VALUE"]?></p>
					<p><?=GetMessage("WORK_HOURS")?><br/><?=$arItem["PROPERTY_WORK_HOURS_VALUE"]?></p>
				</figcaption>
			</figure>
		<? endforeach;?>
	</div>
</section>
