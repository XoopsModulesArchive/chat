<?php

// Автор: andrey3761
// Копирайт: xoops.ws

//
require_once "../../../include/cp_header.php";
// Подключаем функции
include '../include/functions.php';
// Объявляем шаблоны (Устарело)
if ( ! isset( $GLOBALS['xoopsTpl'] ) || ! is_object( $GLOBALS['xoopsTpl'] ) ) {
	include_once $GLOBALS['xoops']->path( "/class/template.php" );
	$GLOBALS['xoopsTpl'] = new XoopsTpl();
}
// АдминМеню
include_once $GLOBALS['xoops']->path( "/Frameworks/art/functions.admin.php" );
// Имя папки
$dirmane = 'chat';

?>