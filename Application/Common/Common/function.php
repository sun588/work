<?php
/**
 * @param $data 打印的数据
 */
function f_dump($data){
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

/**
 * @param $errno 错误编号
 * @param $msg   错误信息
 * @param string $data 返回数据
 * @param $returnMethod 数据返回方式
 */
function f_return($errno,$msg,$data = '',$returnMethod = true){
	$returnArr = array();
	$returnArr['errno'] = $errno;
	$returnArr['msg'] = $msg;
	$returnArr['data'] = $data;
  if($returnMethod){
    echo json_encode($returnArr);
  }else{
    return json_encode($returnArr);
  }
}

/**
 * [f_saveLog 记录日志]
 * @param  [type] $str [日志内容]
 * @param  [type] $dirPath [保存的文件夹路径]
 * @return [type]      [description]
 */
function f_saveLog($str,$dirPath = ''){
    if(!$dirPath){
        $dirPath = C('LOG_SAVE_PATH');
    }
	if(!is_dir($dirPath)){
		if( !mkdir($dirPath) ){
			return false;
		}
	}
	
	$fileName = date('Y-m-d',time()) . '.txt';
	$savePath = $dirPath . $fileName;
	$str = '[' . date('Y-m-d H:i:s') . ']' . $str . "\r\n";
	if(file_put_contents($savePath,$str,FILE_APPEND)){
		return true;
	}else{
		return false;
	}
}

/**
 * [curlPost POST请求模拟]
 * @param  [type] $url  [请求地址]
 * @param  [type] $data [参数]
 * @param  [type] $sslCheck [是否验证证书 true:默认需要验证 2:不需要]
 * @return [type]       [description]
 */
function curlPost($url,$data,$sslCheck = true){
     $curl = curl_init();
     //设置抓取的url
     curl_setopt($curl, CURLOPT_URL, $url);
     //设置头文件的信息作为数据流输出
     curl_setopt($curl, CURLOPT_HEADER, 0);
     //设置获取的信息以文件流的形式返回，而不是直接输出。
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
     //设置post方式提交
     curl_setopt($curl, CURLOPT_POST, 1);
     //设置post数据
     curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
     if(!$sslCheck){
        //不验证证书
     	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
     	//不验证证书
	 	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);	
     }
     //执行命令
     $data = curl_exec($curl);
     //关闭URL请求
     curl_close($curl);
     //返回获得的数据
     return $data;	
}

/**
 * [curlGet GET请求模拟]
 * @param  [type] $url [请求地址]
 * @param  [type] $sslCheck [是否验证证书 true:默认需要验证 2:不需要]
 * @return [type]      [description]
 */
function curlGet($url,$sslCheck = true){
     $curl = curl_init();
     //设置抓取的url
     curl_setopt($curl, CURLOPT_URL, $url);
     //设置头文件的信息作为数据流输出
     curl_setopt($curl, CURLOPT_HEADER, 0);
     //设置获取的信息以文件流的形式返回，而不是直接输出。
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
     if(!$sslCheck){
        //不验证证书
     	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
     	//不验证证书
	 	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);	
     }
     //执行命令
     $data = curl_exec($curl);
     //关闭URL请求
     curl_close($curl);
     //显示获得的数据
     return $data;	
}

/**
* 取汉字的第一个字的首字母
* @param type $str
* @return string|null
*/
function f_getFirstCharter($str){
     if(empty($str)){return '';}

     $fchar=ord($str{0});
     if($fchar>=ord('A')&&$fchar<=ord('z')) return strtoupper($str{0});
     $s1=iconv('UTF-8','gb2312',$str);
     $s2=iconv('gb2312','UTF-8',$s1);
     $s=$s2==$str?$s1:$str;
     $asc=ord($s{0})*256+ord($s{1})-65536;
     if($asc>=-20319&&$asc<=-20284) return 'A';
     if($asc>=-20283&&$asc<=-19776) return 'B';
     if($asc>=-19775&&$asc<=-19219) return 'C';
     if($asc>=-19218&&$asc<=-18711) return 'D';
     if($asc>=-18710&&$asc<=-18527) return 'E';
     if($asc>=-18526&&$asc<=-18240) return 'F';
     if($asc>=-18239&&$asc<=-17923) return 'G';
     if($asc>=-17922&&$asc<=-17418) return 'H';
     if($asc>=-17417&&$asc<=-16475) return 'J';
     if($asc>=-16474&&$asc<=-16213) return 'K';
     if($asc>=-16212&&$asc<=-15641) return 'L';
     if($asc>=-15640&&$asc<=-15166) return 'M';
     if($asc>=-15165&&$asc<=-14923) return 'N';
     if($asc>=-14922&&$asc<=-14915) return 'O';
     if($asc>=-14914&&$asc<=-14631) return 'P';
     if($asc>=-14630&&$asc<=-14150) return 'Q';
     if($asc>=-14149&&$asc<=-14091) return 'R';
     if($asc>=-14090&&$asc<=-13319) return 'S';
     if($asc>=-13318&&$asc<=-12839) return 'T';
     if($asc>=-12838&&$asc<=-12557) return 'W';
     if($asc>=-12556&&$asc<=-11848) return 'X';
     if($asc>=-11847&&$asc<=-11056) return 'Y';
     if($asc>=-11055&&$asc<=-10247) return 'Z';
     return null;
}

/**
 * [微信第三方登录 通过code获取access_token]
 * @param  [type] $code      [description]
 * @param  [type] $APPID     [description]
 * @param  [type] $AppSecret [description]
 * @return [type] json       [description]
 */
function f_wxGetAccessToken($code,$APPID,$AppSecret){
   if( empty($code) ){
     throw new Exception('invalid code');
     return;
   }
   if( empty($APPID) ){
     throw new Exception('invalid APPID');
     return;
   }
   if( empty($APPID) ){
     throw new Exception('invalid AppSecret');
     return;
   }

   $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$APPID&secret=$AppSecret&code=$code&grant_type=authorization_code";
   $rs = curlGet($url,false);
   return $rs;  
}

/**
 * [微信第三方登录 通过refresh_token获取access_token]
 * @param  [type] $APPID         [description]
 * @param  [type] $refresh_token [description]
 * @return [type]                [description]
 */
function f_wxRefreshToken($APPID,$refresh_token){
   if( empty($APPID) ){
     throw new Exception('invalid APPID');
     return;
   }
   if( empty($refresh_token) ){
     throw new Exception('invalid refresh_token');
     return;
   }

   $url = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=$APPID&grant_type=refresh_token&refresh_token=$refresh_token";
   $rs = curlGet($url,false);
   return $rs;        
}

/**
 * [校验access_token的有校性]
 * @param  [type] $access_token [description]
 * @param  [type] $openid       [description]
 * @return [type] json          [description]
 */
function f_wxCheckAccessToken($access_token,$openid){
   if( empty($access_token) ){
     throw new Exception('invalid access_token');
     return;
   }
   if( empty($openid) ){
     throw new Exception('invalid openid');
     return;
   }     

   $url = "https://api.weixin.qq.com/sns/auth?access_token=$access_token&openid=$openid";
   $rs = curlGet($url,false);
   return $rs; 
}

/**
 * [微信通过accessToken获取个人信息]
 * @param  [type] $access_token [description]
 * @param  [type] $openid       [description]
 * @return [type]               [description]
 */
function f_wxGetUserInfo($access_token,$openid){
   if( empty($access_token) ){
     throw new Exception('invalid access_token');
     return;
   }
   if( empty($openid) ){
     throw new Exception('invalid openid');
     return;
   }      

   $url = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid";
   $rs = curlGet($url,false);
   return $rs; 
}

/**
 * [f_base64UP base64图片上传]
 * @param  [type] $baseData  [base64数据]
 * @param  [type] $extension [图片扩展名]
 * @return [type]            [description]
 */
function f_base64UP($baseData,$extension){
  $returnArr = array();
  $dirPath = C('IMG_PATH');
  $imgType = array('jpg','jpeg','png','gif');
  //获取图片参数
  $pic = $baseData;
        
  if( $pic != '' && $extension != '' ){
    //上传文件格式校验
    if(!in_array(ltrim($extension,'.'),$imgType)){
      f_return('4001','文件格式不正确');
      return;
    }
    $dirName = date('Y-m-d',time());
    $dirPath = $dirPath . $dirName;
    if(!is_dir($dirPath)){
      if(!mkdir($dirPath)){
        f_return('4002','创建文件夹失败');
        return;           
      }
    }
    $fileName = time() . rand(1000,9999) . '.' . $extension;
    $filePath = $dirPath . '/' . $fileName;
    $pic = explode(',', $pic);
    if(!file_put_contents($filePath,base64_decode($pic[count($pic)-1]))){
      return f_return('4003','文件上传失败','',false);            
    }else{
      $picUrl = ltrim($filePath,'.');
      return f_return('1','success',$picUrl,false);      
    }
  }else{
    return f_return('4004','数据不存在','',false);
  }  
}

/**
 * [f_fileUP 文件上传]
 * @param  [type] $fileSize [文件大小]
 * @param  [type] $fileType [文件类型]
 * @param  [type] $filePath [文件路径]
 * @param  [type] $makeThumb [是否生成缩略图]
 * @return [type]           [description]
 */
function f_fileUP($fileSize,$fileType,$filePath,$makeThumb = false){
    $img = empty($_FILES['file']) ? '' : $_FILES['file'];
    if($img == '' || $img['error'] != 0){
        return f_return('4001','图片不存在','',false);
    }
    if($img['size'] > $fileSize){
        return f_return('4002','上传图片请小于1M','',false);
    }
    if( !in_array(pathinfo($img['name'],4),$fileType) ){
        return f_return('4003','上传文件格式不正确','',false);
    }

    $dirPath = $filePath . date('Y-m-d',time());
    if(!is_dir($dirPath)){
        if(!mkdir($dirPath)){
            return f_return('4011','创建文件夹失败','',false);
        }
    }

    $name = time() . rand(1000,9999);
    $saveName = $name . '.' . pathinfo($img['name'],4);
    $savePath = $dirPath . '/' . $saveName;
    $saveUrl = ltrim($savePath,'.');
    if( move_uploaded_file($img['tmp_name'],$savePath) ){
        $returnArr['url'] = $saveUrl;
        if($makeThumb){
            $thumbSaveName = $name . 'thump.' . pathinfo($img['name'],4);
            $thumbSavePath = $dirPath . '/' . $thumbSaveName;
            $imgClass = new \Think\Image();
            $imgClass->open($savePath);
            $imgClass->thumb(200,200);
            $imgClass->save($thumbSavePath);
            $returnArr['thumbUrl'] = ltrim($thumbSavePath,'.');
        }
        return f_return('1','上传文件成功',$returnArr,false);
    }else{
        return f_return('4004','移动文件失败','',false);
    }
}

function f_fileDel($filePath){
    if( file_exists($filePath) ){
        unlink($filePath);
    }
}

/*极光别名推送*/
function f_jpush($alias,$msg){
    vendor('jpush.jpush');
    $jpush = new Push();
    $jpush->aliasPush($alias,$msg);
}
