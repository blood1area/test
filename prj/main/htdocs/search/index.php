<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");?><?$APPLICATION->IncludeComponent("bitrix:search.page", "search_qsoft", Array(
	"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Искать только в активных по дате документах
		"COLOR_NEW" => "000000",	// Цвет позднего тега (пример: "C0C0C0")
		"COLOR_OLD" => "C8C8C8",	// Цвет раннего тега (пример: "FEFEFE")
		"COLOR_TYPE" => "Y",	// Плавное изменение цвета
		"DEFAULT_SORT" => "rank",	// Сортировка по умолчанию
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под результатами
		"DISPLAY_TOP_PAGER" => "Y",	// Выводить над результатами
		"FILTER_NAME" => "",	// Дополнительный фильтр
		"FONT_MAX" => "50",	// Максимальный размер шрифта (px)
		"FONT_MIN" => "10",	// Минимальный размер шрифта (px)
		"NO_WORD_LOGIC" => "N",	// Отключить обработку слов как логических операторов
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Название шаблона
		"PAGER_TITLE" => "Результаты поиска",	// Название результатов поиска
		"PAGE_RESULT_COUNT" => "20",	// Количество результатов на странице
		"PATH_TO_USER_PROFILE" => "#SITE_DIR#people/user/#USER_ID#/",	// Шаблон пути к профилю пользователя
		"PERIOD_NEW_TAGS" => "",	// Период, в течение которого считать тег новым (дней)
		"RATING_TYPE" => "",	// Вид кнопок рейтинга
		"RESTART" => "N",	// Искать без учета морфологии (при отсутствии результата поиска)
		"SHOW_CHAIN" => "Y",	// Показывать цепочку навигации
		"SHOW_ITEM_DATE_CHANGE" => "Y",
		"SHOW_ITEM_TAGS" => "Y",
		"SHOW_ORDER_BY" => "Y",
		"SHOW_RATING" => "Y",	// Включить рейтинг
		"SHOW_TAGS_CLOUD" => "N",
		"SHOW_WHEN" => "N",	// Показывать фильтр по датам
		"SHOW_WHERE" => "Y",	// Показывать выпадающий список "Где искать"
		"TAGS_INHERIT" => "Y",	// Сужать область поиска
		"TAGS_PAGE_ELEMENTS" => "20",	// Количество тегов
		"TAGS_PERIOD" => "",	// Период выборки тегов (дней)
		"TAGS_SORT" => "NAME",	// Сортировка тегов
		"TAGS_URL_SEARCH" => "",	// Путь к странице поиска (от корня сайта)
		"USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
		"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
		"USE_TITLE_RANK" => "N",	// При ранжировании результата учитывать заголовки
		"WIDTH" => "100%",	// Ширина облака тегов (пример: "100%" или "100px", "100pt", "100in")
		"arrFILTER" => array(	// Ограничение области поиска
			0 => "iblock_news",
			1 => "iblock_salons",
		),
		"arrFILTER_iblock_news" => array(	// Искать в информационных блоках типа "iblock_news"
			0 => "13",
		),
		"arrFILTER_iblock_salons" => array(	// Искать в информационных блоках типа "iblock_salons"
			0 => "12",
		),
		"arrFILTER_main" => array(
			0 => "",
		),
		"arrWHERE" => array(	// Значения для выпадающего списка "Где искать"
			0 => "iblock_news",
			1 => "iblock_salons",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>