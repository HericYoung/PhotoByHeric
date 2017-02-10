<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Login</title>

    <!--- CSS --->
    <link rel="stylesheet" href="<?php echo (ADMIN_LOGIN_URL); ?>style.css" type="text/css" />


    <!--- Javascript libraries (jQuery and Selectivizr) used for the custom checkbox --->

    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="<?php echo (ADMIN_LOGIN_URL); ?>jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_LOGIN_URL); ?>selectivizr.js"></script>
    <noscript><link rel="stylesheet" href="<?php echo (ADMIN_LOGIN_URL); ?>fallback.css" /></noscript>
    <![endif]-->

</head>

<body>
<div id="container">
    <form action="<?php echo U('Index/login');?>"  method="post">
        <div class="login">LOGIN</div>
        <div class="username-text">Username:</div>
        <div class="password-text">Password:</div>
        <div class="username-field">
            <input type="text" name="username"/>
        </div>
        <div class="password-field">
            <input type="password" name="password"/>
        </div>
        <input type="checkbox" name="remember-me" id="remember-me" /><label for="remember-me">Remember me</label>
        <div class="forgot-usr-pwd">Forgot <a href="#">username</a> or <a href="#">password</a>?</div>
        <input type="submit" name="submit" value="GO" />
    </form>
</div>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript'
                                  charset='gb2312'></script></div>
</body>
</html>