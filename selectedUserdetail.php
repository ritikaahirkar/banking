<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $toUser = $_POST['to'];
    $amnt = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from users where id=$toUser";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

  
 if($amnt > $sql1['credit']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  
        echo '</script>';
    }
    
 else if($amnt == 0){
     echo "<script type='text/javascript'>alert('Enter Amount Greater than Zero');
</script>";
 }
    else {
        
    
        $newCredit = $sql1['credit'] - $amnt;
        $sql = "UPDATE users set credit=$newCredit where id=$from";
        mysqli_query($conn,$sql);
     


        $newCredit = $sql2['credit'] + $amnt;
        $sql = "UPDATE users set credit=$newCredit where id=$toUser";
        mysqli_query($conn,$sql);
           
        $sender = $sql1['names'];
        $receiver = $sql2['names'];
        $sql = "INSERT INTO `transaction`(`sender`,`receiver`, `amount`) VALUES ('$sender','$receiver','$amnt')";
        $tns=mysqli_query($conn,$sql);
        if($tns){
           echo "<script type='text/javascript'>alert('Transaction Successfull!');
window.location='transactionDetails.php';
</script>";
        }
       
        $newCredit= 0;
        $amnt =0;
       
     
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranfer Money</title>
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
        <h1 style="color: #c06565">Transaction Process</h1>
        <form method="post" name="tcredit"><br/>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_array($query);
            ?>
            <label style="color: #c06565">Transfer Money From: </label><br/>
        <div class="table-responsive">
        <table class="table text-center table-striped table-hover tableStyle">

            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Credits</th>
            </tr>

            <tr>
                <td><?php echo $rows['id']?></td>
                <td><?php echo $rows['names'] ;?></td>
                <td><?php echo $rows['email'] ;?></td>
                <td><?php echo $rows['credit'] ;?></td>
            </tr>
            
        </table>
              </div>
            <label style="color: #c06565">Transfer Money To:</label>
        <select class=" form-control" name="to" style="margin-bottom:5%;" required>
            <option value="" disabled selected> To </option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_array($query)) {
            ?>
                <option class="table text-center table-striped " value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['names'] ;?> (Current Amount:
                    <?php echo $rows['credit'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
        </select> <br>
            <label style="color: #c06565">Enter Amount to  Transfer:</label>
            <input type="number" id="amm" class="form-control" name="amount" min="0" required/> <br/>
                <div class="text-center btn3">
            <button class="btn btn-danger" name="submit" type="submit" >Transfer</button>
            </div>
        </form>
    </div>
    <footer class="container-fluid bg-4 text-center">
        <p>INDIAN BANK LIMITED</p>
    <p>BANK MANAGEMNT SYSYTEM CREATED BY RITIKA AHIRKAR</p>
   
   <P> SPARK FOUNDATION </P>
  </footer>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>