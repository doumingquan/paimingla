<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\paiming\public/../application/admin\view\login\login.html";i:1507970570;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>智火后台管理</title>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="__STATIC__/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="__STATIC__/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="__STATIC__/css/demo/nifty-demo.min.css" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="__STATIC__/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">

    <link href="__STATIC__/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="__STATIC__/plugins/pace/pace.min.js"></script>
    <link rel="stylesheet" href="__STATIC__/css/layui.css" media="all"/>

    <!--jQuery [ REQUIRED ]-->
    <script src="__STATIC__/js/jquery-2.2.4.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="__STATIC__/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="__STATIC__/js/nifty.min.js"></script>
    <!--Background Image [ DEMONSTRATION ]-->
    <script src="__STATIC__/js/demo/bg-images.js"></script>
    <link rel="stylesheet" href="../../../../public/static/css/login.css">

</head>

<body>
<div id="container" class="cls-container">

    <!-- BACKGROUND IMAGE -->
    <!--===================================================-->
    <div id="bg-overlay" style="background-image: url('/static/img/bg-img/bg-img-6.jpg');"
         class="bg-img"></div>

    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <div class="mar-ver pad-btm">
                    <h3 class="h4 mar-no">登录</h3>
                    <!--  <p class="text-muted">Sign In to your account</p> -->
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="layui-input" name="username" placeholder="用户名" lay-verify="required"
                               type="text" placeholder="登录账号">
                    </div>
                    <div class="form-group">
                        <input class="layui-input" name="password" placeholder="密码" lay-verify="required"
                               type="password">
                    </div>
                    <div class="layui-form-item form_code">
                        <input class="layui-input" name="code" placeholder="验证码" lay-verify="required" type="text">
                        <div class="form-group"><img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()" width="250" height="45"></div>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">登录</button>
                </form>
            </div>

            <div class="pad-all">
                <!-- <a href="pages-password-reminder.html" class="btn-link mar-rgt">Forgot password ?</a>
                <a href="pages-register.html" class="btn-link mar-lft">Create a new account</a> -->

                <div class="media pad-top bord-top">
                    <div class="pull-right">
                        <a href="#" class="pad-rgt"></a>
                        <a href="#" class="pad-rgt"></a>
                        <a href="#" class="pad-rgt"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
</body>
</html>
