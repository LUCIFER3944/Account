<?php
require_once "User.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $user = new User();
    $result = $user->register($fname, $lname, $email, $phone, $address, $password);

    if ($result === true) {
        echo "User registered successfully!";
    } else {
        echo $result;
    }
}
?>
