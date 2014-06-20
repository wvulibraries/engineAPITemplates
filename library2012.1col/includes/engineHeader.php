<?php
if(!class_exists('EngineAPI')){
	require_once("/home/library/phpincludes/engine/engineAPI/3.1/engine.php");
}
$engine = EngineAPI::singleton();

if (EngineAPI::VERSION >= "4.0") {
	$localvars  = localvars::getInstance();
	$localvarsFunction = array($localvars,'set');
}
else {
	$localvarsFunction = array("localvars","add");
}

call_user_func_array($localvarsFunction,array("cssExt","less"));
call_user_func_array($localvarsFunction,array("cssURL","/css/2012"));
call_user_func_array($localvarsFunction,array("jsURL", "/javascript/2012"));
call_user_func_array($localvarsFunction,array("imgURL","/images/2012"));
call_user_func_array($localvarsFunction,array("styleRel","")); 

// using javascript less, uncomment the following
//localvars::add("styleRel","/less");

localvars::add("docRoot","");

// for open graph tags
localvars::add("pageURL","http".((isset($_SERVER['HTTPS']))?"s":"")."://".$_SERVER['SERVER_NAME'].htmlSanitize($_SERVER['REQUEST_URI']).((isset($_SERVER['QUERY_STRING']) && !isempty($_SERVER['QUERY_STRING']))?"?".htmlSanitize($_SERVER['QUERY_STRING']):""));

// alert bar:
// this will eventually grab from the database, for now we'll just use a query string
// 
// This database information shouldn't be here ... but i stupidly used a 
// "require once" to load the db info in the other applications. Once that is fixed it can
// be removed from here as well. 
$engine->dbConnect("server","10.240.6.44");
$engine->dbConnect("username","remote");
$engine->dbConnect("password",'My$QLnb.d0wn!!');

// This is the proper way to load the passwords. 
//require '/home/www.libraries.wvu.edu/phpincludes/databaseConnectors/database.lib.wvu.edu.remote.php';
if (EngineAPI::VERSION >= "4.0") {
}
else {
	$wsgDB     = $engine->dbConnect("database","websiteGeneral",FALSE);
	$sql       = sprintf("SELECT * FROM alerts WHERE active='1'");
	$sqlResult = $wsgDB->query($sql);
}

// Defined here because of EngineAPI Bug. 
if (EngineAPI::VERSION >= "4.0") {
}
else {
	$engine->dbConnect("server","localhost");
	$engine->dbConnect("username","systems");
	$engine->dbConnect("password",'Te$t1234');
}

// This is the proper way to load the passwords. 
//require '/home/www.libraries.wvu.edu/phpincludes/databaseConnectors/localhost.systems.php';

$alertText = "";
while ($row       = mysql_fetch_array($sqlResult['result'],  MYSQL_ASSOC)) {
	if (!isempty($alertText)) {
		$alertText .= "<br \/><br \/>";
	}
	$alertText .= sprintf('<p><strong>%s:<\/strong><br \/>%s<\/p>',
		$row['title'],
		str_replace('"', '\"', str_replace('/', '\/', $row['description']))
		);
}

$alertJS = "";
if (!isempty($alertText)) {
	$alertJS = sprintf('$("#alertBar").html("%s");'."\n",
		// $engine->cleanGet['HTML']['alert']
		$alertText
		);
	$alertJS .= sprintf('$("#alertBar").css("display","block");');
}

$alertJS = str_replace("\n", "", $alertJS);
$alertJS = str_replace("\t", "", $alertJS);

call_user_func_array($localvarsFunction,array("alertJS",$alertJS));

// page/selection highlighting
call_user_func_array($localvarsFunction,array("headerLibraryClass",""));
call_user_func_array($localvarsFunction,array("headerCollectionsClass",""));
call_user_func_array($localvarsFunction,array("headerInstructionClass",""));
call_user_func_array($localvarsFunction,array("headerServicesClass",""));
call_user_func_array($localvarsFunction,array("headerAboutClass",""));

$homeHeaderImg = "home.png";

if (EngineAPI::VERSION >= "4.0") {
	$localDocRoot = $localvars->get("docroot");
}
else {
	$localDocRoot = localvars::get("docRoot");
}

if ($_SERVER['PHP_SELF'] == $localDocRoot."/index.php") {
	$homeHeaderImg = "homeSelected.png";
}
else if (preg_match('/^\/libraries.*/', $_SERVER['PHP_SELF'])) {
	call_user_func_array($localvarsFunction,array("headerLibraryClass",'class="headerSelected"'));
}
else if (preg_match('/^\/collections.*/', $_SERVER['PHP_SELF'])) {
	call_user_func_array($localvarsFunction,array("headerCollectionsClass",'class="headerSelected"'));
}
else if (preg_match('/^\/instruction.*/', $_SERVER['PHP_SELF'])) {
	call_user_func_array($localvarsFunction,array("headerInstructionClass",'class="headerSelected"'));
}
else if (preg_match('/^\/services.*/', $_SERVER['PHP_SELF'])) {
	call_user_func_array($localvarsFunction,array("headerServicesClass",'class="headerSelected"'));
}
else if (preg_match('/^\/about.*/', $_SERVER['PHP_SELF'])) {
	call_user_func_array($localvarsFunction,array("headerAboutClass",'class="headerSelected"'));
}
call_user_func_array($localvarsFunction,array("homeHeaderImg",$homeHeaderImg));

// Magpie Settings
define('MAGPIE_DIR', "/home/library/phpincludes/magpie/");
define('MAGPIE_CACHE_DIR', '/tmp/magpie_cache');

errorHandle::errorReporting(errorHandle::E_ALL);


?>