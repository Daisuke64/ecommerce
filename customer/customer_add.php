<?php
 
   require '../classes/custDAO.php';
   $custdao = new CustomerAccessObject;
   if(isset($_POST['add'])){
       //intialization of variables
       //getting the data from the form
      $cust_fname = $_POST['cust_fname'];
      $cust_lname = $_POST['cust_lname'];
      $cust_dob = $_POST['cust_dob'];
      $cust_address = $_POST['cust_address'];
      $cust_login_name = $_POST['cust_login_name'];
      $cust_login_password = $_POST['cust_login_password'];
      $cust_phone = $_POST['cust_phone'];
      $cust_register = $_POST['cust_register_date'];
      $custdao->addCustomer($cust_fname, $cust_lname, $cust_dob, $cust_address, $cust_login_name, $cust_login_password, $cust_phone, $cust_register);
      header('Location: customer_tbl.php'); //this will redirect us to the product table after product adding
   }

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
    <title>Add Customer</title>
</head>
<body>
    <div class="jumbotron bg-primary">
        <h1 class="display-4">Add Customer</h1>    
    </div>
    <div class="container mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Customer First Name</label>
                <input type="text" name="cust_fname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Customer Last Name</label>
                <input type="text" name="cust_lname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Customer Birth Date</label>
                <input type="date" name="cust_dob" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Customer Address</label>
                <input type="text" name="cust_address" id="" class="form-control">
            </div>    
            <div class="form-group">
                <label for="">Customer Login Name</label>
                <input type="text" name="cust_login_name" id="" class="form-control">
            </div>  
            <div class="form-group">
                <label for="">Customer Login Password</label>
                <input type="password" name="cust_login_password" id="" class="form-control">
            </div>  
            <div class="form-group mb-3">
                <label for="">Customer Phone</label>
                <input type="text" name="cust_phone" id="" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Customer Register Date</label>
                <input type="date" name="cust_register_date" id="" class="form-control">
            </div>
        
            <input type="reset" value="Reset" name="add" class="btn btn-danger">
            <input type="submit" value="Submit" name="add" class="btn btn-primary">

            </div>
        </form>
    </div>
</body>
</html>