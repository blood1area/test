<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
	IncludeTemplateLangFile(__FILE__);
	include SITE_DEFAULT_TEMPLATE_PATH . "/header_settigs.php";
?>
<!DOCTYPE>
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8> <![endif]-->
<!--[if IE 9]>    <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
	<head>
		<?$APPLICATION->SetAdditionalCSS(SITE_DEFAULT_TEMPLATE_PATH.'/css/base.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_DEFAULT_TEMPLATE_PATH.'/js/bxslider/jquery.bxslider.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_DEFAULT_TEMPLATE_PATH.'/js/jquery.ui.selectmenu/jquery.ui.theme.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_DEFAULT_TEMPLATE_PATH.'/js/jquery.ui.selectmenu/jquery.ui.core.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_DEFAULT_TEMPLATE_PATH.'/js/jquery.ui.selectmenu/jquery.ui.selectmenu.css');?>

		<?$APPLICATION->AddHeadScript(SITE_DEFAULT_TEMPLATE_PATH."/js/jquery-1.9.1.min.js")?>
		<?$APPLICATION->AddHeadScript(SITE_DEFAULT_TEMPLATE_PATH."/js/jquery.placeholder.js")?>
		<?$APPLICATION->AddHeadScript(SITE_DEFAULT_TEMPLATE_PATH."/js/bxslider/jquery.bxslider.js")?>
		<?$APPLICATION->AddHeadScript(SITE_DEFAULT_TEMPLATE_PATH."/js/default_script.js")?>
		<?$APPLICATION->AddHeadScript(SITE_DEFAULT_TEMPLATE_PATH."/js/jquery.ui.selectmenu/jquery.ui.core.js")?>
		<?$APPLICATION->AddHeadScript(SITE_DEFAULT_TEMPLATE_PATH."/js/jquery.ui.selectmenu/jquery.ui.widget.js")?>
		<?$APPLICATION->AddHeadScript(SITE_DEFAULT_TEMPLATE_PATH."/js/jquery.ui.selectmenu/jquery.ui.position.js")?>
		<?$APPLICATION->AddHeadScript(SITE_DEFAULT_TEMPLATE_PATH."/js/jquery.ui.selectmenu/jquery.ui.selectmenu.js")?>
		<!--[if lt IE 9]>
			<?$APPLICATION->AddHeadScript(SITE_DEFAULT_TEMPLATE_PATH."/js/html5shiv.js")?>
		<![endif]-->

		<?$APPLICATION->ShowHead()?>
		<title><?$APPLICATION->ShowTitle()?></title>
		<link href="<?=SITE_DEFAULT_TEMPLATE_PATH?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<div class="wrapper">
			<div class="base_layer"></div>
			<header class="header">
				<div class="width_960">
					<div class="inline-block">
						<a href="/" class="logo inline-block"></a>
					</div>
					<?$APPLICATION->IncludeComponent(
						"bitrix:system.auth.form",
						"auth_form_header",
						Array(
							"FORGOT_PASSWORD_URL" => "",
							"PROFILE_URL" => "/personal/",
							"REGISTER_URL" => "/auth/",
							"SHOW_ERRORS" => "Y"
						)
					);?>					
					<div class="basket_block inline-block">
						<a href="#" class="basket_product_count inline-block">0</a>
						<a href="#" class="order_button pie">Оформить заказ</a>
					</div>
				</div>
			</header>
			<section class="fixed_block">
				<div class="width_960">
					<?$APPLICATION->IncludeComponent(
						"bitrix:search.form",
						"search_form_header",
						Array(
							"PAGE" => "/search/"
						)
					);?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"catalog_top",
						Array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "2",
							"MENU_CACHE_GET_VARS" => array(""),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "Y",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "Y"
						)
					);?>
				</div>
			</section>
			<section class="content">
				<div class="work_area width_960">
					<?$APPLICATION->IncludeComponent(
						"bitrix:breadcrumb",
						"breadcrumbs_qsoft",
					Array(
						"START_FROM" => "0",
				        "PATH" => "",
				        "SITE_ID" => "s1"
					)
					);?>
					<section class="content_area">
						<aside class="left_block">
							<nav>
								<ul class="left_menu">
									<li>
										<span><?=GetMessage("INFO_MENU_TITLE")?></span>
										<ul>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu", 
							"menu_left", 
							Array(
							"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "left",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => array(
									0 => "",
								),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "Y",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "bottom",
								"USE_EXT" => "N",
							),
							false
						);?>
								</ul>
							</nav>
						</aside>
						<h1><?$APPLICATION->ShowTitle()?></h1>