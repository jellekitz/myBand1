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

$action= isset($_GET['action'])?$_GET['action']:'home';

switch($action) {
    case 'home':

$page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;
        
$templateParser->display('logo.tpl');
$templateParser->display('nav.tpl');
include('model/select_newsarticles.php');
$templateParser->assign('result',$result);
        
include('model/get_nr_articles.php');
$templateParser->assign('nr_pages',$page_nr);
$templateParser->display('newsarticles.tpl');
include('model/select_tours.php');
$templateParser->assign('result2',$result2);
$templateParser->display('sidebar.tpl');

break;
        
case 'news';
$templateParser->display('logo.tpl');
$templateParser->display('nav.tpl');
include('model/select_newsarticles2.php');
$templateParser->assign('result',$result);
$templateParser->display('news.tpl');
        
break;
        
case 'tour';
$templateParser->display('logo.tpl');
$templateParser->display('nav.tpl');
include('model/select_tours.php');
$templateParser->assign('result2',$result2);
$templateParser->display('tourschema.tpl');
        
break;
        
case 'contact';
$templateParser->display('logo.tpl');
$templateParser->display('nav.tpl');
$templateParser->display('contact.tpl');
        
break;

case 'about':
$templateParser->display('logo.tpl');
$templateParser->display('nav.tpl');
$templateParser->display('about.tpl');

break;
        
case 'search';
$templateParser->display('logo.tpl');
$templateParser->display('nav.tpl');
$templateParser->display('search.tpl');
        
break;
    
}
$templateParser->assign('footer', 'Made by Jelle Kitzen');

$templateParser->display('footer.tpl');

// Show newsarticles 'old style' => refactor to template system.



