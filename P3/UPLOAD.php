<form action="#" method="POST" enctype="multipart/form-data">
	<h2>FORM UPLOAD</h2>
	Pilih File : <input type="file" name="file" value=""> <br> <br>
	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="reset" value="RESET">
	
</form>
<?php
	if (isset($_POST['submit'])) {
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";

		$namaFile = $_FILES['berkas']['name'];
		$namaSementara = $_FILES['berkas']['tmp_name'];

		$dirUpload = "D:/16.11.0544/P3/";
		$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

		if($terupload) {
			echo "Upload Berhasil! <br>";
			echo "Link : <a href='".$dirUpload.$namaFile"'>".$namaFile."</a>";
		} else {
			echo "Upload Gagal :<";
		}
	}
?>
