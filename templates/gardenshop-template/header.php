<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>

<?$APPLICATION->ShowPanel();?>
<span class="contct_number">+8 800 800 800</span>
<header>
	<div class="logo">
	<?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/company_name.php"),
			Array(),
			Array("MODE"=>"html")
		);?>
	</div>
	<nav class="menu">
		<ul>
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"horizontal_multilevel_silver",
	Array(
		"ROOT_MENU_TYPE" => "top", 
		"MAX_LEVEL" => "1", 
		"CHILD_MENU_TYPE" => "top", 
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "Y",
		"MENU_CACHE_TYPE" => "N", 
		"MENU_CACHE_TIME" => "3600", 
		"MENU_CACHE_USE_GROUPS" => "Y", 
		"MENU_CACHE_GET_VARS" => "" 
	)
);?>


		</ul>
		<li class="sign_in"><?$APPLICATION->IncludeComponent(
					"bitrix:system.auth.form",
					".default",
					Array(
						"REGISTER_URL" => "/auth/", 
						"PROFILE_URL" => "/personal/profile/" 
					)
				);?></li>
	</nav>
</header>
<div id="search-box">
										<?$APPLICATION->IncludeComponent("bitrix:search.form", "flat", Array(
											"PAGE"	=>	"/search/"
											)
										);?>
									</div>

		<!--BANNER_LEFT-->
		<td valign="top">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td colspan="2">
						<table width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%" class="main-column">
									<div id="navigation">
									<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	".default", 
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "gs"
	),
	false
);?>

									</div>
									</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="main-column">