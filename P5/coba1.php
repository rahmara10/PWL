<?php
	$fisrtName = array('0' => " Rizka ", '1' => " Rahma ", '2' => " Amalia " );

	echo $fisrtName[0];
	echo $fisrtName[2];
	echo $fisrtName[1];
	echo '<br>';
	echo '<br>';

	$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
	rsort($kendaraan);
	echo '<pre>';
	print_r ($kendaraan);
	echo '<br>';
	echo '<br>';

	$kendaraan1 = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
	asort($kendaraan1);
	echo '<pre>';
	print_r ($kendaraan1);
	echo '<br>';
	echo '<br>';

	$motor=["id"=>123, "merk"=>"vario", "warna"=>"hitam"];
	$numpak=["honda", "yamaha", "suzuki", "viar"];
	$new_numpak=array_slice($numpak, 1, 2);
	$new_motor=array_slice($motor, 2);
	echo count($numpak);
	echo '<br>';
	print_r($new_numpak);
	print_r($new_motor);
	echo '<br>';
	echo '<br>';

	$duit=[5000000,6000000,7000000];
	$jml=array_sum($duit)/count($duit);
	echo $jml;
	echo '<br>';
	echo '<br>';
	
?>