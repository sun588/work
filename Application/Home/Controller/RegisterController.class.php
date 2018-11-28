<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller {
    function login(){
        $this->display();
    }

    /* 发送获取验证码 */
    function sendVerifyCode(){
        //接收数据
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        //$retrieve值为1的时候表示是找回密码发送验证码  默认是注册发送验证码
        $retrieve = isset($_POST['retrieve']) ? $_POST['retrieve'] : '';


        //数据校验
        if( strlen($phone) != 11 && !is_numeric($phone) ){
            f_return('4001','手机号码格式不正确');
            return;
        }

        if( 1 > preg_match_all(C('PHONE_PATTERN'),$phone) ){
            f_return('4002','手机号码格式不正确');
            return;
        }

        $model = M('user');
        if($retrieve == 1){
            if( 1 > $model->where("phone=$phone")->count() ){
                f_return('4003','该手机还未注册用户');
                return;
            }
        }else{
            if( 0 < $model->where("phone=$phone")->count() ){
                f_return('4003','该手机号码已经被注册');
                return;
            }
        }

        $model = M('telverify');
        $startTime = time() - 3600;
        if( 5 < $model->where("phone=$phone and sendtime>$startTime")->count() ){
            f_return('4004','该手机号码注册频繁请稍后再试');
            return;
        }

        $ip = $_SERVER['REMOTE_ADDR'];
        if( 10 < $model->where("ip='$ip' and sendtime>$startTime")->count() ){
            f_return('4005','该ip注册频繁请稍后再试');
            return;
        }

        //生成随机码
        $verifyCode = rand(100000,999999);

        //发送至用户手机
        $url = 'http://www.gxt106.com/sms.aspx';
        $userid = C('MSG_UID');
        $account = C('MSG_USER');
        $password = C('MSG_PWD');
        $mobile = $phone;
        $content = str_replace('%verify%',$verifyCode,C('MSG_TEMP'));
        $data = "action=send&userid=$userid&account=$account&password=$password&mobile=$mobile&content=$content&sendTime=&extno=";
        $rs = curlPost($url,$data,false);
        $rs = simplexml_load_string( trim($rs) );
        if($rs->message != 'ok'){
            f_return('4006','验证码发送失败:'.$rs->message);
            return;
        }

        //保存验证码
        $saveData = array(
            'phone' => $phone,
            'ip' => $ip,
            'sendtime' => time(),
            'endtime' => time() + 600,
            'verify' => $verifyCode,
        );
        $rs = $model->add($saveData);
        if($rs > 0){
            session('verifyCodeID',$rs);
            f_return('1','验证码发送成功');
            return;
        }else{
            f_return('4007','保存验证码失败');
            return;
        }
    }

    /* 图形验证码 */
    function verify(){
        import("ORG.Util.Image");
        Image::buildImageVerify();
    }

    /* 注册用户 */
    function register(){
        if(IS_POST){
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $verify = isset($_POST['verify']) ? $_POST['verify'] : '';
            $verifyCodeID = session('verifyCodeID');
            $nowTime = time();

//            if( strlen($pwd1) < 6 || strlen($pwd1) > 16 ){
//                $this->assign('msg','密码必需6到16位之间');
//                $this->display('index');
//                return;
//            }
//            if( preg_match_all("/[^0-9a-zA-Z_]/",$pwd1) ){
//                $this->assign('msg','密码只能由数字,字母,下划线组成');
//                $this->display('index');
//                return;
//            }
//            if( $pwd1 != $pwd2 ){
//                $this->assign('msg','两次输入密码不一致');
//                $this->display('index');
//                return;
//            }

//            $model = M('user');
//            $rs = $model->where("phone=$phone")->count();
//            if($rs > 0){
//                $this->assign('msg','手机号码已经被注册');
//                $this->display('index');
//                return;
//            }

            $model = M('register');
            $rs = $model->where("phone=$phone and id=$verifyCodeID and e_time>$nowTime")->getField('verify');
            if(strlen($verify) != 6 || $rs != $verify){
                $this->assign('msg','验证码不正确');
                $this->display('index');
                return;
            }

            $user = time() . $verify;
            $salt = rand(100000,999999);
            $pwd = md5($pwd1 . $salt);
            $saveData = array(
                'user' => $user,
                'pwd' => $pwd,
                'c_time' => time(),
                'phone' => $phone,
                'salt' => $salt,
            );
            $model = M('user');
            $rs = $model->add($saveData);
            if($rs){
                //注册成功后给用户信息表里生成一条记录
                $model = M('userinfo');
                $saveData = array(
                    'uid' => $rs,
                );
                $model->add($saveData);
                $this->success("注册成功",U('Login/login'));
            }else{
                $this->assign('msg','注册失败');
                $this->display('index');
                return;

            }
        }else{
            $this->display();
        }
    }

    /* 密码忘记取回 */
    function retrieve(){
        if($this->isPost()){
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $pwd1 = isset($_POST['pwd1']) ? $_POST['pwd1'] : '';
            $pwd2 = isset($_POST['pwd2']) ? $_POST['pwd2'] : '';
            $verify = isset($_POST['verify']) ? $_POST['verify'] : '';
            $verifyCodeID = session('verifyCodeID');
            $nowTime = time();

            $model = M('user');
            if( 1 != $model->where("phone=$phone")->count() ){
                $this->assign('msg','该手机还未注册用户');
                $this->display();
                return;
            }
            if( strlen($pwd1) < 6 || strlen($pwd1) > 16 ){
                $this->assign('msg','密码必需6到16位之间');
                $this->display();
                return;
            }
            if( preg_match_all("/[^0-9a-zA-Z_]/",$pwd1) ){
                $this->assign('msg','密码只能由数字,字母,下划线组成');
                $this->display();
                return;
            }
            if( $pwd1 != $pwd2 ){
                $this->assign('msg','两次输入密码不一致');
                $this->display();
                return;
            }

            $model = M('register');
            $rs = $model->where("phone=$phone and id=$verifyCodeID and e_time>$nowTime")->getField('verify');
            if(strlen($verify) != 6 || $rs != $verify){
                $this->assign('msg','验证码不正确');
                $this->display();
                return;
            }


            $salt = rand(100000,999999);
            $pwd = md5($pwd1 . $salt);
            $saveData = array(
                'pwd' => $pwd,
                'salt' => $salt,
            );
            $model = M('user');
            $rs = $model->where("phone=$phone")->save($saveData);
            if($rs){
                $this->success("修改密码成功",U('Login/login'));
            }else{
                $this->assign('msg','修改密码失败');
                $this->display();
                return;
            }
        }else{
            $this->display();
        }
    }
}