<form>
	<table>
	<tr>
		<td>NAMA</td>
		<td><input type="text" name="nama"></td>
	</tr>

	<tr>
		<td>Nilai PWL</td>
		<td><input type="text" name="pwl"></td>
	</tr>
	
	<tr>
		<td>Nilai AI</td>
		<td><input type="text" name="ai"></td>
	</tr>
	
	<tr>
		<td>Nilai SBD</td>
		<td><input type="text" name="sbd"></td>
	</tr>

	<tr>
		<td> <input type="submit" name="submit" value="SUBMIT"> </td>
	</tr>
	</table>
</form>

<?php
	$pwl=["Toni"=>80, "Dewi"=>90, "Nina"=>75, "Reza"=>60];
	$ai=["Toni"=>60, "Dewi"=>70, "Nina"=>95, "Reza"=>50];
	$sbd=["Toni"=>75, "Dewi"=>75, "Nina"=>80, "Reza"=>70];

	$rata_pwl=array_sum($pwl)/count($pwl);
	$rata_ai=array_sum($ai)/count($ai);
	$rata_sbd=array_sum($sbd)/count($sbd);
	printf ("Rata-rata Nilai PWL : %.2f", $rata_pwl);
	echo "<br>";
	printf ("Rata-rata Nilai AI : %.2f", $rata_ai);
	echo "<br>";
	printf ("Rata-rata Nilai SBD : %.2f", $rata_sbd);
	echo "<br>";
	echo "<br>";

	$rata_toni=($pwl['Toni']+$ai['Toni']+$sbd['Toni'])/3;
	printf ("Rata-rata Nilai TONI : %.2f", $rata_toni);
	echo "<br>";
	$rata_dewi=($pwl['Dewi']+$ai['Dewi']+$sbd['Dewi'])/3;
	printf ("Rata-rata Nilai DEWI : %.2f", $rata_dewi);
	echo "<br>";
	$rata_nina=($pwl['Nina']+$ai['Nina']+$sbd['Nina'])/3;
	printf ("Rata-rata Nilai NINA : %.2f", $rata_nina);
	echo "<br>";
	$rata_reza=($pwl['Reza']+$ai['Reza']+$sbd['Reza'])/3;
	printf ("Rata-rata Nilai REZA : %.2f", $rata_reza);
	echo "<br>";
	
?>