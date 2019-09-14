<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    require_once("db.php");

    $sql = "SELECT * FROM messages ORDER BY time DESC";

    if ($result2 = mysqli_query($db, $sql)) {

        $newArr = array();
        /* fetch associative array */
        while ($db_field = mysqli_fetch_assoc($result2)) {
            $newArr[] = $db_field;
        }
        echo json_encode($newArr); // get all products in json format. 
 
    }
    
}
?>