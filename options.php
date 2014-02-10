<?/**
 * Настройки модуля empty
 *
 */
 
/**
 * Идентификатор модуля
 */
$sModuleId  = 'citfact.empty';
 
/**
 * Подключаем модуль (выполняем код в файле include.php)
 */
//CModule::IncludeModule( $sModuleId );
 
/**
 * Языковые константы (файл lang/ru/options.php)
 */
global $MESS;
IncludeModuleLangFile( __FILE__ );
 
if( $REQUEST_METHOD == 'POST' && $_POST['Update'] == "Y") {
    /**
     * Если форма была сохранена, устанавливаем значение опции модуля
     */
    // COption::SetOptionString( $sModuleId, 'id_block_prop_filtersorter', $_POST['id_block_prop_filtersorter']);
    // COption::SetOptionString( $sModuleId, 'id_block_trade_filtersorter', $_POST['id_block_trade_filtersorter']);
}
 
/**
 * Описываем табы административной панели битрикса
 */
$aTabs = array(
    array(
        'DIV'   => 'edit1',
        'TAB'   => GetMessage('MAIN_TAB_SET'),
        'ICON'  => 'fileman_settings',
        'TITLE' => GetMessage('MAIN_TAB_TITLE_SET' )
    ),
);
 
/**
 * Инициализируем табы
 */
$oTabControl = new CAdmintabControl( 'tabControl', $aTabs );
$oTabControl->Begin();
 
/**
 * Ниже пошла форма страницы с настройками модуля
 */
?><form method="POST" enctype="multipart/form-data" action="<?echo $APPLICATION->GetCurPage()?>?mid=<?=htmlspecialchars( $sModuleId )?>&lang=<?echo LANG?>">
    <?=bitrix_sessid_post()?>
    <?$oTabControl->BeginNextTab();?>
    
	<tr><td>Настройки модуля</td></tr>
	
    <?$oTabControl->Buttons();?>
    <input type="submit" name="Update" value="<?=GetMessage( 'CITFACT_IB_SAVE' )?>" />
    <input type="reset" name="reset" value="<?= GetMessage( 'CITFACT_IB_RESET' )?>" />
    <input type="hidden" name="Update" value="Y" />
    <?$oTabControl->End();?>
</form>