<?php

    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "data";

    $conn = mysqli_connect($servername, $username, $pass, $dbname);

    // if($conn){
    //     echo "Connection OK";
    // }
    // else{
    //     echo "Connection Failed ".mysqli_connect_error();
    // }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];

        // echo "$name";
        // echo "$phone";
        // echo "$password";
        // echo "$conpassword";

        $query = "INSERT INTO users VALUES ('$name', '$phone', '$password', '$conpassword')";

        $data = mysqli_query($conn, $query);


        if($data == 1){
            header('location: ../SnakeGame/index.html');
        }
        else{
            echo "failed";
        }

?>