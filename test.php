 <!DOCTYPE html>
<html lang="en">
<head>
  <title>INSIDEOUT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="bs/css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="bs/js/bootstrap.js"></script>


  <style type="text/css">
           /* table {
            width: 60%;
        }*/

        thead, tbody, tr, td, th { display: block; }

        tr:after {
            content: ' ';
            display: block;
            visibility: hidden;
            clear: both;
        }

        thead th {
            height: 30px;

            /*text-align: left;*/
        }

        tbody {
            height: 500px;
            overflow-y: auto;
        }

        thead {
            /* fallback */
        }

        /*tbody td, thead th {
            width: 31.2%;
            float: left;
        }*/  

        .nameid {
          width: 80.2%;
          float: left;

        }
        .priceid {
          width: 10%;
          float: left;
        }
        .bookid {
          width: 8.2%;
          float: left;
        }

        .container {
          width: 100%;
          height: 100%;
          padding: 0;
          margin: 0;
        }

        .about{
          margin-bottom: 30px;
        }


  </style>

</head>

<body style="background: #55b69b;">


<div class="container">     <!-- style="width: 51%;display: inline-block;" -->

    <nav class="navbar navbar-inverse" >
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#" style="font-size: xx-large;color: #1ab188;">INSIDEOUT</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="test.php">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="services.php">Women</a></li>
              <li><a href="services.php">Men</a></li>
              <li><a href="services.php">Kids</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>







    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <div class="item active">
            <img src="images/slider-1.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption"><h4 style="margin-bottom: 30%;"> INSIDEOUT Salon At Home is an app and Web-based beauty and wellness services provider.</h4>
            <h1 style="font-size: 50px;">OFFER!</h1>
              <h3><i>Relax My senses</i></h3>
              <p>Swedish body massage + Fruit Facial-</p> <h1>Rs 1999*</h1>
            </div>
          </div>

          <div class="item">
            <img src="images/slider-2.jpg" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
                        <h1 style="font-size: 50px;">FESTIVE SALE!</h1>

              <h3>Spa Mani-Padi+Full Waxing</h3>
              <h1>Rs 1499*</h1>
            </div>
          </div>
        
          <div class="item">
            <img src="images/slider-3.jpg" alt="New York" style="width:100%;">
            <div class="carousel-caption">
              <h1>Designer Haircut</h1>
              <h3>Now At Rs 399!</h3>
            </div>
          </div>
      
        </div>

        <!-- Left and right controls -->
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

<?php

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname="insideout";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); }
        //echo "Connected successfully";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql="SELECT service_name,price,service_id,description FROM services";
        $result = $conn->query($sql);
    ?>

    <div class="row">

      <div class="col-md-1"></div>

      <div class="col-md-6">
              <h1 style="">Our Services</h1>


      <!--<div style="width:500px; height:600px; overflow:auto;"  >  -->
        <table class="table table-hover table-fixed"> <!-- style="width: 81%;display: inline-block;" -->           
            <!-- <div class="table-responsive ser_table"> -->
                <thead>
                    <tr>
                      
                      <th class="nameid" style="width: 68%">Name</th>
                      <th class="priceid" style="width: 17%">Price</th>
                      <th class="bookid"> Book </th>
                       
                    </tr>
                </thead>
                <tbody>

                <?php

                include 'cart.php';

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo '<tr>
                          <td class="nameid" scope="row"><h3>' . $row["service_name"]. ' </h3></br> '.$row["description"].'</td>
                          <td class="priceid">' . $row["price"] .'</td>
                          <td class="bookid">  <form action="cart.php" method = "post">
                                  
                                   <input type="submit" name="submit" value='.$row["service_id"].' />
                                   </form>
                          </td>
                        </tr>';
                    
            }
        } else {
            echo "0 results";
        }


        ?>
               </tbody>
            <!-- </div> -->
        </table>
      </div>  <!-- end col-md-8 -->

      <div class="col-md-4 " >  <!-- <div class="container" style="float: right;margin-top: 23px;"> -->
         <h1 style="    font-size: 24px;background-color: cadetblue;width:257px ;">Your Cart</h1>
        <?php
        $sql1="SELECT name,price,id FROM cart";
        $result = $conn->query($sql1);

           ?>
            <table class="table table-hover table-fixed"> <!-- style="width: 30%" -->  

              <thead>
                  <tr>
                    <th class="nameid">Name</th>
                    <th class="priceid">Price</th>
                                        <th style="width: 109%">Remove</th>


                  </tr>
                </thead>

                   <tbody>

                <?php

                if ($result->num_rows > 0) {
                    // output data of each row
                    $total = 0;
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>
                                  <td class="nameid" scope="row">' . $row["name"]. ' </br> </td>
                                  <td class="priceid">' . $row["price"] .'</td>
                                  <td class="removeid" style="width: 108%">  <form action="cart.php" method = "post">
                                   <input type="submit" name="remove" value=' .$row["id"].' />
                                   </form>
                          </td>
                                  
                              </tr>';

                        $total = $total +  $row["price"];
                    }
                } else {
                    echo "0 results";
                }

                 echo  '<tr>
                          <td class="nameid" scope="row"><h4>Total</h4> <br> </td>
                          <td class="priceid"><h4>'. $total .'</h4></td>
                      </tr>';

                
                echo'';
                ?>
               </tbody>
            </table>
            <button type="button" class="btn btn-warning">Confirm</button>


              
      </div>  <!-- end col-md-4 -->


      <div class="col-md-1"></div>

    </div>    <!-- end row -->


  </div>







      <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
             </div>
        </div>
      </div>
            <h4>INSIDEOUT SALON At Home provides beauty, wellness and grooming services for both men and Women. INSIDEOUT- Salon At Home offerings include facial, manicure, pedicure, waxing, make-up, bleach, chocolate waxing, hair spa, haircut, hair smoothening and rebonding, hair ironing, Swedish massage, deep-tissue massage, bridal make-up, pre-bridal packages, groom make-up, beard trim, head and shoulder massage, nail art, nail extension, French pedicure, French manicure, blow dry, Indian mehendi, Arabic mehendi, threading, foot reflexology, foot spa and clean-up. Our make-up is suited to weddings, parties, Fashion Shows and Corporate and college events</h4>
            <p class="copyright text-muted">
              Copyright &copy; INSIDEOUT 2017
            </p>
         

    </footer>
</body>
</html>