<!DOCTYPE html>
<html>
<head>
	<title>login</title>
    <link rel="stylesheet" href="loginnn.css">
</head>
<body>
	<center>
	<div class="container">
        <div class="login">
	<form action="logincontroller.php" method="POST" style="#">
		<h1>Login</h1>
		<hr>
		<br/>
		<label>Username :</label>
		<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
		<br/>
		<br/>
		<label>Password :</label>
		<input type="password" name="password" placeholder="masukkan password" required="">
		<br>
		<br>
		<button type="submit">SUBMIT LOGIN</button>
		<p>
       <a href="chose.html">Buat Akun?</a>
         </p>
	</form>
	<!-- Menampung jika ada pesan -->
	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
	</center>
</body>
</html>