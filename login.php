<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Form Login</h2>
    <?php
    $username = "admin";
    $password = "123";
?> 
    <form method="post">
        Username: <input type="text" name="user"><br>
        Password: <input type="password" name="pass"><br>
        <input type="submit" value="Login">
    </form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {        
        if($_POST['user'] == $username AND $_POST['pass'] == $password){
echo '<span style="color:green">User ' .$_POST['user']. ' Berhasil Login</span>';}else{
echo '<span style="color:red">User ' .$_POST['user']. ' Gagal Login</span>';}
}
?>
</body>
</html>