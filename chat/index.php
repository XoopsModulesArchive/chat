<?php

// Автор: andrey3761
// Копирайт: xoops.ws

// Чат
include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'header.php';

$uid = is_object($GLOBALS['xoopsUser']) ? $GLOBALS['xoopsUser']->getVar('uid') : 0;

// Заголовок
$xoopsOption['xoops_pagetitle']= '';
$xoopsOption['template_main'] = 'chat_index.html';
include $GLOBALS['xoops']->path('header.php');


$xoTheme->addStylesheet(XOOPS_URL . '/modules/chat/css/style.css');
// jQuery
$xoTheme->addScript('browse.php?Frameworks/jquery/jquery.js');
// Конфиг
$xoTheme->addScript(XOOPS_URL . '/modules/chat/config.js.php');
// Скрипт чата
$xoTheme->addScript(XOOPS_URL . '/modules/chat/js/chat.js');
//$xoTheme->addMeta( 'meta', 'keywords', '');
//$xoTheme->addMeta( 'meta', 'description', '');

include $GLOBALS['xoops']->path('footer.php');

?>