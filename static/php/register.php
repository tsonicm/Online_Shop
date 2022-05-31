<?php
    //add the user to the database
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost", "root", "", "ewd");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO credentials (username, password) VALUES ('".$_POST["username"]."', '".$_POST["password"]."')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../../login.html");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>