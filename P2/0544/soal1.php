<?php
	$phi = 3.14;
	$d = 17;
	$r = $d/2;

	function volBola() {
		$GLOBALS['v'] = (4*($GLOBALS['phi']*$GLOBALS['r']*$GLOBALS['r']*$GLOBALS['r'])/3);
	}

	volBola();
	echo "Diameter Bola = $d <br>";
	printf ("Volume Bola = %.2f", $v);
?>