<?php
include 'mainfile.php';

// Hack by Stefano Silvestrini - www.stefanosilvestrini.com
// 12 gennaio 2008
// Per cortesia non levare i crediti

	$sql = "SELECT * FROM ".$xoopsDB->prefix('online')." ORDER BY online_updated DESC";

	$result = $xoopsDB->query($sql);
	
	if(!$result) {
       echo "Errore: ".mysql_error();
       exit;
       }

	echo"
	<div style='font-size: 11px;'>
	";
	
	$count = 0;

	while($myrow = $xoopsDB->fetchArray($result)) {
	
	if ($myrow['online_uid'] == '0') {
		$username = 'Anonimo';
		} else {
		$username = "<a href='http://www.tuosito.com/userinfo.php?uid=".$myrow['online_uid']."'><b>".$myrow['online_uname']."</b></a>";
		}
		
		if ($count !=0) {$start=', ';}
		
		echo"".$start."".$username."";
		
		$count++;
	
		} // chiudo il while

	echo" (Totale: ".$count.")</div>";
?>
