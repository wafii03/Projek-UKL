<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="">
                <h1>Login</h1>
                <hr>
                <p>Silahkan Login</p>
                <label for="">Email</label>
                <input type="text" placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" placeholder="Password">
                <button>Login</button>
                <p>
                    <a href="logincontroller.php">Forgot Password?</a>
                </p>
            </form>
</body>

</html>
<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
