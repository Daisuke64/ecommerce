<?php
    session_start();
    //checker to check if the user already logged in
    if($_SESSION['logstat'] != "Active"){
        header('Location: ../index.php');
    }else{
        echo "Welcome User: ".$_SESSION['name']." <a href='../logout.php'>Logout</a>";
    }
    require "../functions/custDAO.php";
    $custlist = retrieveAllCustomers();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Customer Table</title>
</head>
<body>
    <div class="jumbotron bg-danger text-white">
        <h1 class="display-4">Customer Table</h1>
    </div>
    <div class="container mt-3">
        <h4 class="display-4"><a href="customer_add.php" role="button" class="btn btn-info"><i class="fas fa-plus"></i>Add Customer</a></h4>
        <table class="table table-striped">
            <thead>
                <tr class="bg-dark text-white">
                   <th>Customer First Name</th>
                   <th>Customer Last Name</th>
                   <th>Customer Birth Date</th>
                   <th>Customer Address</th>
                   <th>Customer Login Name</th>
                   <th>Customer Phone</th>
                   <th>Customer Register Date</th>
                   <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   foreach($custlist as $key=>$value){
                       echo "<tr>";
                            echo "<td>".$value['cust_fname']."</td>";
                            echo "<td>".$value['cust_lname']."</td>";
                            echo "<td>".$value['cust_dob']."</td>";
                            echo "<td>".$value['cust_address']."</td>";
                            echo "<td>".$value['cust_login_name']."</td>";
                            echo "<td>".$value['cust_phone']."</td>";
                            echo "<td>".$value['cust_register_date']."</td>";
                            echo "<td><a href='customer_edit.php?id=".$value['cust_id']."' role='button' class='btn btn-warning'><i class='fas fa-edit'></i></a></td>";
                            echo "<td><a href='customer_delete.php?id=".$value['cust_id']."' role='button' class='btn btn-danger'><i class='fas fa-trash'></i></a></td>";
                       echo "</tr>";
                   }

                ?>         
            </tbody>
        
        
        
        </table>
    </div>
</html>