<form action="#" method="POST">
	<h2>FORM REGISTER</h2>
	Masukkan Username : <input type="text" name="username" value=""> <br><br>
	Masukkan Email : <input type="email" name="email" value=""> <br><br>
	Masukkan Password : <input type="password" name="password" value=""> <br><br>
	Masukkan Program : 
	<input type="radio" name="program" value="reguler">Reguler
	<input type="radio" name="program" value="premium">Premium<br><br>
	<input type="submit" name="Submit" value="SUBMIT">
	<input type="submit" name="ClickMe" value="Click Me">
	<input type="reset" name="Reset" value="RESET">

</form>
<?php
	if (isset($_POST['Submit'])) {
		echo "Username : ".$_POST['username']."<br>";
		echo "Email : ".$_POST['email']."<br>";
		echo "Password : ".$_POST['password']."<br>";
		echo "program : ".$_POST['program']."<br>";
	}
?>