<?php
    include "../config/connection.php"; // connect to db

    // Delete Function
    echo $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id=?";
    $statement = $conn->prepare($sql);
    $statement ->execute([$id]);

    if($sql){
        echo '<script>alert("Entry deleted successfully")</script>'; 
        echo "<script>window.location=(\"../views/student_list.php\")</script>";
        exit(0);
    }
    else{
        echo '<script>alert("Entry Not deleted, Sorry!")</script>'; 
        echo "<script>window.location=(\"../views/student_list.php\")</script>";
        exit(0);
    }

?>