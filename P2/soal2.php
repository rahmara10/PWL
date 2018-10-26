<?php
	$phi = 3.14;
	$d = 17;
	$r = $d/2;
	$t = 25;

	function volTab() {
		$GLOBALS['v'] = 2*$GLOBALS['phi']*$GLOBALS['r']*$GLOBALS['t'];
	}

	volTab();
	echo "Diameter Tabung = $d <br>";
	echo "Tinggi Tabung = $t <br>";
	printf ("Volume Bola = %.2f", $v);
?>