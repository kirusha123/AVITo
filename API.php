<?php
require_once 'connection.php';



class API
{
    private $connect;

    private $SellerAdr;

    private $accesstimes;
    private $lastReqestIdx;

    public function __construct( $connect,$SellerAdr){
        $this->connect = $connect;
        $this->SellerAdr = $SellerAdr;
        $this->accesstimes = array();
    }

    public function getDeliveryCost($CustumerAdr){
        //Расчет стоимости доставки
        if ($this->isTimeoutPassed() ) {
            return $deliverCost = 0;
        }
    }

    public function acceptOrder($orderDescription,$totalPrice,$Custumer_id,$adr,$OrderDate) {
        if ($this->isTimeoutPassed() ) {
            $sql = "INSERT INTO orders (id, orderDescription, totalprice, Custumer_id, adr, orderDate) VALUES (NULL, '$orderDescription', '$totalPrice', '$Custumer_id', '$adr', '$OrderDate')";
            if (mysqli_query($this->connect, $sql)) {
                echo "Order added";
            } else {
                echo $sql;
            }
        }
    }

    public function getOrderList(){
        if ($this->isTimeoutPassed() ) {
            $sql = "SELECT * FROM `orders`";
            $orders = mysqli_query($this->connect, $sql);
            $orderList = array();

            while ($order = mysqli_fetch_assoc($orders)) {
                $orderList[] = $order;
            }


            return json_encode($orderList);
        }
    }

    public function getOrderInfo($order_id){
        if ($this->isTimeoutPassed() ) {
            $sql = "SELECT * FROM `orders` WHERE id = $order_id";
            $query = mysqli_query($this->connect, $sql);
            if (!$query) die("query error");

            $order = mysqli_fetch_assoc($query);

            echo "</br>" . $order . "</br>";


            $products = $this->parseOrderDescription($order['OrderDescription']);

            $order_info = array();
            $order_info['products'] = $products;
            $order_info['adr'] = $order['adr'];
            $order_info['date'] = $order['orderDate'];

            return json_encode($order_info);
        }
        else{
            echo "</br>Warninig: Request Limit was exceeded";
        }
    }

    private function isTimeoutPassed(){
        if (count($this->accesstimes) < 10) {
            $this->accesstimes[] = time();
            $this->lastReqestIdx = count($this->accesstimes) - 1;
            return true;
        }
        else {
            $idx = $this->lastReqestIdx + 1;
            if ($idx > 9) {
                $idx = 0;
            }
            if ((time() - $this->accesstimes[$idx]) <= 60)
                return false;
            else{
                $this->accesstimes[$idx] = time();
                $this->lastReqestIdx = $idx;
                return true;
            }

        }
    }

    private function parseOrderDescription($OrderDescription){
        //тут должен быть парсинг
        $Products = array();//массив хранящий id товаров, которые купил покупатель
        $products[] = 1;
        $products[] = 3;
        $products[] = 15;
        //OrderDescription Содержит информацию о товарах, которые купил покупатель
        return $products;
    }
}