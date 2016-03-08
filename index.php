<!doctype html>
<!--design has been followed from Simpletut.com via https://www.youtube.com/watch?v=Qqcj4nYkcks'-->
<html>
<head>
    <meta charset="utf-8">
    <title>General Bugginess</title>
    <link rel="stylesheet" href="layout.css" type="text/css" />
    <link rel="stylesheet" href="menu.css" type="text/css" />
</head>

<body>
<div id="holder"></div>
<div id="header">
</div>
<div id="NavBar">
    <nav>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="ForgotPassword.php">Forgot Login</a></li>
        </ul>
    </nav>
</div>
<div id="content">
    <div id="pageheading">
        <h1>Welcome</h1>
    </div>
    <div id="contentleft">
        <h2>Welcome to the General Bugginess fault logging page.</h2><br>
        <h6>Before you begin.</h6><br>
        <p>This site is for registered and authorised users only. On this site you can upload your fault logs or enter a new fault manually. The status of which will be assessed and updated by the IT team as they work through their call logs.</p><br>
        <p>Please login or register to continue on this site.</p>
    </div>
    <div id="contentright">
        <div class="loginBox">
            <h3>Login Form</h3>
            <br><br>
            <form method="post" action="login.php">
                <label>Username:</label><br>
                <input type="text" name="username" placeholder="username" /><br><br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="password" />  <br>
                <label>E-mail</label><br>
                <input type="email" name="email" placeholder="e-mail" />
                <br>
                <label>Work No:</label><br>
                <input type="tel" name="telephone" placeholder="Work Telephone" /><br><br>
                <input class="login1" type="submit" name="submit" value="login"/>
            </form>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
    </div>
</div>
<div id="footer"></div>
</body>
</html>

