<?php

    require 'connection.php';

    class OrderAccessObject extends Datebase{

        public function addOrders($prod_id, $user_id, $ord_quantity, $ord_date_ordered, $ord_date_released){
            $sql = "INSERT INTO order_tbl(prod_id, cust_id, ord_quantity, ord_date_ordered, ord_date_released)
                    VALUES ('$prod_id', '$user_id','$ord_quantity', '$ord_date_ordered', '$ord_date_released')";
            $result = $this->conn->query($sql);        
        }
        public function getProductList(){
            $sql = "SELECT * FROM product WHERE prod_status = 'A'";
            $result = $this->conn->query($sql);
            $rows = array();
            While($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function getAllOrders($user_id){
            $sql = "SELECT * FROM order_tbl JOIN product ON order_tbl.prod_id = product.prod_id
                    JOIN customer ON order_tbl.cust.id = customer.cust_id 
                    WHERE order_tbl.cust_id = '$user_id'";
            $result = $this->conn->query($sql);
            $rows = array();
            While($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

    }
?>