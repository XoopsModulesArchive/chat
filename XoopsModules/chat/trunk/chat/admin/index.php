<?php

// Автор: andrey3761
// Копирайт: xoops.ws

//
include 'header.php';
// Заголовок админки
xoops_cp_header();
// Меню
loadModuleAdminMenu(0, "");

//
$GLOBALS['xoopsTpl']->assign('world', _AM_CHAT_HELLOWORLD);




// Выводим шаблон
$GLOBALS['xoopsTpl']->display("db:chat_admin_index.html");
// Подвал админки
xoops_cp_footer();

?>