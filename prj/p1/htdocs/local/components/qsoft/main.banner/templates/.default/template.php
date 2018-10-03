<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$frame = $this->createFrame()->begin("");?>
	<div class="slider">
		<ul class="bxslider">
			<?foreach($arResult['BANNERS_PROPERTIES'] as $banner):?>
			<li>
				<div class="banner">
					<img src="<?=CFile::GetPath($banner['IMAGE_ID'])?>" alt="<?=$banner['NAME']?>" title="<?=$banner['NAME']?>" />
					<div class="banner_content">
						<h1><?=$banner['NAME']?></h1>
						<h2><?=$banner['CODE']?><a href="<?=$banner['URL']?>" class="detail_link"><?=GetMessage("MORE_INFO_TITLE")?></a></h2>
					</div>
				</div>
			</li>
			<?endforeach;?>
		</ul>
	</div>
<?$frame->end();?>