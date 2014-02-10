<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
CModule::IncludeModule("iblock");
IncludeModuleLangFile(__FILE__);

$sModuleId  = 'citfact.empty';

// $IBLOCK_ID = IBLOCK_CATALOG;
// $IBLOCK_ID = COption::GetOptionString( $sModuleId, 'id_block_trade_filtersorter');

CJSCore::Init(array("jquery"));?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

$aTabs = array(
	array("DIV" => "edit1", "TAB" => GetMessage("FACT_CREATE_PROP_HELP_LIST"), "TITLE" => "Заголовок таба 1"),
	array("DIV" => "edit2", "TAB" => GetMessage("FACT_CREATE_PROP_HELP_LIST"), "TITLE" => "Заголовок таба 2")
);
$tabControl = new CAdminTabControl("tabControl", $aTabs);
?>

<form method="post" action="<?echo $APPLICATION->GetCurPage()?>" enctype="multipart/form-data" name="post_form" id="post_form">

<?
echo bitrix_sessid_post();
$tabControl->Begin();
?>

<?$tabControl->BeginNextTab();?>
<tr><td>тело первого таба </td></tr>

<?$tabControl->BeginNextTab();?>
<tr><td>тело второго таба </td></tr>

<?$tabControl->Buttons();?>
<input  class="adm-btn" type="submit" name="Update" value="<?=GetMessage("FACT_CREATE_PROP_HELP_SAVE"); ?>" title="<?=GetMessage("FACT_CREATE_PROP_HELP_SAVE"); ?>">
<?$tabControl->End();?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");?>

</form>