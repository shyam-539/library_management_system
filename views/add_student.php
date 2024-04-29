<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <title>Add Student and Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="../dist/js/jquery-3.6.0.min.js"></script> <!--Jquery--->
  <script src="../dist/js/script.js"></script><!--Js--->
  
</head>
<body>
  <div class="container">
    <h2>Add Student and Book</h2>
    <hr>
    <hr>
    <form method="post" action="../controllers/new_list.php" class="row" enctype="multipart/form-data">
      <!-------------Image upload fiels------------>
      <div class="mb-3">
        <h3>Upload image :</h3> 
        <input type="file" name="student_image" required>
      </div>  
      <div class="col-md-6 mb-3">
        <label for="student_name" class="form-label">Student Name:</label>
        <input type="text" name="student_name" pattern="[A-Za-z]{3-35}" required class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label for="register_number" class="form-label">Register Number:</label>
        <input type="text" name="register_number" required class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label for="department" class="form-label">Department:</label>
        <select name="department" required class="form-select">
          <option value="mathematics">Mathematics</option>
          <option value="cs">Computer Science</option>
          <option value="history">History</option>
          <option value="english">English Literature</option>
        </select>
      </div>
      <hr >
      <hr >
      <div class="col-12">
        <h3>Book Details</h3>
      </div>
      <div class="col-md-6 mb-3">
        <label for="book_name" class="form-label">Book Name:</label>
        <input type="text" name="book_name" required class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label for="author" class="form-label">Author:</label>
        <input type="text" name="author" required class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label for="category" class="form-label">Category:</label><br>
        <input type="radio" name="category" value="General"  class="form-check-input"> General
        <input type="radio" name="category" value="Study" required class="form-check-input"> Study
      </div>
      <div class="col-md-6 mb-3">
        <label for="issue_date" class="form-label">Issue Date:</label>
        <input type="datetime-local" name="issue_date" required class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label for="return_date" class="form-label">Return Date:</label>
        <input type="date" name="return_date" class="form-control">
      </div>
      <div class="col-12 mb-3">
        <label for="comments" class="form-label">Comments (Optional):</label>
        <textarea name="comments" rows="5" cols="30" class="form-control"></textarea>
      </div>
      <div class="col-12">
        <button type="submit" name="submit" class="btn btn-primary">Add Student and Book</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFOnpDpii0CWuOZon7VWgXhCq+8MKijAA8K4h8S+grcYH8ylOhwm+xbz
