<form action="#" method="POST">
	<fieldset>
	<legend>Ticket Online</legend>
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

		Jam Keberangkatan : 
		<input type="radio" name="jK" value="8.00">8.00
		<input type="radio" name="jK" value="9.00">9.00 
		<input type="radio" name="jK" value="10.00">10.00 

		Jumlah Penumpang :
		<input type="number" name="jP">

		<input type="submit" name="submit" value="SUBMIT">
		<input type="reset" name="reset" value="RESET">
	</fieldset>	
</form>

<?php
	if (isset($_POST['submit'])) {

		$namaFile = $_FILES['berkas']['name'];
		$namaSementara = $_FILES['berkas']['tmp_name'];

		$tempat = "upload/";
			move_uploaded_file($namaSementara, $tempat.$namaFile);
			
		echo "<img src='".<a href="http://www.amikom.ac.id/public/fotomhs/2016/16_11_0544.jpg"> </a>."/".$namaFile."' height=150 width=150/><br>";
		echo "Nama : ".$_POST['nama']."<br>";
		echo "Alamat : ".$_POST['alamat']."<br>";
		echo "Tempat Lahir : ".$_POST['tmpLahir']."<br>";
		echo "Tanggal Lahir : ".$_POST['tglLahir']."<br>";
		echo "NO. HP : ".$_POST['noHP']."<br>";
		echo "Jenis Kelamin : ".$_POST['jk']."<br>";
		echo "Agama : ".$_POST['agama']."<br>";
		echo "Hoby : ".$_POST['hoby']."<br>";
		
}
	
?>