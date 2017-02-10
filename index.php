<?php
header("content-type:text/html;charset=utf-8");

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define("SITE_URL","http://127.0.0.1:8080/PHPWebSite/PhotoByHeric/");

define('APP_PATH','./Application/');//应用目录
define('RUNTIME_PATH','./Runtime/');//定义运行时目录

//define('THINK_PATH',"./ThinkPHP/Library/Think/");//Think目录

define("PUBLIC_URL",SITE_URL."Public/"); //public目录

define("HOME_CSS_URL",SITE_URL."Public/Home/css/"); //前台css目录
define("HOME_IMG_URL",SITE_URL."Public/Home/images/"); //前台images目录
define("HOME_JS_URL",SITE_URL."Public/Home/js/"); //前台js目录
define("HOME_ASSETS_URL",SITE_URL."Public/Home/assets/"); //前台assets目录
define("HOME_FONTS_URL",SITE_URL."Public/Home/fonts/"); //前台fonts目录
define("ALBUM_URL",SITE_URL."Public/Album/"); //相册目录

define("ADMIN_LOGIN_URL",SITE_URL."Public/Admin/Login/");//后台登录模块资源目录
define("ADMIN_CSS_URL",SITE_URL."Public/Admin/css/"); //后台css目录
define("ADMIN_IMG_URL",SITE_URL."Public/Admin/images/"); //后台img目录
define("ADMIN_JS_URL",SITE_URL."Public/Admin/js/"); //后台js目录
define("ADMIN_FONT_URL",SITE_URL."Public/Admin/fonts/"); //后台font目录


// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单