<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/funcs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'KISS.com');


// Display template: output html

$templateParser->display('head1.tpl');

$action= isset($_GET['action'])?$_GET['action']:'about';

switch($action) {
    case 'home':

$templateParser->display('logo.tpl');
$templateParser->display('nav.tpl');
include('model/select_newsarticles.php');
$templateParser->assign('result',$result);
$templateParser->display('newsarticles.tpl');
$templateParser->display('sidebar.tpl');

break;

case 'about':
$templateParser->display('logo.tpl');
$templateParser->display('nav.tpl');
$templateParser->display('about.tpl');

break;
}
$templateParser->assign('footer', 'Footer');

$templateParser->display('footer.tpl');

// Show newsarticles 'old style' => refactor to template system.



