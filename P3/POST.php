<form action="#" method="POST">
	<h2>FORM REGISTER</h2>
	Masukkan Username : <input type="text" name="username" value=""> <br><br>
	Masukkan Email : <input type="email" name="email" value=""> <br><br>
	Masukkan Password : <input type="password" name="password" value=""> <br><br>

	<input type="submit" name="Submit" value="SUBMIT">

</form>
<?php
	if ($_POST) {
		echo "Username : ".$_POST['username']."<br>";
		echo "Email : ".$_POST['email']."<br>";
		echo "Password : ".$_POST['password']."<br>";
	}
?>