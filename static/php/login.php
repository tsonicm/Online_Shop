<?php
    //validate the user and if invalid, show error message
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost", "root", "", "ewd");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM credentials WHERE username='".$_POST["username"]."' AND password='".$_POST["password"]."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                header("Location: ../../index.html");
            }
        } else {
            header("Location: ../../login.html");
        }
        $conn->close();
    }
?>