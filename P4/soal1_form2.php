<form method="POST" action="soal1_form3.php">
	<fieldset>
	<legend>Ticket Online</legend>
	<?php
		for($i=1; $i<=$_POST['jP']; $i++) {
			echo "Nama Penumpang : <input type='text' name='nama[]'><br>";

		}
	?>

	<input type="submit" name="submit" value="NEXT">
	<input type="reset" name="reset" value="RESET">

	<input type="hidden" name="tujuan" value="<?php $_POST['tujuan'] ?>">
	<input type="hidden" name="jK" value="<?php $_POST['jK'] ?>">
	</fieldset>	
</form>