<?php
ob_start();
session_start();

//database credentials
define('DBHOST','mysql427.umbler.com:41890');
define('DBUSER','fernandopaulino');
define('DBPASS','FfPpaulino0017');
define('DBNAME','fernandopaulino');

$db = new PDO("mysql:host=".DBHOST.";port=;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//set timezone
date_default_timezone_set('America/Sao_Paulo');

//load classes as needed
function __autoload($class) {

   $class = strtolower($class);

	//if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	} 	


	//if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}

	//if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	} 	

   //if call from within admin adjust the path
   $classpath = 'admin/classes/class.'.$class . '.php';

   if ( file_exists($classpath)) {
      require_once $classpath;
   }  

}


$user = new User($db); 
?>