<?php

	error_reporting(E_ALL);
	global $xoopsOption, $xoopsConfig, $xoopsUser, $xoopsModule, $xoopsDB, $xoopsTpl, $_SERVER;
	$online_handler =& xoops_gethandler('online');
	$onlines =& $online_handler->getAll();

	if (is_object($xoopsUser)) {
			$uid = $xoopsUser->getVar('uid');
			$uname = $xoopsUser->getVar('uname');
			
		} else {
			$uid = 0;
			$uname = '';
			
		}

	$_SESSION['username'] = $uname;
	$xoopsTpl->assign('username', $uname);
		
	$sql='SELECT ' .$xoopsDB->prefix('online'). '.*, ' .$xoopsDB->prefix('users'). '.user_avatar FROM ' .$xoopsDB->prefix('users'). ', ' .$xoopsDB->prefix('online'). ' WHERE ' .$xoopsDB->prefix('users'). '.uid = ' .$xoopsDB->prefix('online'). '.online_uid and ' .$xoopsDB->prefix('users'). '.uid <> 0';
	$result = mysql_query($sql);

	
	$count = 0;
		
	if (is_object($xoopsModule)) {
		$online_handler->write($uid, $uname, time(), $xoopsModule->getVar('mid'), $_SERVER['REMOTE_ADDR']);
	} else {
		$online_handler->write($uid, $uname, time(), 0, $_SERVER['REMOTE_ADDR']);
	}	
		
		
	 while($myrow = $xoopsDB->fetchArray($result)) {
			
			if($myrow['user_avatar'] == 'blank.gif'||empty($myrow['user_avatar'])){
				$user_image = XOOPS_URL."/modules/chat/images/noavatar.gif"; 
			}
			else{
				//$avatar = $myrow['user_avatar'];
				$user_image = XOOPS_URL."/uploads/".$myrow['user_avatar'];
			}
	 
	 
		if ($myrow['online_uname'] != "" && $myrow['online_uname'] != $uname && $uid > 0){
		    $chatusers[] = array('image' => $user_image, 'uname' => $myrow['online_uname'], 'prettyname' => ucfirst($myrow['online_uname']));
			$count++;
		}

	}
	
	print_r($chatusers);	
	
	$xoTheme = & $xoopsThemeFactory->createInstance(array(
        'contentTemplate' => @$xoopsOption['template_main']));
		
	$content = file_get_contents(XOOPS_ROOT_PATH."/modules/chat/js/chat.js");
	
	$xoTheme->addScript("","",str_replace('%%username%%', $uname,str_replace('http://127.0.0.1/xoops233', XOOPS_URL, $content)));
	$xoTheme->addScript(XOOPS_URL."/modules/chat/js/jquery.easydrag.js");
	$xoTheme->addScript(XOOPS_URL."/modules/chat/js/jquery.js");
	
	$xoTheme->addStylesheet(XOOPS_URL."/modules/chat/css/screen.css");
	
	$xoTheme->template->assign('chatusers', ($chatusers));
	$xoTheme->template->assign('chatcount', $count);
?>
