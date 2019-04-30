<?php
    require '../classes/custDAO.php';
    $custdao = new CustomerAccessObject;
    $cust_id = $_GET['id'];
    $custdao->deleteCompletelyCustomer($cust_id);
    header('Location: customer_recycletbl.php');
?>