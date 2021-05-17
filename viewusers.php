<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
    padding-top: 40px;
    padding-bottom: 40px;
  }
    </style>
</head>
<body class="indexPage">
<?php
    require 'config.php';
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
?>

<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="./index.php">INDIAN BANK</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="./index.php">Home</a></li>
                
                <li><a href="./viewusers.php"> Customer Details </a></li>
                <li><a href="./transactionDetails.php"> Transation History </a></li>
            
        
                 <li><a href="./about.html">About Us</a></li>
       
            </ul>
        </div>
    </nav>
    <div class="container">
       
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover tableStyle table-sm table-res">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Credits</th>
                            <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>

                        <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['names']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['credit']?></td> 
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"class="text-red"> <button type="button" class="btn btn-success">View</button></a></td>

                    </tr>
                    <?php
                    }
                        ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>  
    
</div>
<footer class="container-fluid bg-4 text-center">
<p>INDIAN BANK LIMITED</p>
    <p>BANK MANAGEMNT SYSYTEM CREATED BY RITIKA AHIRKAR</p>
   
   <P> SPARK FOUNDATION </P>
  </footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>