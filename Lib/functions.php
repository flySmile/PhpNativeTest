<?php
  /**
  * 打印json格式数据
  */
  function je($var)
  {
    echo json_encode($var);die;
  }

  /**
  * post请求
  */
  function curlPost($url, $requestString, $headers = []){
    if($url === '' || $requestString === ''){
      return false;
    }

    $con = curl_init((string)$url);

    if (!empty($headers)) {
      curl_setopt($con, CURLOPT_HEADER, true);
      curl_setopt($con, CURLOPT_HTTPHEADER, $headers);
    } else {
      curl_setopt($con, CURLOPT_HEADER, false);
    }

    curl_setopt($con, CURLOPT_POST,true);
    curl_setopt($con, CURLOPT_POSTFIELDS, $requestString);
    curl_setopt($con, CURLOPT_RETURNTRANSFER,true);

    $result = curl_exec($con);
    curl_close($con);

    return $result;
  }
