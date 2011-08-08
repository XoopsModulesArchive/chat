<?php
/*
 *
 *
 *
 *
 *
 *
 */
 
include dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'mainfile.php';
include_once $GLOBALS['xoops']->path('modules/chat/include/functions.php');
// Проверка, есть ли доступ к чату
if( !is_object($GLOBALS['xoopsUser']) ) redirect_header(XOOPS_URL, 3, _MD_CHAT_ACCESSONLYUSERS);

?>