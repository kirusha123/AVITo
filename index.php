<?php

require_once 'API.php';
require_once 'connection.php';
require_once 'constants.php';


$Conn = new Connection();
$connect = $Conn->start_connection();

$api = new API($connect,SellerName);

//$cost = $api->getDeliveryCost('Ecenina street');

//$api->acceptOrder('15,2,17,44',2222,1,'Bulgakova street','2022-10-05');

//echo $api->getOrderList();

//echo $api->getOrderInfo(1);

//echo time();

/*
//test Request Rate Limit
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
echo $api->getOrderInfo(1);
*/




