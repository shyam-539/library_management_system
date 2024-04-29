<?php
    include "../config/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Borrowed Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <h1>Library Register</h1>
        <hr>
        <hr>
        <table class="table table-striped">
            <thead>
            <a href="add_student.php" class="btn btn-dark mb-3">Add New &nbsp;<i class="fa-solid fa-plus"></i></a>
            <hr>
            <hr>
                <tr>
                    <th>Student Image</th>
                    <th>Student Name</th>
                    <th>Register Number</th>
                    <th>Department</th>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Issue Date</th>
                    <th>Return Date</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <?php
                $query = "SELECT * FROM students";
                $stmt = $conn->prepare($query);
                $stmt->execute();

                // $stmt->setFetchMode(PDO::FETCH_OBJ);

                $result = $stmt->fetchAll();
                if ($result){

                    foreach($result as $row)
                    {
                        ?>
                        <tr>
                            <td><?=$row['student_image']?></td>
                            <td><?= $row['student_name'] ?></td>
                            <td><?= $row['register_number'] ?></td>
                            <td><?= $row['department']?></td>
                            <td><?= $row['book_name'] ?></td>
                            <td><?= $row['author'] ?></td>
                            <td><?= $row['category'] ?></td>
                            <td><?= $row['issue_date'] ?></td>
                            <td><?= $row['return_date'] ?></td>
                            <td><?= $row['comments'] ?></td>
                            <td>
                                <a href="../views/edit_student_list.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="../controllers/delete_list.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php

                    }

                }else{
                    ?>
                    <tr>
                        <td colspan="9">No Record Found</td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</body>
</html>
