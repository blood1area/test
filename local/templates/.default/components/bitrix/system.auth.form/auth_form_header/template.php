<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

<?if($arResult["FORM_TYPE"] == "login"):?>

    <?if($arResult["BACKURL"] <> ''):?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
    <?endif?>

    <?foreach ($arResult["POST"] as $key => $value):?>
        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
    <?endforeach?>

    <nav class="top_menu grey inline-block">
        <a href="<?=$arResult["AUTH_REGISTER_URL"]?>" class="register"><?=GetMessage("AUTH_REGISTER")?></a>
        <a href="/auth/" class="auth"><?=GetMessage("AUTH_LOGIN")?></a>
    </nav>
<?
else:
?>
    <nav class="top_menu grey inline-block authorize">
        <span>Здравствуйте,</span>
        <a href="#"><b class="user_name"><?=($arResult["USER_NAME"]?$arResult["USER_NAME"]:$arResult["USER_LOGIN"])?></b></a>
        <a href="<?=$arResult["PROFILE_URL"]?>"><?=GetMessage("AUTH_PROFILE")?></a>
        <a class="logout" href="?logout=yes"><?=GetMessage("AUTH_LOGOUT_BUTTON")?></a>
    </nav>
<?endif?>
