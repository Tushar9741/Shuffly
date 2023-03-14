<?php
// $insert = false;
if(isset($_POST[''])){
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
}


    //create  a database connection
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to this db failed due to" . mysqli_connect_error());

    }
    echo "connection succeed";

    //collect post variables

//     $name = $_POST['name'];
//     $gender = $_POST['gender'];
//     $age = $_POST['age'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $desc = $_POST['desc'];


//     $sql = "INSERT INTO `trip`.`trip` (`Name`, `Age`, `Gender`, `Email`, `PhoneNo`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//     // echo $sql;


//     //ececute the query

//     if($con->query($sql) == true){
//         // echo "succesfully inserted";

//         //flag for succesful insertion
//         $insert = true;
//     }
//     else{
//         echo "error: $sql <br> $con->error";
//     }
    
//     //close databse connection

//     $con->close();
// }

