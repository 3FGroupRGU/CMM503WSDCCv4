<?php
function load($page='login.php')
{
    $url='http://' .$_SERVER['HTTP_POST'] .dirname($_SERVER['PHP_SELF']);
    $url=rtrim($url,'/||');
    $url .='/'.$page;
    header("location:$url");
    exit();
    function validate($db,$email="",$password="")
    {
        $errors=array();
        if(empty($email))
        {
            $errors[]='Enter your email address.';
        }
        else
        {
            $e=mysqli_num_rows($db,trim($email));
        }
        if(empty($password))
        {
            $errors[]='Enter your password';
        }
        else
        {
            $p=mysqli_real_escape_string($db,trim($password));
        }
        if(empty($errors))
        {
            $q="SELECT userID, username FROM users WHERE email='$e' AND pass=SHA1('$p')";
            $r=mysqli_query($db,$q);
            if(mysqli_num_rows($r)==1)
            {
                $row=mysqli_fetch_array($r, MYSQLI_ASSOC);
                return array(true,$row);
            }
            else
            {
                $errors[]='Email address and passwpord not found.';
            }
            else
            {
                return array(false,$errors);
            }

        }
    }
}
?>
/**
 * Created by PhpStorm.
 * User: HenryRL
 * Date: 24/03/2016
 * Time: 11:38
 */