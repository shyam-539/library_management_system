<?php
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "library";

    // create connection using try and catch
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check whether connected or not

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e -> getMessage();
      }
 ?>