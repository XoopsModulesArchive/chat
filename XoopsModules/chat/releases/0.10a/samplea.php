<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />

<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="css/screen_ie.css" />
<![endif]-->
<?php

include "../../mainfile.php";
	global $xoopsConfig, $xoopsUser, $xoopsModule, $xoopsDB, $_SERVER;
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
	
	$sql='SELECT ' .$xoopsDB->prefix('online'). '.*, ' .$xoopsDB->prefix('users'). '.user_avatar FROM ' .$xoopsDB->prefix('users'). ', ' .$xoopsDB->prefix('online'). ' WHERE ' .$xoopsDB->prefix('users'). '.uid = ' .$xoopsDB->prefix('online'). '.online_uid and ' .$xoopsDB->prefix('users'). '.uid <> 0';
	$result = mysql_query($sql);

	
	$count = 0;
		
	if (is_object($xoopsModule)) {
		$online_handler->write($uid, $uname, time(), $xoopsModule->getVar('mid'), $_SERVER['REMOTE_ADDR']);
	} else {
		$online_handler->write($uid, $uname, time(), 0, $_SERVER['REMOTE_ADDR']);
	}	
		
		
		
		echo "<div id='chatlist'>
				<div id='chattitle'>
					<div id='chatuser'>".$uname."</div>
					<div id='closelist'><a href='#' id='close'>X</a></div>
				</div>	
				<ul>";
			 while($myrow = $xoopsDB->fetchArray($result)) {
					
					if($myrow['user_avatar'] == 'blank.gif'){
						$avatar = "images/noavatar.gif"; 
					}
					else{
						//$avatar = $myrow['user_avatar'];
						$avatar = "../../uploads/".$myrow['user_avatar'];
					}
			 
			 
			 
			 
			 
				if ($myrow['online_uname'] != "" && $myrow['online_uname'] != $uname && $uid > 0){
					$link ='<span class="avatar"><img src="'.$avatar.'" alt=""/><li><a href="javascript:void(0)" onclick="javascript:chatWith(\''.$myrow['online_uname'].'\')">'.$myrow['online_uname'].'</a></li>';
					echo $link;
					$count++;
				}
			}
		echo "</ul></div>";
		
		/*echo "<div id='chatlist'><div id='closelist'><a href='#' id='close'>X</a></div><ul>";
			foreach ($onlines as $online){
				if ($online['online_uname'] != "" && $online['online_uname'] != $uname && $uid > 0){
					$link ='<span class="avatar"><img src="'.$online['user_avatar'].'" alt=""/><li><a href="javascript:void(0)" onclick="javascript:chatWith(\''.$online['online_uname'].'\')">'.$online['online_uname'].'</a></li>';
					echo $link;
					$count++;
				}
			}
		echo "</ul></div>";*/
	
?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>
<script type="text/javascript" src="js/jquery.easydrag.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#chatlist').hide();
	$('a').click(function(){
	$('#chatlist').show();
	
});
	
	$('a#close').click(function(){
	$('#chatlist').hide();
	})
	
});
</script>

<div id="chat_bar_wrap">
	<div id="chatbar">
	  <div id="chatbutton"><a href="#" id="click">Chat</a> <?php if ($count > 0) {echo "(".($count).")";} ?></div>
	  <div class="incoming"></div>
	</div>
</div>
