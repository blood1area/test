<? if ($arParams['SHOW_MAP'] == "Y"): ?>
<div style="display: inline-block;">
<?php
$APPLICATION->IncludeComponent(
    "bitrix:map.yandex.view",
    "",
    Array(
        "CONTROLS" => array("ZOOM", "TYPECONTROL"),
        "INIT_MAP_TYPE" => "MAP",
        "MAP_DATA" => $arResult['SALON_MAP_ARRAY'],
        "MAP_HEIGHT" => "500",
        "MAP_ID" => "salon",
        "MAP_WIDTH" => "600",
        "OPTIONS" => array("ENABLE_SCROLL_ZOOM")
    )
);
?>
</div>
<? endif; ?>