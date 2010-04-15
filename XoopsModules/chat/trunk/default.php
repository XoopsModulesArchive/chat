<?php
	
	$xoopsOption['pagetype'] = 'chat';
	include '../../mainfile.php';
	$xoopsOption['template_main'] = 'chat_index.html';
	include XOOPS_ROOT_PATH . '/header.php';
	include 'post.loader.chat.php';	
	include XOOPS_ROOT_PATH . '/footer.php';	
	
?>