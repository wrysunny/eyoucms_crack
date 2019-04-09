<?php
error_reporting(0);
/** 破解前提，hosts文件中加入127.0.0.1 service.eyoucms.com
* 修改application/config.php文件中的service_ey为破解网站的base64编码，如：base64_encode('http://service.synology.pub')
* service_ey_token 与service_ey的关系为：md5('~'.service_ey.'~')
* 修改此文件中的域名
*/
header('Content-type:text/json;charset=utf-8');
$client_domain = $GET['client_domain'];
$data = array('errcode'=>0,'errmsg'=>'','info'=>array('id'=>11,'域名'=>"xxxxx",'code'=>'98198be1bc69525b2fc98cd26c770ff0','expires_in'=>0,'tryout_time'=>0,'close_web'=>0,'updomain_num'=>0,'intro'=>null,'uid'=>6482,'userid'=>'42E02165','状态'=>1,'is_del'=>0,'add_time'=>1552273924,'update_time'=>0));
print_r(json_encode($data));
