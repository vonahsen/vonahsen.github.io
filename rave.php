<?php
function randomcolor() {
	return dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15));
}

if(isset($_GET['ms'])) {
	$to = $_GET['ms'];
} else {
	$to = 500;
}
?>
<html>
<head>
<style type="text/css">
body { background-color: #<?= randomcolor(); ?>; margin: 0px; }
p { color: #<?= randomcolor(); ?>; font-size: 24pt; }
</style>
<script type="text/javascript">
onload = window.setTimeout('window.location.reload()',<?= $to; ?>);
</script>
</head>
<body>
<p style='font-size:72pt;font-family:Wingdings;'>L</p>
</body>
</html>
