<form action="#" method="GET">
	<h2>FORM REGISTER</h2>
	Masukkan Username : <input type="text" name="username" value=""> <br><br>
	Masukkan Email : <input type="email" name="email" value=""> <br><br>
	Masukkan Password : <input type="password" name="password" value=""> <br><br>

	<input type="submit" name="Submit" value="SUBMIT">

</form>
<?php
	if ($_GET) {
		echo "Username : ".$_GET['username']."<br>";
		echo "Email : ".$_GET['email']."<br>";
		echo "Password : ".$_GET['password']."<br>";
	}
?>