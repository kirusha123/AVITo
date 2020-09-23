<?php

require_once 'API.php';
require_once 'connection.php';
$Conn = new Connection();
$connect = $Conn->start_connection();

$api = new API($connect,'Centralnaya street');

//$api->acceptOrder('blabla',1721,1,'Bolotnaya street','2022-09-24');

//echo $api->getOrderList();

//echo $api->getOrderInfo(1);





