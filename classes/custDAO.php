<?php

    require 'connection.php';

    class CustomerAccessObject extends Datebase{

        
            public function addCustomer($cust_fname, $cust_lname, $cust_dob, $cust_address, $cust_login_name, $cust_login_password, $cust_phone, $cust_register){
                $sql = "INSERT INTO customer(cust_fname, cust_lname, cust_dob, cust_address, cust_login_name, cust_login_password, cust_phone, cust_register_date) VALUES ('$cust_fname', '$cust_lname', '$cust_dob', '$cust_address', '$cust_login_name', '$cust_login_password', '$cust_phone', '$cust_register')";
                $result = $this->conn->query($sql); // this will perform the addition of data to the table product
            }
            public function retrieveAllCustomers(){
                $sql = "SELECT * FROM customer WHERE cust_status ='A'";
                $result = $this->conn->query($sql);// means execute and assign it to the result variable
                $rows = array(); //this will hold all array results from the results variable

                while($row=$result->fetch_assoc()){
                    //condition: as long as there is a set of arrays being passed to the rows array
                    //the loop will not stop
                    $rows[] = $row;
                    //  print_r($row);
                    //  echo "<br>";
                    //so every row is assigned to the rows array
                }
                return $rows;
            }

            public function retrieveSingleCustomer($id){
                $sql = "SELECT * FROM customer WHERE cust_id = '$id'";
                $result = $this->conn->query($sql);
                $row = $result->fetch_assoc(); //this will get a single result
                return $row;
            }
            public function updateCustomer($cust_fname, $cust_lname, $cust_dob, $cust_address, $cust_login_name, $cust_login_password, $cust_phone, $cust_register, $cust_id){
                $sql = "UPDATE customer SET cust_fname = '$cust_fname', cust_lname = '$cust_lname',
                    cust_dob = '$cust_dob', cust_address = '$cust_address', cust_login_name = '$cust_login_name', cust_login_password = '$cust_login_password', cust_phone = '$cust_phone', cust_register_date = '$cust_register'
                    WHERE cust_id = '$cust_id'";
                $result = $this->conn->query($sql);
            }
            public function deleteCustomer($cust_id){
                $sql = "UPDATE customer SET cust_status = 'D' WHERE cust_id = '$cust_id'";
                $result = $this->conn->query($sql);
            }

            public function deleteCompletelyCustomer($cust_id){
                $sql = "DELETE FROM customer WHERE cust_id = '$cust_id'";
                $result = $this->conn->query($sql);
            }
            public function returnCustomer($cust_id){
                $sql = "UPDATE customer SET cust_status = 'A' WHERE cust_id = '$cust_id'";
                $result = $this->conn->query($sql);
            }

            public function retrieveAllCustomers2(){
                $sql = "SELECT * FROM customer WHERE cust_status ='D'";
                $result = $this->conn->query($sql);// means execute and assign it to the result variable
                $rows = array(); //this will hold all array results from the results variable

                while($row=$result->fetch_assoc()){
                    //condition: as long as there is a set of arrays being passed to the rows array
                    //the loop will not stop
                    $rows[] = $row;
                    //  print_r($row);
                    //  echo "<br>";
                    //so every row is assigned to the rows array
                }
                return $rows;
            }

            public function login($username, $password){
                $sql = "SELECT * FROM customer 
                        WHERE cust_login_name = '$username' AND cust_login_password = '$password'";
                $result = $this->conn->query($sql);
                $row = $result->fetch_assoc();
                return $row;
            }

}




?>