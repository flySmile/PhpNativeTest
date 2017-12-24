<?php
  require dirname(__FILE__) . '/../base.php';

  $query_url = 'https://api.miaodiyun.com/20150822/industrySMS/sendSMS';
  $params_miaodi = $config['params']['miaodi'];
  $verify_base = range(1000, 9999);
  $verify_num = $verify_base[array_rand($verify_base)];
  $minute = 5;
  $timestamp = date('YmdHis');
  $post_data = [
    'accountSid' => $params_miaodi['account_sid'],
    'smsContent' => '【志斌科技】您的验证码为'. $verify_num . '，请于' . $minute . '分钟内正确输入，如非本人操作，请忽略此短信。',
    'to' => $params_miaodi['phone'],
    'timestamp' => $timestamp,
    'sig' => md5($params_miaodi['account_sid'] .  $params_miaodi['auth_token'] . $timestamp),
    'respDataType' => 'json',
  ];
  $headers = [
    'Content-type:application/x-www-form-urlencoded',
    'Accept:application/json',
  ];

  $server_result = curlPost($query_url, http_build_query($post_data), $headers);

  je($server_result);
