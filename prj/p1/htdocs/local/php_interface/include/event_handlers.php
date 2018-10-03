<?
//Обработчик события авторизации пользователя. При каждой авторизации пользователю на электронный адрес отправляется сообщение.
AddEventHandler("main", "OnAfterUserAuthorize", Array("UserAuthNotification", "OnAfterUserAuthorizeHandler"));

class UserAuthNotification
{
    function OnAfterUserAuthorizeHandler($arUser) {
        $arEventFields = array (
            "EMAIL_TO" => $arUser["user_fields"]["EMAIL"],
            "USER_LOGIN_NAME" => $arUser["user_fields"]["LOGIN"],
            "ENTRY_DATE" => date('Y.d.m G:i:s')
      	);
      	CEvent::Send("USER_AUTH_NOTIFICATION", "s1", $arEventFields);
    }
}