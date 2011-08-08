<?php

// Автор: andrey3761
// Копирайт: xoops.ws

//
include dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'mainfile.php';
// Отключаем дебугер
$GLOBALS['xoopsLogger']->activated = false;
// Заголовок
header('Content-type: application/x-javascript');

$dirname = 'chat';

$js = '';

$js .= '
// Интервал обновления чата
var chat_config_interval = ' . xoops_getModuleOption( 'interval', $dirname ) . ';
';

// ID пользователя
$uid = is_object( $GLOBALS['xoopsUser'] ) ? $GLOBALS['xoopsUser']->getVar('uid') : 0;
$js .= '
// UID текущего пользователя
var chat_config_uid = ' . $uid . ';
';

// Права на удаление сообщений
$groups = is_object( $GLOBALS['xoopsUser'] ) ? $GLOBALS['xoopsUser']->getGroups() : XOOPS_GROUP_ANONYMOUS;
$gperm_handler =& xoops_gethandler('groupperm');
$perm_remove = ( $gperm_handler->checkRight( 'chat_perm', 2, $groups, $GLOBALS['xoopsModule']->getVar('mid') ) ) ? 1 : 0 ;
$js .= '
// Может ли текущий польователь удалять все сообщения
var chat_config_isremove = ' . $perm_remove . ';
';

//
echo $js;

?>