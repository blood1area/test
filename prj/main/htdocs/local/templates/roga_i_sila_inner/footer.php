
					</section>
					<hr class="bottom_line"/>
				</div>
			</section>
			<div class="d_footer width_960"></div>
			<div class="clear"></div>
		</div>
		<footer class="footer width_960">
			<section class="float_inner">
						<?$APPLICATION->IncludeComponent(
	"qsoft:stores.list", 
	"stores_short", 
	array(
		"ALL_SALONS_URL" => "/company/stores/",
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "salons",
		"SALONS_COUNT" => "2",
		"SHOW_MAP" => "N",
		"SORT_BY" => "RAND",
		"SORT_ORDER" => "DESC",
		"COMPONENT_TEMPLATE" => "stores_short"
	),
	false
);?>
						<section class="info_block left_block_shadow">
							<h2><?=GetMessage("INFO_MENU_TITLE")?></h2>
							<nav class="grey">
								<ul>
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu",
									"menu_footer",
									Array(
										"ALLOW_MULTI_SELECT" => "N",
										"CHILD_MENU_TYPE" => "left",
										"DELAY" => "N",
										"MAX_LEVEL" => "1",
										"MENU_CACHE_GET_VARS" => array(0=>"",),
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_TYPE" => "Y",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"ROOT_MENU_TYPE" => "bottom",
										"USE_EXT" => "N"
									)
								);?>
								</ul>
							</nav>
						</section>
					</section>
			<div class="footer_inner">
				<a href="http://www.qsoft.ru" target="_blank" class="qsoft grey inline-block">Сделано в</a>
				<div class="copy">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include_areas/copyright.php"
					)
				);?>
				</div>
			</div>
		</footer>
	</body>
</html>