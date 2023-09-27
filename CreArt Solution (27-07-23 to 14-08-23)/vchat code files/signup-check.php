<?php
session_start();
include "core/classes/DB.php";

if (
    isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])
    && isset($_POST['name']) && isset($_POST['rewrite'])
) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $email = validate($_POST['email']);

    $re_pass = validate($_POST['rewrite']);
    $name = validate($_POST['name']);

    $user_data = 'username=' . $username . '&name=' . $name;


    if (empty($username)) {
        header("Location: signup.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($password)) {
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: signup.php?error=Re Password is required&$user_data");
        exit();
    } else if (empty($email)) {
        header("Location: signup.php?error=Email is required&$user_data");
        exit();
    } else if (empty($name)) {
        header("Location: signup.php?error=Name is required&$user_data");
        exit();
    } else if ($password !== $re_pass) {
        header("Location: signup.php?error=Password  does not match&$user_data");
        exit();
    } else {

        // hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE username='$username' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=Username already exist&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(username, password, name, email) VALUES('$username', '$password', '$name', '$email')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: signup.php?success=Your account has been created successfully. Please Login ");
                exit();
            } else {
                header("Location: signup.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }

} else {
    header("Location: signup.php");
    exit();
}