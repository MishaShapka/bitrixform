<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><?$APPLICATION->IncludeComponent(
	"altasib:feedback.form",
	"",
	Array(
		"ACTIVE_ELEMENT" => "Y",
		"ADD_HREF_LINK" => "Y",
		"ADD_LEAD" => "N",
		"ALX_LINK_POPUP" => "N",
		"BBC_MAIL" => "",
		"CAPTCHA_TYPE" => "default",
		"CATEGORY_SELECT_NAME" => "Âûáåðèòå êàòåãîðèþ",
		"CHANGE_CAPTCHA" => "N",
		"CHECKBOX_TYPE" => "CHECKBOX",
		"CHECK_ERROR" => "Y",
		"COLOR_OTHER" => "#009680",
		"COLOR_SCHEME" => "PALE",
		"COLOR_THEME" => "",
		"EVENT_TYPE" => "ALX_FEEDBACK_FORM",
		"FB_TEXT_NAME" => "",
		"FB_TEXT_SOURCE" => "PREVIEW_TEXT",
		"FORM_ID" => "1",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INPUT_APPEARENCE" => array("DEFAULT"),
		"JQUERY_EN" => "jquery",
		"LINK_SEND_MORE_TEXT" => "Îòïðàâèòü åù¸ îäíî ñîîáùåíèå",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array("PHONE"),
		"MESSAGE_OK" => "Спасибо, мы свяжемся с Вами в ближайшее время!",
		"NAME_ELEMENT" => "ALX_DATE",
		"NOT_CAPTCHA_AUTH" => "Y",
		"PROPERTY_FIELDS" => array("PHONE","FIO","EMAIL","FEEDBACK_TEXT"),
		"PROPERTY_FIELDS_REQUIRED" => array("PHONE","FIO","EMAIL","FEEDBACK_TEXT"),
		"PROPS_AUTOCOMPLETE_EMAIL" => array("EMAIL"),
		"PROPS_AUTOCOMPLETE_NAME" => array("FIO"),
		"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array("PHONE"),
		"PROPS_AUTOCOMPLETE_VETO" => "N",
		"REQUIRED_SECTION" => "N",
		"SECTION_FIELDS_ENABLE" => "N",
		"SECTION_MAIL_ALL" => "mishashapka@icloud.com",
		"SEND_IMMEDIATE" => "Y",
		"SEND_MAIL" => "N",
		"SHOW_LINK_TO_SEND_MORE" => "Y",
		"SHOW_MESSAGE_LINK" => "Y",
		"SPEC_CHAR" => "N",
		"USERMAIL_FROM" => "N",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_INPUT_LABEL" => "",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_CAPTCHA" => "N",
		"WIDTH_FORM" => "100%"
	)
);?><? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
