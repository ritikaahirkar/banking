<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDIAN BANK</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        * {margin: 0;padding:0;box-sizing:border-box;}

.carousel-inner  {
    width:100%;
    height:10%;

}
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        

        img {
            vertical-align: middle;
        }

    

       
        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
    .bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
    padding-top: 40px;
    padding-bottom: 40px;
  }
  .im{
      width: auto;
      max-width: 100% ;
      height: auto;
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
  <h2><centre><b>INDIAN BANK</b> </centre></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">

      <div class="item active">
        <img src="first.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h2>Welcome!!!</h2>
          <p><b>Don't stress yourself, Pay on the Web itself.</p></b>
        </div>
      </div>

      <div class="item">
        <img src="second.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h2>Transfer Money</h2>
          <p><b>Go cashless and support advanced India.</p></b>
        </div>
      </div>
    
      <div class="item">
        <img src="third.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h2>Go Cashless</h2>
          <p><b>E-payment is the best, overlook everything else and take rest.</p></b>
        </div>
      </div>
  
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <div class="main">
    <h1> </h1>
    <div class="row">
        <div class="col-sm-4" style="background-color:#4682B4;">
        <a href="./viewusers.php" class="btn btn-primary" role="button">Customer Details</a>
        </div>
        <div class="col-sm-4" style="background-color:#90EE90;">
        <a href="./viewusers.php" class="btn btn-success" role="button">Transfer Money</a>
        </div>
        <div class="col-sm-4" style="background-color:#87CEEB;">
        <a href="./transactionDetails.php" class="btn btn-info" role="button">Tansaction Details</a>
        </div>
  </div>
</div>
  <footer class="container-fluid bg-4 text-center">
  <p>INDIAN BANK LIMITED</p>
    <p>BANK MANAGEMNT SYSYTEM CREATED BY RITIKA AHIRKAR</p>
   
   <P> SPARK FOUNDATION </P>
  </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>