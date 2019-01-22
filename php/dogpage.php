<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="..\css\dogpage.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="..\css\bobgrounds.css" />

</head>
<body>

<div class="navbar-container">
    <div class="navbar-links-container">
        <div class="nav-link">home.</div>
        <div class="nav-link">mountains.</div>
        <div class="nav-link">humans.</div>
        <div class="nav-link">plants.</div>
    </div>
</div>


<div class="dogpage-container">
    <div class="background-container debug">
        <img class="background-img" src="..\img\dogs4.jpg" alt="">
    </div>

    <div class="dogpage-description debug">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consectetur turpis metus, sit amet 
        faucibus eros tristique mollis. Nunc purus diam, vestibulum ac sollicitudin sit amet, tempus et nulla. 
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque varius velit urna, 
        non faucibus purus volutpat quis. Etiam placerat ultrices justo quis venenatis. Sed sit amet maximus velit. Donec nisi risus, 
        congue et ante quis, porta aliquam ante. Suspendisse et dolor vitae lectus fermentum dapibus. Aliquam velit urna, fringilla ac 
        sollicitudin ut, viverra vitae purus. Ut quam nisi, aliquet ac diam at, malesuada tempus ligula.
    </p>

    </div>

</div>
<?php
    include "../db_connection.php";

    $getimg = "SELECT bg_url FROM backgrounds";
    
    $db_result = $conn->query($getimg);  


    $conn = null;
    
?>
    
</body>
</html>