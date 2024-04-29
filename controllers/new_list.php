<?php

// Debugging script
error_reporting(E_ALL);
ini_set('display_errors', '1');

include("../config/connection.php");


if(isset($_POST["submit"])){
    // echo "hi";
    $name = $_POST["student_name"];
    $register_number = $_POST["register_number"];
    $department = $_POST["department"];
    $book_name = $_POST["book_name"];
    $author = $_POST["author"];
    $category = $_POST["category"];
    $issue_date = $_POST["issue_date"];
    $filename =

    //file upload path

    // To move file in php
    // move_uploaded_file($_FILES["student_image"]["temp_name"], $targetFilePath);
    $student_image = $_FILES["student_image"]["name"];
    $targetDir = "../dist/images/". $student_image;// Declare target filepath // move_uploaded_file($_FILES["student_image"]["temp_name"], $targetFilePath);
    move_uploaded_file($_FILES["student_image"]['temp_name'],$);
    
    $sql = "INSERT INTO students ( student_name, register_number, department, book_name, author, category, issue_date, student_image) VALUES (?,?,?,?,?,?,?,?)";
    $conn->prepare($sql)->execute([ $name, $register_number, $department, $book_name, $author, $category, $issue_date, $student_image]);
    


    echo '<script>alert("Entry added to register successfully")</script>'; 
    echo "<script>window.location=(\"../views/student_list.php\")</script>";
    
    
    
}
$conn = null;
?>