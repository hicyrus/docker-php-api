<?php

namespace Docker\Http\Client;

//curl 请求

class  HttpClient {

	public static  function post($url,$data=array())
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL,$url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查 
		curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97'); // 模拟用户使用的浏览器 
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);  // 使用自动跳转 
		curl_setopt($curl, CURLOPT_AUTOREFERER, 1);// 自动设置Referer 
		curl_setopt($curl, CURLOPT_TIMEOUT, 30); //设置超时
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回 
		// post数据
		curl_setopt($curl, CURLOPT_POST, 1);
		// post的变量
		curl_setopt($curl, CURLOPT_POSTFIELDS, str_replace('\/', '/', decodeUnicode(json_encode($PostData))));
		$output = curl_exec($curl);
		echo $output;
		curl_close($curl);
	}





}


?>