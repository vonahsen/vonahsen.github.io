<html>
<head>
</head>
<body>
<?php $numSeisures = 5; ?>
<?php for ($i=0; $i<$numSeisures; $i++) { ?>
	<?php for ($j=0; $j<$numSeisures; $j++) { ?>
<iframe width="<?= 99/$numSeisures; ?>%" height="<?= 99/$numSeisures; ?>%" frameborder="0" src="rave.php?ms=<?= rand(1,9); ?>00"></iframe>
	<?php } ?>
<?php } ?>
</body>
</html>
