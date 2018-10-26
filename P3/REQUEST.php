<form action="?action=edit" method="POST">
	<h2>FORM REGISTER</h2>
	Masukkan Username : <input type="text" name="username" value=""> <br><br>
	Masukkan Email : <input type="email" name="email" value=""> <br><br>
	Masukkan Password : <input type="password" name="password" value=""> <br><br>
	<input type="hidden" name="action" value="insert">
	<input type="submit" name="Submit" value="SUBMIT">

</form>
<?php
	if ($_POST) {
		print_r($_GET);
		echo "<br>";
		echo "<br>";
		print_r($_POST);
		echo "<br>";
		echo "<br>";
		print_r($_REQUEST);
	}
?>