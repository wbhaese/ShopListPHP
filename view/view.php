<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoping</title>
    <link href="css/view.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class=navbar-items>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                </ul>       
            </div>
            <a class="navbar-brand" href="#">Amazonic Eletronics</a>
        </div>
    </nav>
    
    <div class=content>
        <div class="table-view">
            <div>
                <h2>Bellow your shopping list: </h1>
            </div>

            <table class="table table-striped" id="table-data">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Partial Price</th>
                <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $totalPrice = 0;
                    foreach($EletronicList as $v => $Item){
                        echo "<tr>";
                        echo "<th scope='row'>" . ++$v  ." </th>";
                        echo "<td>".$Item->name."</td>";
                        echo "<td>$".$Item->price."</td>";
                        echo "<td>$".$Item->totalPrice."</td>";
                        echo "</tr>";

                        $totalPrice += $Item->totalPrice;
                    }
                ?>
                <tr></tr>
                <tr>
                  <th scope="row">Total</th>
                  <td></td>
                  <td></td>
                  <td colspan="2">$<?= $totalPrice ?></td>
                </tr>
            </tbody>
            </table>
            <div class="finish-shop-btn">
                <button type="button" class="btn btn-primary">Find more</button>
                <button type="button" class="btn btn-success">Finish</button>
            </div>
        </div>
        
        <div class="more-products">
            <h4>Might interest you</h4>

            <div id="slide-show" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                    <img src="images/1.jpg" alt="Xbox Serie X">
                    </div>
                    <div class="item">
                    <img src="images/2.jpg" alt="PS5">
                    </div>
                    <div class="item">
                    <img src="images/3.jpg" alt="Router">
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
    </div>

    <div class="table-view" id="second-table">
        <div>
            <h2>Your Console cost:</h1>
        </div>

        <table class="table table-striped" id="table-data">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Partial Price</th>
            <th scope="col">Total Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $totalPrice = 0;
                foreach($EletronicList as $v => $Item){
                    if($Item->name == "Console"){
                        echo "<tr>";
                        echo "<th scope='row'>" . ++$v  ." </th>";
                        echo "<td>".$Item->name."</td>";
                        echo "<td>$".$Item->price."</td>";
                        echo "<td>$".$Item->totalPrice."</td>";
                        echo "</tr>";

                        $totalPrice += $Item->totalPrice;

                        break;
                    }
                }
            ?>
            <tr></tr>
            <tr>
              <th scope="row">Total</th>
              <td></td>
              <td></td>
              <td colspan="2">$<?= $totalPrice ?></td>
            </tr>
        </tbody>
        </table>
    </div>
    
</body>
</html>