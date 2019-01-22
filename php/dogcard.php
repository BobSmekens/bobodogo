<!DOCTYPE html>
<html>
<head>
   
    <title>dogcard</title>

</head>
<body>


<?php
    include "../db_connection.php";

    $query = "SELECT bg_id, bg_name, bg_url, bg_category FROM backgrounds";
    
    $db_result = $conn->query($query);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="dog-card">' .
             '<a href="dogpage.php?user_ID=' . $row['bg_id'] . '">' .
             '<img class="dog-img" src="../' . $row['bg_url'] . '" alt="' . $row['bg_name'] . '" style="width:100%">' .
             '</a>' .
             '<h1>' . $row['bg_name']  . ' '. '</h1>' .
             '<p class="title">' . $row['bg_category'] . '</p>' .           
             '</div>';
       
    }       

    $conn = null;
    
?>
</body>
</html>