<?php
    // Connect to MySQL
    include("dbconnect.php");

    // Prepare the SQL statement
    $SQL = "INSERT INTO rfid.cardinfo (uid ,busy) VALUES ('".$_GET["uid"]."', '".$_GET["busy"]."')";     

    // Execute SQL statement
    mysql_query($SQL);

    // Go to the review_data.php (optional)
    header("Location: review_data.php");
?>