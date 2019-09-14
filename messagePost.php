<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //sql insert
    require_once("db.php");
    $test = utf8_encode($_POST['test']);
    $data = json_decode($test);

    $fullname = $data->fullname;
    $age = $data->age;
    $email = $data->email;
    $message = $data->message;

    $sql = "INSERT INTO messages (fullname, age, email, message) VALUES ('$fullname', '$age', '$email', '$message')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    
}
?>