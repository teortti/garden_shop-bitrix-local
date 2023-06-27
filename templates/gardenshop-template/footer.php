<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?> 

<br />
<!--BANNER_BOTTOM-->

<footer>
		<div class="pages_in_footer">

			<div class="f__pages_from_top-menu">
				<a>+8 (800) 800 800</a>
				<a href="https://vk.com/child_of_flowers">Вконтакте</a>
				<a>E-mail: email@gmail.com</a>
			</div>			

			<div class="f__pages_from_top-menu">
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel_silver", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "Y",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel_silver"
	),
	false
);?>
			</div>
			<div class="f__pages_from_top-menu">		
			<?$APPLICATION->IncludeComponent(
					"bitrix:system.auth.form",
					".default",
					Array(
						"REGISTER_URL" => "/auth/", 
						"PROFILE_URL" => "/personal/profile/" 
					)
				);?>
			</div>
			
		</div>
	<div class="copyright">© Copyright Maria Ivanova, 2021-2022</div>
</footer>



</div>
</body>
</html>