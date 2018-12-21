<?php
namespace Home\Controller;
use Think\Controller;
class PayController extends Controller {
    public function aliPay($out_trade_no,$subject,$total_amount,$body){
        vendor('alipay.AopSdk');
        $aop = new \AopClient();
        //$aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do'; 正式环境
        $aop->gatewayUrl = 'https://openapi.alipaydev.com/gateway.do';  //沙盒
        $aop->appId = '2016091800542035';
        $aop->rsaPrivateKey = 'MIIEpgIBAAKCAQEA6WUUWexXcyJuxEGZLsR8yYRo/28qRb15FT9zogYSeRxPUANjHWEFm3LqZWdVVk3HJfGoSG6arPVbWCF1ZK3R+w6H12/auhVXFhwtqHC3sXe2/hqcUheIVnsF+x6mQH64Tfss7ob45JOL7rsM+IyX+OcmR/UySWc09krIYV8J6iESkexO/lwPL/XDg/zu5Z4JcBsTUaRWuh3kF1dPiB8JPZo4c5/tlgJuGtwguRO88FT/hH1biWCOKHgMlBc9wVAZhUwuF1LlA5mJeYDCyyniJd+OkXlBOIm17LLMj8yvIqyFXNXHjXgW4m9yagDEggeT7h9+6YBn0AfyprJ9ouDDiwIDAQABAoIBAQDNafkPa8NLwfJbKKD5WFW7xp3isqQx3SDEYqQS5eU8Un47nb+OC+YzemBx/xBMdQfhjV7e4PmhYBCU8F2xzooQvCkyo2+Od1m+S+6jYRFLUGHuIt2SIsQL2RraeY85FE6B058oEALeqj1uT5KK7rKSjl5S1qr7j6o9WnQhvtOrCuItOfJMYxa6fdg7jgmE4hJBSWeZlX4l9A5jB6Y+3tcWjHFQ6b4UuXLKIw5F6SJJXkaf4BWhXZd514UPSQUuGXAiVG+alEysVrFXqUw3g5hcAQuqn9HFVM64lcOYnqZrs6hQDmOaT9bvEeIHsxDKmsOcTOYrG/WYUu6MzFcuRcOBAoGBAPtZ4JWg/IXP2kk9YkqsGcAxWIcnbBLgBIfRtaX8ZOE7xIdohLZxjUhHcK+JZcBAHXALOX8m1nB5d3CfH03Z+PRDyggFdn0+i82Cgo4JaF8Nfpu261fv20NK4wdw0hZYg/GLhSOorfGmtL0f02t719KOYewDuJJkJP4vzk6bgvWVAoGBAO22LmFaJ1oXgyTOWiPACLFVpS4PY9UXumXBl63rbe710WVbFpqjQKLc6NAXE5HNr0mbCYkChC7DvhNMduM7WrQ5CaHHI3TnetHYDiqrY0dyT02yqlUO2Ru5cFifASJdrX6139ssfzjEP0iZHtLSJ3RvpSJzA9YKofKwt9qwmkyfAoGBAIjdaeNQI/EhOzWCTVFn4SW8OP5vQvQMM6tZT9YwVyYmC1/IU+ucbVgcPon3AQbsYpsuIYLRPRdFrPoQS1VzCZLIjuxLPTf5pNqk5D4/dSu9B2H2+rOJkhVUY8cbceplDIOsezTtlrntEqGhANiYOO8YRM3lQM3F5jbbBTXcjDT5AoGBAMWDGGp/dC8hVjBg3PjTeOWQGh15YCQRASnHf3ZdJgzlZ0VmOBPpDa3FDBTK99GwK7NnBLc4xgftUKPMZwRLrwQMWHp5cnaSV7TAZpUBrw4QZuBSUcE3AyJMJJMeGt0pJR0hlY0RHexW85Yo1DmrsGjI01caZdeVIhb6yukE0FBVAoGBAOf+mAzWiZOwoq4O29XHuS2cG4pP9WGbdcB2myzVwgTbcuDg2Ihblu6EbkQ2mYyDi8rHL1j1nxB33JW8vcpff/nC0NEyUfpwWElD1cyecStH2Wdi7xxON3zbnM9eRmlP15jksyiLtEkd2onwlZPeqFgwM2S49TVRBa+5rkAwzn07';
        $aop->apiVersion = '1.0';
        $aop->signType = 'RSA2';
        $aop->postCharset= 'utf-8';
        $aop->format='json';
        $request = new \AlipayTradePagePayRequest();
        $request->setReturnUrl('http://www.jingjiamm.com/index.php/Home/Pay/aliPayReturn');
        $request->setNotifyUrl('http://www.jingjiamm.com/index.php/Home/Pay/aliPayNotify');
        $request->setBizContent('{"product_code":"FAST_INSTANT_TRADE_PAY","out_trade_no":"' . $out_trade_no . '","subject":"' . $subject . '","total_amount":"' . $total_amount . '","body":"'. $body .'"}');

        $result = $aop->pageExecute ($request);

        echo $result;
    }

    public function aliPayNotify(){
        vendor('alipay.pagepay.service.AlipayTradeService');
        $config = array(
            'gatewayUrl' => 'https://openapi.alipaydev.com/gateway.do',
            'app_id' => '2016091800542035',
            'merchant_private_key' => 'MIIEpgIBAAKCAQEA6WUUWexXcyJuxEGZLsR8yYRo/28qRb15FT9zogYSeRxPUANjHWEFm3LqZWdVVk3HJfGoSG6arPVbWCF1ZK3R+w6H12/auhVXFhwtqHC3sXe2/hqcUheIVnsF+x6mQH64Tfss7ob45JOL7rsM+IyX+OcmR/UySWc09krIYV8J6iESkexO/lwPL/XDg/zu5Z4JcBsTUaRWuh3kF1dPiB8JPZo4c5/tlgJuGtwguRO88FT/hH1biWCOKHgMlBc9wVAZhUwuF1LlA5mJeYDCyyniJd+OkXlBOIm17LLMj8yvIqyFXNXHjXgW4m9yagDEggeT7h9+6YBn0AfyprJ9ouDDiwIDAQABAoIBAQDNafkPa8NLwfJbKKD5WFW7xp3isqQx3SDEYqQS5eU8Un47nb+OC+YzemBx/xBMdQfhjV7e4PmhYBCU8F2xzooQvCkyo2+Od1m+S+6jYRFLUGHuIt2SIsQL2RraeY85FE6B058oEALeqj1uT5KK7rKSjl5S1qr7j6o9WnQhvtOrCuItOfJMYxa6fdg7jgmE4hJBSWeZlX4l9A5jB6Y+3tcWjHFQ6b4UuXLKIw5F6SJJXkaf4BWhXZd514UPSQUuGXAiVG+alEysVrFXqUw3g5hcAQuqn9HFVM64lcOYnqZrs6hQDmOaT9bvEeIHsxDKmsOcTOYrG/WYUu6MzFcuRcOBAoGBAPtZ4JWg/IXP2kk9YkqsGcAxWIcnbBLgBIfRtaX8ZOE7xIdohLZxjUhHcK+JZcBAHXALOX8m1nB5d3CfH03Z+PRDyggFdn0+i82Cgo4JaF8Nfpu261fv20NK4wdw0hZYg/GLhSOorfGmtL0f02t719KOYewDuJJkJP4vzk6bgvWVAoGBAO22LmFaJ1oXgyTOWiPACLFVpS4PY9UXumXBl63rbe710WVbFpqjQKLc6NAXE5HNr0mbCYkChC7DvhNMduM7WrQ5CaHHI3TnetHYDiqrY0dyT02yqlUO2Ru5cFifASJdrX6139ssfzjEP0iZHtLSJ3RvpSJzA9YKofKwt9qwmkyfAoGBAIjdaeNQI/EhOzWCTVFn4SW8OP5vQvQMM6tZT9YwVyYmC1/IU+ucbVgcPon3AQbsYpsuIYLRPRdFrPoQS1VzCZLIjuxLPTf5pNqk5D4/dSu9B2H2+rOJkhVUY8cbceplDIOsezTtlrntEqGhANiYOO8YRM3lQM3F5jbbBTXcjDT5AoGBAMWDGGp/dC8hVjBg3PjTeOWQGh15YCQRASnHf3ZdJgzlZ0VmOBPpDa3FDBTK99GwK7NnBLc4xgftUKPMZwRLrwQMWHp5cnaSV7TAZpUBrw4QZuBSUcE3AyJMJJMeGt0pJR0hlY0RHexW85Yo1DmrsGjI01caZdeVIhb6yukE0FBVAoGBAOf+mAzWiZOwoq4O29XHuS2cG4pP9WGbdcB2myzVwgTbcuDg2Ihblu6EbkQ2mYyDi8rHL1j1nxB33JW8vcpff/nC0NEyUfpwWElD1cyecStH2Wdi7xxON3zbnM9eRmlP15jksyiLtEkd2onwlZPeqFgwM2S49TVRBa+5rkAwzn07',
            'alipay_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyDn7DlXRBl/XL7UHIT5DzKJYA3UoW5vY/RlFjD9zdZKxowKWWCzYPdR7FagCmo89K3S2AiLPkThHlb4gHg/5nn+W3iqxzi2+MxKvtXgQkuiFosVKX82tCeO7wKdNKf2YrhR8nEfNHd2Mvu70+/FvQRHlL8mPmueKSceJWqCLLJ23sTpfw8n9s6kGG4vMyCZpHIPNga6eF9yBSRXTGWQoq22vLNgBNziDtu9tFvnnbxqb8DXHBz9ZxwBsVRYQgegTrNyK7qsmjdVkojCFRBjg8mlnAAkbtFxUKOSyfl3e9nc677MjUgHl+aC0sQGYrLBp5zbMBu5akmOSQD+F69ZHswIDAQAB',
            'charset' => 'utf-8',
            'sign_type' => 'RSA2',
        );
        $arr=$_POST;
        $alipaySevice = new \AlipayTradeService($config);
        $alipaySevice->writeLog(var_export($_POST,true));
        $result = $alipaySevice->check($arr);

        if($result) {
            //错误记录
            $errMsg = array();

            //商户订单号
            $out_trade_no = $_POST['out_trade_no'];

            //支付宝交易号
            $trade_no = $_POST['trade_no'];

            //交易状态
            $trade_status = $_POST['trade_status'];

            //交易金额
            $total_amount = $_POST['total_amount'];

            //app_id
            $app_id = $_POST['app_id'];

            if($_POST['trade_status'] == 'TRADE_FINISHED') {
                /*校验支付金额*/
                $model = M('orders');
                $total = $model->where("outTradeNo=$out_trade_no")->count('total');
                if($total != $total_amount){
                    $errMsg[] = "订单号:$out_trade_no,需要支付金额$total,实际支付金额$total_amount,支付金额不正确";
                }

                /*校验商户ID*/
                if($app_id != $config['app_id']){
                    $errMsg[] = "订单号:$out_trade_no,支付商户ID：$app_id,商户ID不正确";
                }

                $saveData = array(
                    'paystate' => 2,
                    'tradeNo' => $trade_no,
                );

                /*修改订单状态为已支付*/
                if(!$model->where("outTradeNo=$out_trade_no")->save($saveData)){
                    $errMsg[] = "订单号:$out_trade_no,修改交易状态失败";
                }
            }
            else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
                /*校验支付金额*/
                $model = M('orders');
                $total = $model->where("outTradeNo=$out_trade_no")->count('total');
                if($total != $total_amount){
                    $errMsg[] = "订单号:$out_trade_no,需要支付金额$total,实际支付金额$total_amount,支付金额不正确";
                }

                /*校验商户ID*/
                if($app_id != $config['app_id']){
                    $errMsg[] = "订单号:$out_trade_no,支付商户ID：$app_id,商户ID不正确";
                }

                $saveData = array(
                    'paystate' => 2,
                    'tradeNo' => $trade_no,
                );

                /*修改订单状态为已支付*/
                if(!$model->where("outTradeNo=$out_trade_no")->save($saveData)){
                    $errMsg[] = "订单号:$out_trade_no,修改交易状态失败";
                }
            }
            else{
                $errMsg[] = "订单号:$out_trade_no,订单状态错误:" . $_POST['trade_status'];
            }
            //错误记录
            foreach ($errMsg as $v){
                $savePath = './Public/TradeLog';
                f_saveLog($v,$savePath);
            }

            echo "success";	//请不要修改或删除
        }else {
            //验证失败
            $alipaySevice->writeLog('验签失败:' . var_export($_POST,true));
            echo "fail";
        }
    }

    public function aliPayReturn(){
        vendor('alipay.pagepay.service.AlipayTradeService');
        $config = array(
            'gatewayUrl' => 'https://openapi.alipaydev.com/gateway.do',
            'app_id' => '2016091800542035',
            'merchant_private_key' => 'MIIEpgIBAAKCAQEA6WUUWexXcyJuxEGZLsR8yYRo/28qRb15FT9zogYSeRxPUANjHWEFm3LqZWdVVk3HJfGoSG6arPVbWCF1ZK3R+w6H12/auhVXFhwtqHC3sXe2/hqcUheIVnsF+x6mQH64Tfss7ob45JOL7rsM+IyX+OcmR/UySWc09krIYV8J6iESkexO/lwPL/XDg/zu5Z4JcBsTUaRWuh3kF1dPiB8JPZo4c5/tlgJuGtwguRO88FT/hH1biWCOKHgMlBc9wVAZhUwuF1LlA5mJeYDCyyniJd+OkXlBOIm17LLMj8yvIqyFXNXHjXgW4m9yagDEggeT7h9+6YBn0AfyprJ9ouDDiwIDAQABAoIBAQDNafkPa8NLwfJbKKD5WFW7xp3isqQx3SDEYqQS5eU8Un47nb+OC+YzemBx/xBMdQfhjV7e4PmhYBCU8F2xzooQvCkyo2+Od1m+S+6jYRFLUGHuIt2SIsQL2RraeY85FE6B058oEALeqj1uT5KK7rKSjl5S1qr7j6o9WnQhvtOrCuItOfJMYxa6fdg7jgmE4hJBSWeZlX4l9A5jB6Y+3tcWjHFQ6b4UuXLKIw5F6SJJXkaf4BWhXZd514UPSQUuGXAiVG+alEysVrFXqUw3g5hcAQuqn9HFVM64lcOYnqZrs6hQDmOaT9bvEeIHsxDKmsOcTOYrG/WYUu6MzFcuRcOBAoGBAPtZ4JWg/IXP2kk9YkqsGcAxWIcnbBLgBIfRtaX8ZOE7xIdohLZxjUhHcK+JZcBAHXALOX8m1nB5d3CfH03Z+PRDyggFdn0+i82Cgo4JaF8Nfpu261fv20NK4wdw0hZYg/GLhSOorfGmtL0f02t719KOYewDuJJkJP4vzk6bgvWVAoGBAO22LmFaJ1oXgyTOWiPACLFVpS4PY9UXumXBl63rbe710WVbFpqjQKLc6NAXE5HNr0mbCYkChC7DvhNMduM7WrQ5CaHHI3TnetHYDiqrY0dyT02yqlUO2Ru5cFifASJdrX6139ssfzjEP0iZHtLSJ3RvpSJzA9YKofKwt9qwmkyfAoGBAIjdaeNQI/EhOzWCTVFn4SW8OP5vQvQMM6tZT9YwVyYmC1/IU+ucbVgcPon3AQbsYpsuIYLRPRdFrPoQS1VzCZLIjuxLPTf5pNqk5D4/dSu9B2H2+rOJkhVUY8cbceplDIOsezTtlrntEqGhANiYOO8YRM3lQM3F5jbbBTXcjDT5AoGBAMWDGGp/dC8hVjBg3PjTeOWQGh15YCQRASnHf3ZdJgzlZ0VmOBPpDa3FDBTK99GwK7NnBLc4xgftUKPMZwRLrwQMWHp5cnaSV7TAZpUBrw4QZuBSUcE3AyJMJJMeGt0pJR0hlY0RHexW85Yo1DmrsGjI01caZdeVIhb6yukE0FBVAoGBAOf+mAzWiZOwoq4O29XHuS2cG4pP9WGbdcB2myzVwgTbcuDg2Ihblu6EbkQ2mYyDi8rHL1j1nxB33JW8vcpff/nC0NEyUfpwWElD1cyecStH2Wdi7xxON3zbnM9eRmlP15jksyiLtEkd2onwlZPeqFgwM2S49TVRBa+5rkAwzn07',
            'alipay_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyDn7DlXRBl/XL7UHIT5DzKJYA3UoW5vY/RlFjD9zdZKxowKWWCzYPdR7FagCmo89K3S2AiLPkThHlb4gHg/5nn+W3iqxzi2+MxKvtXgQkuiFosVKX82tCeO7wKdNKf2YrhR8nEfNHd2Mvu70+/FvQRHlL8mPmueKSceJWqCLLJ23sTpfw8n9s6kGG4vMyCZpHIPNga6eF9yBSRXTGWQoq22vLNgBNziDtu9tFvnnbxqb8DXHBz9ZxwBsVRYQgegTrNyK7qsmjdVkojCFRBjg8mlnAAkbtFxUKOSyfl3e9nc677MjUgHl+aC0sQGYrLBp5zbMBu5akmOSQD+F69ZHswIDAQAB',
            'charset' => 'utf-8',
            'sign_type' => 'RSA2',
        );

        $arr=$_GET;
        $alipaySevice = new \AlipayTradeService($config);
        $result = $alipaySevice->check($arr);

        /* 实际验证过程建议商户添加以下校验。
        1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号，
        2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额），
        3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）
        4、验证app_id是否为该商户本身。
        */
        if($result) {//验证成功
            //错误信息
            $errMsg = array();

            //商户订单号
            $out_trade_no = htmlspecialchars($_GET['out_trade_no']);

            //支付宝交易号
            $trade_no = htmlspecialchars($_GET['trade_no']);

            $total_amount = htmlspecialchars($_GET['total_amount']);

            $app_id = htmlspecialchars($_GET['app_id']);

            /*校验支付金额*/
            $model = M('orders');
            $total = $model->where("outTradeNo=$out_trade_no")->count('total');
            if($total != $total_amount){
                $errMsg[] = "需要支付金额$total,实际支付金额$total_amount,支付金额不正确";
            }

            if($app_id != $config['app_id']){
                $errMsg[] = "支付商户ID：$app_id,商户ID不正确";
            }
            echo "支付成功，支付宝交易号：".$trade_no;
        }
        else {
            //验证失败
            echo "验证失败";
        }
    }


    //================================================================================================================
                                               //微信支付
    //================================================================================================================
    /*数组转xml格式*/
    public function ToXml($data=array()){
        if(!is_array($data) || count($data) <= 0) {
            return '数组异常';
        }
        $xml = '<xml>';
        foreach ($data as $key=>$val) {
            if (is_numeric($val)){
                $xml.="<".$key.">".$val."</".$key.">";
            }else{
                $xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
            }
        }
        $xml.="</xml>";
        return $xml;
    }

    /*xml数据转数组*/
    public function FromXml($xml){
        if(!$xml){
            echo "xml数据异常！";
        }
        //将XML转为array //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $data = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $data;
    }

    /*生成随即字符串*/
    function rand_code(){
        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';//62个字符
        $str = str_shuffle($str);
        $str = substr($str,0,32);
        return $str;
    }

    /*生存签名*/
    private function getSign($params) {
        ksort($params); //将参数数组按照参数名ASCII码从小到大排序
        foreach ($params as $key => $item) {
            if (!empty($item)) { //剔除参数值为空的参数
                $newArr[] = $key.'='.$item; // 整合新的参数数组
            }
        }
        $stringA = implode("&", $newArr); //使用 & 符号连接参数
        $stringSignTemp = $stringA."&key=". C('WX_KEY'); //拼接key // key是在商户平台API安全里自己设置的
        $stringSignTemp = MD5($stringSignTemp); //将字符串进行MD5加密
        $sign = strtoupper($stringSignTemp); //将所有字符转换为大写
        return $sign;
    }

    public function wx_pay($out_trade_no,$total_fee,$body,$notify_url,$trade_type = 'APP') {
        $nonce_str = $this->rand_code(); //调用随机字符串生成方法获取随机字符串
        $data['appid'] =C('APP_ID'); //appid
        $data['mch_id'] = C('MCH_ID') ; //商户号
        $data['body'] = $body;
        $data['spbill_create_ip'] = get_client_ip(); //ip地址
        $data['total_fee'] = $total_fee; //金额
        $data['out_trade_no'] = $out_trade_no; //商户订单号,不能重复
        $data['nonce_str'] = $nonce_str; //随机字符串
        $data['notify_url'] = $notify_url;//'http://huoxingren.user.wzsite.com/index.php/Pay/wx_notify'; //回调地址,用户接收支付后的通知,必须为能直接访问的网址,不能跟参数
        $data['trade_type'] = $trade_type; //支付方式 注意：以上几个参数是追加到$data中的，$data中应该同时包含开发文档中要求必填的剔除sign以外的所有数据
        $data['sign'] = $this->getSign($data); //获取签名
        $xml = $this->ToXml($data); //数组转xml //curl 传递给微信方
        //f_dump($xml);exit;
        $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
        $data = curlPost($url,$xml,false);
        //f_dump($data);exit;
        if($data){
            $re = $this->FromXml($data);
            if($re['return_code'] != 'SUCCESS'){
                return f_return("4001",'预支付申请失败:' . $re['return_msg'],'',false);
            }else{
                /*H5支付*/
                if($re['trade_type'] == 'MWEB'){
                    return f_return('1','签名成功',$re['mweb_url'],false);
                }

                //NATIVE 支付方式
                if($re['trade_type'] == 'NATIVE'){
                    return f_return('1','签名成功',$re['code_url'],false);
                }

                //APP支付 接收微信返回的数据,传给APP!
                if($re['trade_type'] == 'APP'){
                    $arr =array( 'prepayid' =>$re['prepay_id'], 'appid' => C('APP_ID'), 'partnerid' => C('MCH_ID'), 'package' => 'Sign=WXPay', 'noncestr' => $nonce_str, 'timestamp' =>time(), );
                    //第二次生成签名
                    $sign = $this->getSign($arr);
                    $arr['sign'] = $sign;
                    return f_return('1','签名成功',$arr,false);
                }
            }
        }else{
            return f_return('201',"curl错误",'',false);
        }
    }

    /*回调处理*/
    function wx_notify(){
        //接收微信返回的数据数据,返回的xml格式
        $xmlData = file_get_contents('php://input');

        //将xml格式转换为数组
        $data = $this->FromXml($xmlData);

        //用日志记录检查数据是否接受成功，验证成功一次之后，可删除。
        $savePath = './Public/TradeLog';
        f_saveLog(var_export($data,true),$savePath);

        //为了防止假数据，验证签名是否和返回的一样。 //记录一下，返回回来的签名，生成签名的时候，必须剔除sign字段。
        $sign = $data['sign'];
        unset($data['sign']);

        if($sign == $this->getSign($data)){
            //错误记录
            $errMsg = array();

            //商户订单号
            $out_trade_no = $data['out_trade_no'];

            //微信支付订单号
            $trade_no = $_POST['transaction_id'];

            //交易金额
            $total_amount = $_POST['total_fee'];

            //微信商户号
            $mch_id = $_POST['mch_id'];

            //签名验证成功后，判断返回微信返回的result_code
            if ($data['result_code'] == 'SUCCESS') {

                /*校验支付金额*/
                $model = M('orders');
                $total = $model->where("outTradeNo=$out_trade_no")->count('total');
                if( ($total * 100) != $total_amount ){
                    $errMsg[] = "订单号:$out_trade_no,需要支付金额$total,实际支付金额$total_amount,支付金额不正确";
                }

                /*校验商户ID*/
                if($mch_id != ''){
                    $errMsg[] = "订单号:$out_trade_no,支付商户ID：$mch_id,商户ID不正确";
                }

                $saveData = array(
                    'paystate' => 2,
                    'tradeNo' => $trade_no,
                );

                /*修改订单状态为已支付*/
                if(!$model->where("outTradeNo=$out_trade_no")->save($saveData)){
                    $errMsg[] = "订单号:$out_trade_no,修改交易状态失败";
                }
            }
            else{
                $errMsg[] = "订单号:$out_trade_no,订单状态错误:" . $data['return_msg'];
            }

            //错误记录
            foreach ($errMsg as $v){
                $savePath = './Public/TradeLog';
                f_saveLog($v,$savePath);
            }

            echo '<xml>
				  <return_code><![CDATA[SUCCESS]]></return_code>
				  <return_msg><![CDATA[OK]]></return_msg>
				  </xml>';
        }else{
            f_saveLog('验签失败:' . var_export($data,true),$savePath);
        }
    }
}

