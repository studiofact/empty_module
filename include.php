<?
global $DB, $DBType;

CModule::AddAutoloadClasses(
	"webdebug.options",
	array(
		"CWebdebugOptions" => "classes/{$DBType}/CWebdebugOptions.php"
	)
);
?>