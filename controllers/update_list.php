<?php
 include "../config/connection.php";

error_reporting(E_ALL);
ini_set('display_errors', '1');

$id = $_GET["id"];

// To edit and update details
if(isset($_POST['submit-update']))
    {
        $student_name = $_POST['name'];
        $register_number = $_POST['register_number'];
        $department = $_POST['department'];
        $book_name = $_POST['book_name'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $issue_date = $_POST['issue_date'];
        $return_date = $_POST['return_date'];
        $comments = $_POST['comments'];
        $_POST['name'];

        try{
            $query = "UPDATE students SET student_name=:student_name, register_number=:register_number, department=:department, book_name=:book_name, author=:author, category=:category, issue_date=:issue_date, return_date=:return_date, comments=:comments WHERE id='$id' ";
            $statement = $conn->prepare($query);

            $data = [
                ':student_name' => $student_name,
                ':register_number' => $register_number,
                ':department' => $department,
                ':book_name' => $book_name,
                ':author' => $author,
                ':category' => $category,
                ':issue_date' => $issue_date,                
                ':return_date'=> $return_date,
                ':comments'=> $comments,

            ];
            $query_execute = $statement->execute($data);

            if($query_execute){
                echo '<script>alert("Entry updated successfully")</script>'; 
                echo "<script>window.location=(\"../views/student_list.php\")</script>";
                exit(0);
            }
            else{
               echo "not updated";
                echo "<script>window.location=(\"../views/student_list.php\")</script>";
                exit(0);
    
    
            }



        }catch(PDOException $e)
        {
                echo $e->getMessage();
        }

    }


?>