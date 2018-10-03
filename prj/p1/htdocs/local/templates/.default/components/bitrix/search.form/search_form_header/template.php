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
$this->setFrameMode(true);?>
<form action="<?=$arResult["FORM_ACTION"]?>" name="search_form" class="search_form pie">
		<div class="search_form_wrapper">
			<input type="text" placeholder="<?=GetMessage("SEARCH_INPUT_PLACEHOLDER")?>" name="q" value=""/>
			<input type="submit" value=""/>
		</div>
</form>