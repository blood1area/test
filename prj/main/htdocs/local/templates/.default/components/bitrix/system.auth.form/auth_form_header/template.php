<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init();
?>

<?if($arResult["FORM_TYPE"] == "login"):?>
	<nav class="top_menu grey inline-block">
		<a href="<?=$arResult["AUTH_REGISTER_URL"]?>" class="register"><?=GetMessage("AUTH_REGISTER")?></a>
		<a href="<?=$arParams["REGISTER_URL"]?>?backurl=<?=$arResult["BACKURL"];?>" class="auth"><?=GetMessage("AUTH_TITLE")?></a>
	</nav>
<?
else:
?>
	<nav class="top_menu grey inline-block authorize">
		<span><?=GetMessage("PROFILE_HELLO")?></span>
		<a href="<?=$arParams["PROFILE_URL"]?>profile/"><b class="user_name"><?=$arResult["USER_NAME"]?></b></a>
		<a href="<?=$arParams["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a>
		<a class="logout" href="?logout=yes"><?=GetMessage("AUTH_LOGOUT")?></a>
	</nav>
<?endif?>
