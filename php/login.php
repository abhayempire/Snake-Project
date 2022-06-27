<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "data";

    $conn = mysqli_connect($servername, $username, $pass, $dbname);

    // if($conn){
    //     echo "this is";
    // }
    // else{
    //     echo "hello";
    // }

    if(isset($_POST['button'])){
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE phone = '$phone' && password = '$password' ";

        $data = mysqli_query($conn, $query);
        // echo $data;
        $total = mysqli_num_rows($data);
        // echo $total;
        if($total == 1){
            header('location: ../SnakeGame/index.html');
            // echo "hello";
        }
        else{
            // echo "failed";
            header('location: ../html/usernotexist.html');
        }
    }
?>