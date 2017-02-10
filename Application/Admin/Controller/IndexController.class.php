<?php
namespace Admin\Controller;
use Think\Controller;

/*
 * 后台登录页面控制器
 */
class IndexController  extends Controller
{
    public function index(){


        $this->display();
    }

    public function login(){
        if (IS_POST) {
            $username = $_POST['username'];//提取用户名
            $password = $_POST['password']; // 提取密码并进行加密
            //账号匹配
            if ($user = M('admin')->where("username='$username' AND password='$password'")->find()) {
                // 写入原来登陆信息
                //$user_id = $user['user_id'];//提取用户id
                //$last['login_time'] = $user['login_time'] + 1;//登录次数加1
                //$_SESSION['last_login_time'] = $user['last_login_time'];//提取该用户上次登录时间
               // $last['last_login_time'] = date("Y-m-d h:i:s");//记录当前登录时间
                //M('user')->where("user_id=$user_id")->save($last);//修改数据库
               // $_SESSION['user_id'] = $user_id;//写入登陆session
                $_SESSION['username'] = $username;//写入登陆session
                if ($_POST['remember-me']) {
                    //如果用户选择记住登录状态，则将用户id和用户名写入cookie，保存时间为一周
                    //cookie("user_id", $user_id,604800);
                    cookie("username", $username,604800);
                }

                $this->redirect('MainPage/index');//进入应用首页
            }
            else{
                $this->error('登陆失败，用户名或密码错误！');

            }
        }else{
            $this->error('网页出错');
        }
    }
}