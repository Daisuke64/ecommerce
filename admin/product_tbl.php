<?php
    require "../functions/prodDAO.php";
    $prodlist = retrieveAllProducts();
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
    <title>Product Table</title>
</head>
<body>
    <div class="jumbotron bg-danger text-white">
        <h1 class="display-4">Product Table</h1>
    </div>
    <div class="container mt-3">
        <h4 class="display-4"><a href="product_add.php" role="button" class="btn btn-info"><i class="fas fa-plus"></i>Add Product</a></h4>
        <table class="table table-striped">
            <thead>
                <tr class="bg-dark text-white">
                   <th>Product Name</th>
                   <th>Product Description</th>
                   <th>Product Date</th>
                   <th>Product Price</th>
                   <th>Product Stock</th>
                   <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   foreach($prodlist as $key=>$value){
                       echo "<tr>";
                            echo "<td>".$value['prod_name']."</td>";
                            echo "<td>".$value['prod_desc']."</td>";
                            echo "<td>".date('M d, Y', strtotime($value['prod_date_added']))."</td>";
                            echo "<td>".number_format($value['prod_price'], 2)."円</td>";
                            echo "<td>".$value['prod_stock']."</td>";
                            echo "<td><a href='product_edit.php?id=".$value['prod_id']."' role='button' class='btn btn-warning'><i class='fas fa-edit'></i></a></td>";
                            echo "<td><a href='product_delete.php?id=".$value['prod_id']."' role='button' class='btn btn-danger'><i class='fas fa-trash'></i></a></td>";
                       echo "</tr>";
                   }

                ?>         
            </tbody>
        
        
        
        </table>
    </div>
</html>