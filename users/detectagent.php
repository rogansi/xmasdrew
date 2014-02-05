<?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
	$iPadAgent = '/ipad|iphone/i';
	$deskChrome = '/chrome/i';
	$deskFox = '/firefox/i';
	$android = '/android/i';
	$agentIdentity;
	if(preg_match($iPadAgent,$useragent)){
		$agentIdentity = "iPad";
	}elseif(preg_match($deskChrome,$useragent)){
		$agentIdentity = "Chrome";
	}elseif(preg_match($deskFox,$useragent)){
		$agentIdentity = "Firefox";
	}elseif(preg_match($android,$useragent)){
		$agentIdentity = "Android";
	}
	echo $agentIdentity;
	echo $useragent;
?>