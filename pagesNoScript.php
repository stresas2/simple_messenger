<?php
    
    require_once("db.php");

    // Get page from url
    if (isset($_GET['page'])) {
        $currentpage = $_GET['page'];
    } else {
        $currentpage = 1;
    }

    // Set pages parameters
    $no_of_records_per_page = 7;
    $total_pages_sql = "SELECT COUNT(*) FROM messages";
    $result = mysqli_query($db ,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    // Check if current page is valid and is numeric if not return to 0
    if(($currentpage > $total_pages) or ($currentpage < 0 or (!is_numeric($currentpage)))){
        $currentpage = 1;
    }

    $offset = ($currentpage - 1) * $no_of_records_per_page; 

    $sql = "SELECT * FROM messages ORDER BY time DESC LIMIT $offset, $no_of_records_per_page";

    if ($result2 = mysqli_query($db, $sql)) {

        $newArr = array();
        /* fetch associative array */
        while ($db_field = mysqli_fetch_assoc($result2)) {
            $newArr[] = $db_field;
        }
 
    }

    // Count messages
    $length = count($newArr);
    
    // Print out all messages
    echo "<ul>";
    if($length > 0){
        for ($x = 0; $x < $length; $x++) {
            echo "<li>";
            echo "<span>" . $newArr[$x]["time"] . "</span>";
            if($newArr[$x]["email"]){
                echo "<a href='mailto:" . $newArr[$x]["email"] . "'>" . $newArr[$x]["fullname"] . "</a>, ";
            }else{
                echo $newArr[$x]["fullname"] . ", ";
            }
            echo $newArr[$x]["age"] . "  m.<br />";
            echo $newArr[$x]["message"];
            echo "</li>";
        }
    }else{
        echo "<strong>Šiuo metu žinučių nėra. Būk pirmas!</strong>";
    }
    echo "</ul>";

    // Print out paginatiom
    echo "<p id='pages'>";

    if($currentpage > 1){
        echo "<a href='index.php?page=" . ($currentpage-1 )."' title='atgal'>atgal </a>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $currentpage) {
          echo $i . " ";
        } else {
          echo "<a title=" . $i . "' href='index.php?page=" . $i . "'>" . $i . " </a>";
        }
      }

    if($currentpage < $total_pages){
        echo "<a href='index.php?page=" . ($currentpage+1 )."' title='pirmyn'> pirmyn</a>";
    }

    echo "</p>";
    
?>