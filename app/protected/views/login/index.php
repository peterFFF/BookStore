<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/21
 * Time: 18:50
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>用户登录_新闻视界</title>
    <link href="<?php echo ROOT?>/css/resetLogin.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo ROOT?>/css/layout.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo ROOT?>/css/common.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        .info{
            color:#f00;
            text-align:right;
        }
    </style>
    <script src="<?php echo ROOT?>/assets/jquery/jquery-1.10.0.js"></script>
    <script>
        function checkUser(){
            var userVal=$(".login-input-username").val();
            if(userVal==""){
                $(".login-input-username").focus();
                $(".login-input-username").val("用户名不能为空").addClass("info");
            }
            if(userVal.length>14||userVal.length<3){
                $(".login-input-username").focus();
                $(".login-input-username").val("用户名长度为3~14位字符").addClass("info");
            }
        }
        function checkPassword(){
            var pwdVal=$(".login-input-password").val();
            if(pwdVal==""){
                $(".login-input-password").focus();
                $(".login-input-password").attr("type","text").val("密码不能为空").addClass("info");
            }
            if(pwdVal.length>14||pwdVal.length<3){
                $(".login-input-password").focus();
                $(".login-input-password").attr("type","text").val("密码长度为3~14位字符").addClass("info");
            }
        }
        $(function(){
            $(".login-input-username").blur(function(){
                return checkUser();
            })
            $(".login-input-username").click(function(){
                $(".login-input-username").removeClass("info").val("");
            })
            $(".login-input-password").blur(function(){
                return checkPassword();
            })
            $(".login-input-password").click(function(){
                $(".login-input-password").removeClass("info").val("").attr("type","password");
            })
        })
    </script>
</head>
<body>
<div id="header-wrapper">
    <div class="wrapper">
        <div id="header">
            <div class="side-left logo">
                <a href="#" title="换一个角度看新闻">新闻视界</a>
            </div>
            <div class="side-center page-title"><span>登录</span></div>
            <div class="side-right login-bar"><a href="__APP__/Register/index" >免费注册</a><a href="__APP__" >返回首页</a></div>
        </div>
    </div>
</div>
<div id="login-wrapper">
    <div id="login-main">
        <form action="<?php echo APP?>/Login/login" method="post" id="login-form">
            <h1 class="login-title">用户登录</h1>
            <input type="text" class="login-input-username" name="userName"/><span id="promptUsername"></span>
            <input type="password" class="login-input-password" name="password"/><span id="promptPwd"></span>
            <div class="login-remmber-me"><span><input type="checkbox" name="remember" checked="checked" value="1"/>&nbsp;下次自动登录</span><a href="#">忘记密码</a></div>
            <input type="submit" value="登 录" class="login-submit-button"/>
            <div class="other-login">
                <p>可以使用以下方式登录：</p>
                <ul class="other-login-list clear">
                    <li><a href="#" class="qq" title="QQ登录">QQ登录</a></li>
                    <li><a href="#" class="weibo" title="微博账号登录">微博账号登录</a></li>
                    <li><a href="#" class="baidu" title="百度账号登录">百度账号登录</a></li>
                    <li><a href="#" class="renren" title="人人网账号登录">人人网账号登录</a></li>
                    <li><a href="#" class="weixin" title="微信账号登录">微信账号登录</a></li>
                </ul>
            </div>
        </form>
    </div>
</div>
</body>
</html>

