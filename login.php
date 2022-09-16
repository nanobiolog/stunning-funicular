<!--create login-->
<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "admin" && $password == "admin"){
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }else{
        echo "Invalid username or password";
    }
}
?>
<!--create login form-->
<form action="" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="submit" value="Login">
</form>
