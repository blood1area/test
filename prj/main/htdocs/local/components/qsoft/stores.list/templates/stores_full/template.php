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

<section class="shops_block" style="float: none;">
	<? foreach ($arResult["ITEMS"] as $arItem): ?>
		<?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
		<div id="<?=$this->GetEditAreaId($arItem['ID'])?>">
			<figure class="shops_block_item" style="margin-bottom: 10px">
				<a href=""><img src="<?=$arItem["PREVIEW_PICTURE"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" /></a>
				<figcaption class="shops_block_item_description">
					<h3 class="shops_block_item_name"><?=$arItem["NAME"]?></h3>
					<p class="dark_grey"><?=$arItem["PROPERTY_ADDRESS_VALUE"]?></p>
					<p class="black"><?=$arItem["PROPERTY_PHONE_VALUE"]?></p>
					<p><?=GetMessage("WORK_HOURS")?><br/><?=$arItem["PROPERTY_WORK_HOURS_VALUE"]?></p>
				</figcaption>
			</figure>
		</div>
	<?endforeach;?>
</section>