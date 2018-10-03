<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


$aMenuLinksExt =
[
	[
		"Седаны", 
		"/catalog/section1/sedans/", 
		[], 
		[], 
		"" 
	],
	[
		"Хетчбеки", 
		"/catalog/section1/hatchbacks/", 
		[], 
		[], 
		"" 
	],
	[
		"Универсалы", 
		"/catalog/section1/universal/", 
		[], 
		[], 
		"" 
	],
	[
		"Купе", 
		"/catalog/section1/coupe/", 
		[], 
		[], 
		"" 
	],
	[
		"Родстеры", 
		"/catalog/section1/roadsters/", 
		[], 
		[], 
		"" 
	]
];

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

?>
