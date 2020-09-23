<?php
require_once 'connection.php';



class API
{
    private $connect;

    private $SellerAdr;

    public function __construct( $connect,$SellerAdr){
        $this->connect = $connect;
        $this->SellerAdr = $SellerAdr;
    }

    public function getDeliverCost($CustumerAdr){
        //Расчет стоимости доставки
        return $deliverCost = 0;
    }

    public function acceptOrder($orderDescription,$totalPrice,$Custumer_id,$adr,$OrderDate){
            $sql = "INSERT INTO orders (id, orderDescription, totalprice, Custumer_id, adr, orderDate) VALUES (NULL, '$orderDescription', '$totalPrice', '$Custumer_id', '$adr', '$OrderDate')";
            if (mysqli_query($this->connect, $sql)) {
                echo "Order added";
            } else {
                echo $sql;
            }
    }

    public function getOrderList(){
        $sql = "SELECT * FROM `orders`";
        $orders = mysqli_query($this->connect,$sql);
        $orderList = array();

        while($order = mysqli_fetch_assoc($orders)){
            $orderList[] = $order;
        }


        return json_encode($orderList);
    }

    public function getOrderInfo($order_id){
        $sql = "SELECT * FROM `orders` WHERE id = $order_id";
        $query = mysqli_query($this->connect,$sql);
        if(!$query) die("query error");

        $order = mysqli_fetch_assoc($query);

        echo "</br>".$order."</br>";


        $products = $this->parseOrderDescription($order['OrderDescription']);

        $order_info = array();
        $order_info['products'] = $products;
        $order_info['adr'] = $order['adr'];
        $order_info['date'] = $order['orderDate'];

        return json_encode($order_info);
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