<?php
    require '../classes/custDAO.php';
    $custdao = new CustomerAccessObject;
    $cust_id = $_GET['id'];
    $customer = $custdao->retrieveSingleCustomer($cust_id);
    if(isset($_POST['submit'])){
        $confirm = $_POST['confirm'];
        if($confirm == 'return'){
            $custdao->returnCustomer($cust_id);
            header('Location: customer_recycletbl.php');
        }else{
            header('Location: customer_recycletbl.php');
        }
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
    <title>Customer Delete</title>
</head>
<body>
    <div class="container">
    <div class="card border-danger m-3 p-3">
        <h4 class="card-title">Are you sure you're going to return this Customer?</h4>
        <p class="card-text">Please type 'return' if you are sure. if not, type 'cancel'</p>
        <p class="card-text">
            Detail <br>
            Customer First Name: <?php echo $customer['cust_fname']; ?> <br>
            Customer Last Name: <?php echo $customer['cust_lname']; ?> <br>
            Customer Register Date: <?php echo date('M d, Y', strtotime($customer['cust_register_date'])); ?> <br>
        </p>
        <form method="post">
            <div class="form-group">
                <label for="">Type Here:</label>
                <input type="text" name="confirm" id="" class="form-control">
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-danger text-white">
        </form>
    </div>
    </div>
</body>
</html>

