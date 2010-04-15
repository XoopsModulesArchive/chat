<?php
/* *********************************************/
/*                          	TAKEAWEB					*/
/*        	           http://www.takeaweb       			*/
/*       					       				*/
/*           		  Francesco Mulassano   				*/
/*            		  Alessandro Sturniolo     				*/
/*                  	        	  2009           				*/
/* ------------------------------------------------------------------*/
/*    	      XOOPS - PHP Content Management System    		*/
/*                  Copyright (c) 2000 XOOPS.org        		*/
/*                      <http://www.xoops.org/>          			*/
/* *********************************************/
if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}
$modversion['dirname'] = basename(dirname(__FILE__));
$modversion['name'] = ucfirst(basename(dirname(__FILE__)));
$modversion['version']     = "0.1";
$modversion['releasedate'] = "2009-05-26";
$modversion['status']      = "Alpha 1";
$modversion['description'] = _MI_TWCHAT_DESC;
$modversion['credits']     = "Original Script by Anant Garg (http://anantgarg.com/), Xoops porting by Takeaweb.it";
$modversion['author']      = "Mulassano Francesco - Alessandro Sturniolo - Simon Roberts";
$modversion['help']        = "";
$modversion['license']     = "GNU.";
$modversion['official']    = 0;
$modversion['image']       = "images/tw_chat.png";
$modversion['dirname']     = "chat";

$modversion['author_realname']     = "Francesco Mulassano";
$modversion['author_realname']     = "Alessandro Sturniolo";
$modversion['author_website_url']  = "http://www.takeaweb.it";
$modversion['author_website_name'] = "Soluzioni informatiche";
$modversion['author_email']        = "info@takeaweb.it";
$modversion['demo_site_url']       = "";
$modversion['demo_site_name']      = "";
$modversion['support_site_url']    = "http://www.takeaweb.it";
$modversion['support_site_name']   = "Takeaweb - Soluzioni informatiche";
$modversion['submit_bug']          = "http://www.takeaweb.it/modules/newbb";
$modversion['submit_feature']      = "http://www.takeaweb.it/modules/newbb";

// Developers
$modversion['contributors']['developers'][0]['name']      = "Francesco Mulassano";
$modversion['contributors']['developers'][0]['uname']     = "webmaster";
$modversion['contributors']['developers'][0]['email']     = "info@takeaweb.it";
$modversion['contributors']['developers'][0]['website']   = "http://www.takeaweb.it";

$modversion['contributors']['developers'][1]['name']      = "Alessandro Sturniolo";
$modversion['contributors']['developers'][1]['uname']     = "webmaster";
$modversion['contributors']['developers'][1]['email']     = "alessandro.sturniolo@gmail.com";
$modversion['contributors']['developers'][1]['website']   = "http://www.takeaweb.it";

$modversion['contributors']['developers'][2]['name']      = "Simon Roberts";
$modversion['contributors']['developers'][2]['uname']     = "wishcraft";
$modversion['contributors']['developers'][2]['email']     = "simon@xoops.org";
$modversion['contributors']['developers'][2]['website']   = "http://www.chronolabs.org.au";
// Testers
$modversion['contributors']['testers'][0]['name']         = "Francesco Mulassano";
$modversion['contributors']['testers'][0]['uname']        = "webmaster";
$modversion['contributors']['testers'][0]['email']        = "info@takeaweb.it";
$modversion['contributors']['testers'][0]['website']      = "http://www.takeaweb.it";

// Main
$modversion['hasMain'] = 1;

// Mysql file
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file
$modversion['tables'][0] = "chat";

// Templates
$i = 0;

$i++;
$modversion['templates'][$i]['file'] = 'chat_index.html';
$modversion['templates'][$i]['description'] = 'Remember to include in your theme with <em> <{include file="db:chat_index.html"}></em>';


?>
