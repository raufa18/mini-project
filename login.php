<?php
    echo "<h1>Login Attempt</h1>";
    echo "User ID: " . htmlspecialchars($_POST['user_id']) . "<br>";
    echo "Password: " . htmlspecialchars($_POST['password']) . "<br>";
    if (isset($_POST['remember_me'])) {
        echo "Remember Me: Yes";
    } else {
        echo "Remember Me: No";
    }
?>