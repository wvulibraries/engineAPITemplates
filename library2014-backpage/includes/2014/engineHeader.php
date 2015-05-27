<?php
if(!class_exists('EngineAPI')){
	require_once("/home/library/phpincludes/engine/engineAPI/3.1/engine.php");
}
$engine = EngineAPI::singleton();

// Magpie Settings
// define('MAGPIE_DIR', EngineAPI::$engineVars['magpieDir']);
// define('MAGPIE_CACHE_DIR', '/tmp/magpie_cache');

errorHandle::errorReporting(errorHandle::E_ALL);

// Commented out for template development

?>