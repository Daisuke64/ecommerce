<?php
    require '../functions/custDAO.php';
    $cust_id = $_GET['id'];
    deleteCompletelyCustomer($cust_id);
    header('Location: customer_recycletbl.php');
?>