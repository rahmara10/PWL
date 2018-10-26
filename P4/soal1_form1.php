<form method="POST" action="soal1_form2.php">
	<fieldset>
	<legend>Ticket Online</legend>
		<table>
		<tr>
		<td> Tujuan : </td> 
		<td>
		<select name="tujuan">
			<option value="" disabled selected>Pilih</option>			
			<option value="JKT-SMG">Jakarta-Semarang</option>
			<option value="YK-SL">Yogyakarta-Solo</option>
			<option value="SMG-SL">Semarang-Solo</option>
		</select> <br>
		</td>
		</tr>

		<tr>
		<td> Jam Keberangkatan : </td>
		<td> 
		<input type="radio" name="jK" value="8.00">8.00
		<input type="radio" name="jK" value="9.00">9.00 
		<input type="radio" name="jK" value="10.00">10.00 
		</td>
		</tr>

		<tr>
		<td> Jumlah Penumpang : </td>
		<td>
		<input type="number" name="jP">
		</td>
		</tr>

		<tr>
		<td> <input type="submit" name="submit" value="NEXT"> 
		<input type="reset" name="reset" value="RESET"> </td>
		</tr>

		</table>
	</fieldset>	
</form>
