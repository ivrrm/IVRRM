<?php
include "../includes/connection.php";

if (isset($_POST['submit'])) {
    $shopImg = '';
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    // $contact = $_POST['contact'];
    $shopName = $_POST['shopname'];
    $shopAddress = $_POST['shopaddress'];
    $pincode = $_POST['pincode'];
    $paytmUpi = $_POST['Paytm'];
    // $shopLocation = $_POST['shopLocation'];
    // $state = $_POST['state'];
    $password = $_POST['password'];
    // $confpassword = $_POST['confpassword'];
    $username = $firstName." ".$lastName;
    $tablename = $firstName.$lastName."_".$shopName;

        // if ($_FILES['image']['tmp_name']) {
        //     $uploadDir = "../uploads/" ;
        //     $shopImg = $_FILES['image']['name'];
        //     $imageTmpName = $_FILES['image']['tmp_name'];
        //     move_uploaded_file($imageTmpName,$uploadDir.$shopImg);
        // }

    // $sql = "CREATE TABLE $tablename (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     username VARCHAR(30) NOT NULL, 
    //     email VARCHAR(100) NOT NULL,
    //     shopname VARCHAR(100) NOT NULL,
    //     shopaddress VARCHAR(100) NOT NULL,
    //     pincode VARCHAR(10) NOT NULL,
    //     -- market VARCHAR(3) NOT NULL,
    //     -- stat VARCHAR(3) NOT NULL,
    //     paytm VARCHAR(30) NOT NULL,
    //     -- pic VARCHAR(30) NOT NULL,
    //     pass VARCHAR(30) NOT NULL,
    //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //     )";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Table $tablename created successfully";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }

    $query = "INSERT INTO user (username,email,shopname,shopaddress,pincode,paytm,pass) VALUES ('$username','$email','$shopName','$shopAddress','$pincode','$paytmUpi','$password');";
    if ($conn->query($query) === TRUE) {
        echo "<script>alert('Welcome $username');</script>";
    } else {
        echo "Error creating user: " . $conn->error;
    }
$conn->close();
}