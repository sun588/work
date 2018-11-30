<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller {
    function login(){
        if(IS_POST){
            $user = I('post.user');
            $password = I('post.password');
            $model = M('user');
            $rs = $model->where("phone='$user'")->field('id,user,password,salt,nickname,accounttype')->find();
            if($rs['password'] == md5($password . $rs['salt'])){
                $accessToken = md5($rs['id'] . $rs['user'] . $rs['salt']);
                $userInfo = array(
                    'id' => $rs['id'],
                    'nickname' => $rs['nickname'],
                    'accessToken' => $accessToken,
                    'accountType' => $rs['accounttype'],
                );
                session('userInfo',$userInfo);
                $this->success('登录成功',U('Index/index'));
            }else{
                $this->assign('errmsg','用户名或密码错误');
                $this->display();
            }
        }else{
            $this->display();
        }
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
            $password = I('post.password');
            $password1 = I('post.password1');
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $verify = isset($_POST['verify']) ? $_POST['verify'] : '';
            $verifyCodeID = session('verifyCodeID');
            $nickname = I('post,nickname');
            $nowTime = time();

            if( strlen($password) < 6 || strlen($password) > 16 ){
                f_return('4001','密码名必须大于6位小于16位');
                return;
            }
            if( preg_match_all("/[^0-9a-zA-Z_]/",$password) ){
                f_return('4002','密码只能由数字,字母,下划线组成');
                return;
            }
            if( $password != $password1 ){
                f_return('4003','两次输入密码不一致');
                return;
            }

            $model = M('user');
            $rs = $model->where("phone=$phone")->count();
            if($rs > 0){
                f_return('4004','该手机号码已经被注册');
                return;
            }

            $model = M('telverify');
            $rs = $model->where("phone=$phone and id=$verifyCodeID and endtime>$nowTime")->getField('verify');
            if(strlen($verify) != 6 || $rs != $verify){
                f_return('4004','手机验证码不正确');
                return;
            }

            $user = 'p' . time() . $verify;
            $salt = rand(100000,999999);
            $pwd = md5($password . $salt);
            $saveData = array(
                'user' => $user,
                'password' => $pwd,
                'time' => time(),
                'phone' => $phone,
                'nickname' => $nickname,
                'salt' => $salt,

            );
            $model = M('user');
            $rs = $model->add($saveData);
            if($rs){
                session('verifyCodeID','');
                f_return('1','注册成功');
                return;
            }else{
                f_return('4005','注册失败');
                return;
            }
        }else{
            $this->display();
        }
    }

    function businessRegister(){
        if(IS_POST){
            $password = I('post.password');
            $password1 = I('post.password1');
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $verify = isset($_POST['verify']) ? $_POST['verify'] : '';
            $verifyCodeID = session('verifyCodeID');
            $nickname = I('post.nickname');
            $companyname = I('post.companyname');
            $province = I('post.province');
            $city = I('post.city');
            $area = I('post.area');
            $address = I('post.address');
            $email = I('post.email');
            $businesspic = I('post.businesspic');
            $cardpic1 = I('post.cardpic1');
            $cardpic2 = I('post.cardpic2');
            $nowTime = time();

            if( strlen($password) < 6 || strlen($password) > 16 ){
                f_return('4001','密码名必须大于6位小于16位');
                return;
            }
            if( preg_match_all("/[^0-9a-zA-Z_]/",$password) ){
                f_return('4002','密码只能由数字,字母,下划线组成');
                return;
            }
            if( $password != $password1 ){
                f_return('4003','两次输入密码不一致');
                return;
            }
            if($province == '' || $city == '' || $area == '' || $address == ''){
                f_return('4004'.'地址必须填写');
                return;
            }
            if($businesspic == ''){
                f_return('4005','请上传营业执照');
                return;
            }
            if($cardpic1 == '' || $cardpic2 == ''){
                f_return('4006','请上传身份证照');
                return;
            }

            $model = M('user');
            $rs = $model->where("phone=$phone")->count();
            if($rs > 0){
                f_return('4004','该手机号码已经被注册');
                return;
            }

            $model = M('telverify');
            $rs = $model->where("phone=$phone and id=$verifyCodeID and endtime>$nowTime")->getField('verify');
            if(strlen($verify) != 6 || $rs != $verify){
                f_return('4004','手机验证码不正确');
                return;
            }

            $user = 'p' . time() . $verify;
            $salt = rand(100000,999999);
            $pwd = md5($password . $salt);
            $saveData = array(
                'user' => $user,
                'password' => $pwd,
                'time' => time(),
                'phone' => $phone,
                'nickname' => $nickname,
                'companyname' => $companyname,
                'province' => $province,
                'city' => $city,
                'area' => $area,
                'address' => $address,
                'email' => $email,
                'businesspic' => $businesspic,
                'cardpic1' => $cardpic1,
                'cardpic2' => $cardpic2,
                'accounttype' => 2,
                'salt' => $salt,
            );
            $model = M('user');
            $rs = $model->add($saveData);
            if($rs){
                session('verifyCodeID','');
                f_return('1','注册成功');
                return;
            }else{
                f_return('4005','注册失败');
                return;
            }
        }else{
            $this->display();
        }
    }

    /* 密码忘记取回 */
    function retrieve(){
        if(IS_POST){
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $password1 = isset($_POST['password1']) ? $_POST['password1'] : '';
            $verify = isset($_POST['verify']) ? $_POST['verify'] : '';
            $verifyCodeID = session('verifyCodeID');
            $nowTime = time();

            $model = M('user');
            if( 1 != $model->where("phone=$phone")->count() ){
                f_return(4001,'该手机还未注册用户');
                return;
            }
            if( strlen($password) < 6 || strlen($password) > 16 ){
                f_return(4002,'密码必需6到16位之间');
                return;
            }
            if( preg_match_all("/[^0-9a-zA-Z_]/",$password) ){
                f_return(4003,'密码只能由数字,字母,下划线组成');
                return;
            }
            if( $password != $password1 ){
                f_return(4004,'两次输入密码不一致');
                return;
            }

            $model = M('telverify');
            $rs = $model->where("phone=$phone and id=$verifyCodeID and endtime>$nowTime")->getField('verify');
            if(strlen($verify) != 6 || $rs != $verify){
                f_return(4005,'验证码不正确');
                return;
            }


            $salt = rand(100000,999999);
            $pwd = md5($password . $salt);
            $saveData = array(
                'password' => $pwd,
                'salt' => $salt,
            );
            $model = M('user');
            $rs = $model->where("phone=$phone")->save($saveData);
            if($rs){
                session('verifyCodeID','');
                f_return(1,'修改密码成功');
            }else{
                f_return(4006,'修改密码失败');
            }
        }else{
            $this->display();
        }
    }

    function logout(){
        unset($_SESSION['userInfo']);
        $this->success('退出成功',U('Login'));
    }

    function upPic(){
        $path = './Public/BusinessImg/';
        $rs = f_fileUP(C('MAX_FILE_UPLOAD_SIZE'),C('FILE_UPLOAD_TYPE'),$path);
        echo $rs;
    }
}