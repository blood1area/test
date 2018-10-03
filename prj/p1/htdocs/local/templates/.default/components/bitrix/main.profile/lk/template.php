<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @global CMain $APPLICATION
 * @param array $arParams
 * @param array $arResult
 */
?>

<div class="bx-auth-profile">

	<?ShowError($arResult["strProfileError"]);?>
	<?
	if ($arResult['DATA_SAVED'] == 'Y')
		ShowNote(GetMessage('PROFILE_DATA_SAVED'));
	?>
	<script type="text/javascript">
		<!--
			var opened_sections = [<?
				$arResult["opened"] = $_COOKIE[$arResult["COOKIE_PREFIX"]."_user_profile_open"];
				$arResult["opened"] = preg_replace("/[^a-z0-9_,]/i", "", $arResult["opened"]);
				if (strlen($arResult["opened"]) > 0)
				{
					echo "'".implode("', '", explode(",", $arResult["opened"]))."'";
				}
				else
				{
					$arResult["opened"] = "reg";
					echo "'reg'";
				}
				?>];
//-->

var cookie_prefix = '<?=$arResult["COOKIE_PREFIX"]?>';
</script>
<form method="post" name="form1" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data">
	<?=$arResult["BX_SESSION_CHECK"]?>
	<input type="hidden" name="lang" value="<?=LANG?>" />
	<input type="hidden" name="ID" value=<?=$arResult["ID"]?> />

	<div class="profile-block-<?=strpos($arResult["opened"], "reg") === false ? "hidden" : "shown"?>" id="user_div_reg">
		<table class="profile-table data-table">
			<tbody>
				<tr>
					<td><?=GetMessage('NAME')?></td>
					<td><input type="text" name="NAME" maxlength="50" value="<?=$arResult["arUser"]["NAME"]?>" /></td>
				</tr>
				<tr>
					<td><?=GetMessage('LAST_NAME')?></td>
					<td><input type="text" name="LAST_NAME" maxlength="50" value="<?=$arResult["arUser"]["LAST_NAME"]?>" /></td>
				</tr>
				<tr>
					<td><?=GetMessage('SECOND_NAME')?></font></td>
					<td><input type="text" name="SECOND_NAME" maxlength="50" value="<?=$arResult["arUser"]["SECOND_NAME"]?>" /></td>
				</tr>
				<tr>
					<td><?=GetMessage('EMAIL')?><?if($arResult["EMAIL_REQUIRED"]):?><span class="starrequired">*</span><?endif?></td>
					<td><input type="text" name="EMAIL" maxlength="50" value="<? echo $arResult["arUser"]["EMAIL"]?>" /></td>
				</tr>
				<tr>
					<td><?=GetMessage('LOGIN')?><span class="starrequired">*</span></td>
					<td><input type="text" name="LOGIN" maxlength="50" value="<? echo $arResult["arUser"]["LOGIN"]?>" /></td>
				</tr>
				<?if($arResult["arUser"]["EXTERNAL_AUTH_ID"] == ''):?>
				<tr>
					<td><?=GetMessage('NEW_PASSWORD_REQ')?></td>
					<td><input type="password" name="NEW_PASSWORD" maxlength="50" value="" autocomplete="off" class="bx-auth-input" />
						<?if($arResult["SECURE_AUTH"]):?>
						<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
							<div class="bx-auth-secure-icon"></div>
						</span>
						<noscript>
							<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
								<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
							</span>
						</noscript>
						<script type="text/javascript">
							document.getElementById('bx_auth_secure').style.display = 'inline-block';
						</script>
					</td>
				</tr>
				<?endif?>
				<tr>
					<td><?=GetMessage('NEW_PASSWORD_CONFIRM')?></td>
					<td><input type="password" name="NEW_PASSWORD_CONFIRM" maxlength="50" value="" autocomplete="off" /></td>
				</tr>
				<?endif?>
			</tbody>
		</table>
	</div>
	<p><input type="submit" name="save" value="<?=(($arResult["ID"]>0) ? GetMessage("SAVE_PROFILE_SETTINGS") : GetMessage("MAIN_ADD"))?>"></p>
</form>
</div>