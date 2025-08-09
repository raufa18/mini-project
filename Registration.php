<?php
    echo "<h1>Registration Successful!</h1>";
    echo "User ID: " . htmlspecialchars($_POST['id']) . "<br>";
    echo "Name: " . htmlspecialchars($_POST['name']) . "<br>";
    echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
    echo "User Type: " . htmlspecialchars($_POST['user_type']) . "<br>";
?>