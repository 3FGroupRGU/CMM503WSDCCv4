<?php
if ($_SERVER ['request_method']== 'POST') {
    include("connect.php");
    include("check.php");
    $errors = array();
    if (empty($_POST ['username'])) {
        $errors [] = 'Enter your Username!';
    } else {
        $username = mysqli_real_escape_string($db, trim($_POST['username']));
    }
    if (empty($_POST['email']))
    {
        $errors []= mysqli_real_escape_string($db,trim($_POST['email']));
    }
    if(!empty($_POST['pass1']!=$_POST['pass2']))
    {
        $errors[]='Passwords do not match!';
    }
    else
    {
        $password=mysqli_real_escape_string($db,trim($_POST['pass1']));
    }}
else
{
    $errors[]='Enter your password!';
}
if(empty($errors))
{
    $q="SELECT userID FROM users WHERE email='Semail'";
    $r=mysqli_query($db,$q);
    if (mysqli_num_rows($r)!=0)
    {
        $errors[]='Email address already registered. <a href="login.php'>
    }
    if(empty($errors))
    {
        $q="INSERT INTO users(username,email,password, tel) VALUES($username, $email, SHA1($password), NOW())";
        $sr=mysqli_query($db,$q);
        if($r)
        {
            echo'<h1>Registered!</h1>
                <p>You are now registered.</p>
                <p><a href="login.php"></a></p>';
        }
        mysqli_close($db);
        exit();
    }
    else
    {
        echo '<h1>ERROR!</h1>
            <p id="err_msg">The following error(s) occurred:<br> for each [$errors as $msg]
            {
                echo "-msg<br>";
            }
            echo "Please try again"</p>';
        mysqli_close ($db);
    }
}
?>
/**
 * Created by PhpStorm.
 * User: HenryRL
 * Date: 24/03/2016
 * Time: 12:11
 */