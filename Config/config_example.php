return [
  //基础参数
  'params' => [

  ],

  //MySQL数据库配置
  'connections' => [
    'mysql' => [
      'host' => '127.0.0.1',
      'username' => 'root',
      'password' => '11111',
    ],
  ],

  //Redis配置
  'redis' => [
    'default' => [
          'host' => '127.0.0.1',
          'password' => null,
          'port' => 6379,
          'database' => 0,
    ],
  ],
];
