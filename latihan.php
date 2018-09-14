<html>
<head><title>Login</title></head>
<body>
    <form action="" method="POST" name="Email">
    Email : <input type="text" name="Email"><br>
    Password : <input type="password" name="Password"><br>
    <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php
if(isset($_POST['login'])){
    $nama = $_POST['Email'];
    $pass = $_POST['Password'];
    if($nama == "salsa@gmail.com" && $pass == "190418"){
        echo "Login berhasil";
    }
    else{
        echo "Login gagal";
    }
}
?>