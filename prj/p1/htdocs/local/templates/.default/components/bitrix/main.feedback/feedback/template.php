<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(strlen($arResult["OK_MESSAGE"]) > 0):?>
	<div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><br>
	<a href="/company/contacts/"><?=GetMessage("ANOTHER_MESSAGE")?></a>
<?else:?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
	<div class="field_row">
		<p class="form_label"><span><?=GetMessage("MFT_NAME")?></span><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="required">*</span><?endif?>
		<?
		if(!empty($arResult["ERROR_MESSAGE"])){
			foreach ($arResult["ERROR_MESSAGE"] as $key => $value) {
				if($value=="Укажите ваше имя."){
					echo "<span class='error'>".$value."</span>";
				}
			}
		}
		?>
		</p>
		<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
	</div>
	<div class="field_row">
		<p class="form_label"><span><?=GetMessage("MFT_EMAIL")?></span><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="required">*</span><?endif?>
		<?
		if(!empty($arResult["ERROR_MESSAGE"])){
			foreach ($arResult["ERROR_MESSAGE"] as $key => $value) {
				if($value=="Указанный E-mail некорректен."){
					echo "<span class='error'>".$value."</span>";
				}
				if($value=="Укажите E-mail, на который хотите получить ответ."){
					echo "<span class='error'>".$value."</span>";
				}
			}
		}
		?>
		</p>
		<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
	</div>
	<div class="field_row">
		<p class="form_label"><span><?=GetMessage("MFT_MESSAGE")?></span><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="required">*</span><?endif?>
		<?
		if(!empty($arResult["ERROR_MESSAGE"])){
			foreach ($arResult["ERROR_MESSAGE"] as $key => $value) {
				if($value=="Вы не написали сообщение."){
					echo "<span class='error'>".$value."</span>";
				}
			}
		}
		?>
		</p>
		<textarea name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
	</div>
	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="field_row"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA" style="float: none; margin-top: 0;">
		<div class="field_row">
			<p class="form_label"><span><?=GetMessage("MFT_CAPTCHA_CODE")?></span>
			<span class="required">*</span>
			<?
			if(!empty($arResult["ERROR_MESSAGE"])){
				foreach ($arResult["ERROR_MESSAGE"] as $key => $value) {
					if($value=="Не указан код защиты от автоматических сообщений."){
						echo "<span class='error'>".$value."</span>";
					}
				}
			}
			?>
			</p>
			<input type="text" name="captcha_word" size="30" maxlength="50" value="">
		</div>
	</div>
	<?endif;?>
	<div class="buttons_block">
		<input type="submit" name="submit" class="pie" value="<?=GetMessage("MFT_SUBMIT")?>">
	</div>
</form>
<?endif;?>