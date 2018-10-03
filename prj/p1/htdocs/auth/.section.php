<?
if($_REQUEST["register"]=="yes"){
	$sSectionName = "Регистрация";
}else if($_REQUEST["forgot_password"]=="yes"){
	$sSectionName = "Восстановление пароля";
}else{
	$sSectionName = "Авторизация";
}
$arDirProperties = array(

);
?>