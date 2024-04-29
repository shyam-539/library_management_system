<?php
    include "../config/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit and Update Student and Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="../dist/js/script.js"></script>
  <script src="../dist/js/jquery-3.6.0.min.js"></script> <!--Jquery--->
  
</head>
<body>
  <div class="container">
    <h2>Edit and Update Only return date and comments</h2>
    <hr><hr>

    <?php
        if(isset($_GET['id']))
        {
            $student_id = $_GET['id'];
            $query = "SELECT * FROM students WHERE id=$student_id ";// limited to 1 row
            $statement = $conn->prepare($query);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_OBJ);                                 
           
    ?>

    <form method="post" action="../controllers/update_list.php?id=<?php echo $student_id // To pass id?>" class="row">

          
      <div class="col-md-6 mb-3">
        <label for="student_name" class="form-label">Student Name:</label>
        <input type="text" name="name" required class="form-control" value="<?php echo $result->student_name; ?> ">
      </div>
      <div class="col-md-6 mb-3">
        <label for="register_number" class="form-label">Register Number:</label>
        <input type="text" name="register_number" required class="form-control" value="<?php echo $result->register_number; ?> ">
      </div>
      <div class="col-md-6 mb-3">
        <label for="department" class="form-label">Department:</label>
        <select name="department" required class="form-select">
          <option value="mathematics" <?php if($result->department == 'mathematics'){echo "selected";}?>>Mathematics</option>
          <option value="cs" <?php if($result->department == 'cs'){echo "selected";}?>>Computer Science</option>
          <option value="history" <?php if($result->department == 'history'){echo "selected";}?>>History</option>
          <option value="english" <?php if($result->department == 'english'){echo "selected";}?>>English Literature</option>
        </select>
      </div>
      <hr >
      <hr > 
       <div class="col-12">
        <h3>Book Details</h3>
      </div>
      <div class="col-md-6 mb-3">
        <label for="book_name" class="form-label">Book Name:</label>
        <input type="text" name="book_name" required class="form-control" value="<?php echo $result->book_name; ?> ">
      </div>
      <div class="col-md-6 mb-3">
        <label for="author" class="form-label">Author:</label>
        <input type="text" name="author" required class="form-control" value="<?php echo $result->author; ?> ">
      </div>
      <div class="col-md-6 mb-3">
        <label for="category" class="form-label">Category:</label><br>
        <input type="text" name="category" value="<?php echo $result->category; ?>" class="form-control"> 
        <input type="radio" name="category" value="General" checked class="form-check-input" <?php if ($result->category == 'General') {echo "checked";}?>> General 
        <input type="radio" name="category" value="Study" checked class="form-check-input"<?php if ($result->category == 'study') {echo "checked";}?>> Study 
        
        
      </div>
      <div class="col-md-6 mb-3">
        <label for="issue_date" class="form-label">Issue Date:</label>
        <input type="text" name="issue_date" class="form-control" value="<?php echo $result->issue_date; ?> ">
      </div>
      <div class="col-md-6 mb-3">
        <label for="return_date" class="form-label">Return Date:</label>
        <input type="datetime-local" name="return_date" class="form-control" value="<?php echo $result->return_date; ?> ">
      </div>
      <div class="col-12 mb-3">
        <label for="comments" class="form-label">Comments (Optional):</label>
        <textarea name="comments" rows="5" cols="30" class="form-control"><?php echo $result->comments; ?></textarea>
      </div>
      <div class="col-12">
        <button type="submit" name="submit-update" class="btn btn-primary">Update Details</button>
      </div>
    </form>
    <?php
        }
    ?>
      
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFOnpDpii0CWuOZon7VWgXhCq+8MKijAA8K4h8S+grcYH8ylOhwm+xbz
