<?php
$body = getBody();
echo $body;
#mail("vonahsen@gmail.com","to rets",$body,"From:barry@vonahsen.com\r\nReply-To:barry@vonahsen.com");

function getBody() {
	$cret = "";
	for($i=1; $i<=5; $i++) {
		$thiscurse = getCurseWord();
		while($cret && stristr($cret,$thiscurse)) {
			$thiscurse = getCurseWord();
		}
		$cret .= $thiscurse . " ";
	}
	
	return $cret;
}

function getCurseWord() {
	$curseArray = array("nahf","nff","Nff Zbaxrl","Nffsnpr","nffubyr","nffjvcr","onfgneq","ovgpu","ohggubyr","ohggjvcr","pbpx","PbpxFhpxre","penc","phag","shpx","shpxre","wvmm","xabo","Zbgure Shpxre","cravf","erpghz","frzra","fuvg","fyhg","fba-bs-n-ovgpu","gvg","gheq","intvan","juber");

	return str_rot13($curseArray[rand(0, count($curseArray)-1)]);
}

define('FOO','bar');
echo FOO;
?>
