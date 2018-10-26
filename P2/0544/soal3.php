<?php
	$bakso = 12000;
	$soto = 9000;
	$teh = 2000;
	$jeruk = 3000;

	function tot1() {
		$GLOBALS['hasil1'] = (2*$GLOBALS['bakso'])+$GLOBALS['soto']+$GLOBALS['teh']+(3*$GLOBALS['jeruk']);
	} 

	function tot2() {
		$GLOBALS['hasil2'] = $GLOBALS['bakso']+$GLOBALS['soto']+(2*$GLOBALS['teh']);
	}

	echo "Bakso = 2 <br>";
	echo "Soto = 1 <br>";
	echo "Teh = 1 <br>";
	echo "Jeruk = 3<br>";
	tot1();
	printf ("Total Pembelian 1 = $hasil1 <br>");
	echo "<br> Bakso = 1 <br>";
	echo "Soto = 1 <br>";
	echo "Teh = 2 <br>";
	tot2();
	printf ("Total Pembelian 2 = $hasil2 <br>");
?>