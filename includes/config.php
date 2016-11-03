<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings

//define('DB_HOST','localhost');
//define('DB_NAME','myband');
//define('DB_USERNAME','root');
//define('DB_PASSWORD','');

define('DB_HOST','127.0.0.1');
define('DB_NAME','19746_myBand');
define('DB_USERNAME','19746_Jelle');
define('DB_PASSWORD','ingemar1');

define('NR_ITEMS_PER_PAGE',2);

?>
