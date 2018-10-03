<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


$aMenuLinksExt =
[
	[
		"Рамные", 
		"/catalog/section2/rams/", 
		[], 
		[], 
		"" 
	],
	[
		"Пикапы", 
		"/catalog/section2/pickaps/", 
		[], 
		[], 
		"" 
	],
	[
		"Кросоверы", 
		"/catalog/section2/crosovers/", 
		[], 
		[], 
		"" 
	]
];

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

?>
