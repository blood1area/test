<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult)):?>
	<nav class="main_menu">
		<ul id="horizontal-multilevel-menu">
		<?
		$prevLevel = 0;
		foreach($arResult as $arItem):?>
			<?if ($prevLevel && $arItem["DEPTH_LEVEL"] < $prevLevel):?> 
				<?=str_repeat("</ul></li>" , ($prevLevel - $arItem["DEPTH_LEVEL"]))?>
			<?endif?>
			<?if ($arItem["IS_PARENT"]):?>
				<li class="submenu pie"><span><a <?=$arItem["SELECTED"] ? 'style="color:#FF7519;"' : ""?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></span><div class="submenu_border"></div>
					<ul>
			<?else:?>
					<li><a <?=$arItem["SELECTED"] ? 'style="color:#FF7519;"' : ""?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
			<?$prevLevel = $arItem["DEPTH_LEVEL"];?>
		<?endforeach?>
		<?if ($prevLevel > 1):?>
			<?=str_repeat("</ul></li>" , ($prevLevel-1))?>
		<?endif?>
		</ul>
	</nav>
<?endif?>