


$(document).ready(function() {
    $("#student-book-form").submit(function(event) {
      event.preventDefault(); // Prevent default form submission
      
      // Hide any previous error messages
      $(".error-message").addClass("d-none").empty();
      $("#error-messages").addClass("d-none").empty();
 
      // Collect form data
      var formData = $(this).serialize();
      var isValid = true; // Flag to track overall form validity
 
      // Perform client-side validation
      if ($("#student_name").val().length < 3) {
        $("#student_name_error").text("Student name must be at least 3 characters long.").removeClass("d-none");
        isValid = false;
      } else if (!/^[A-Za-z ]+$/.test($("#student_name").val())) {
        $("#student_name_error").text("Student name must contain only alphabets and spaces.").removeClass("d-none");
        isValid = false;
      }
 
      // Similarly, add validation for other fields here
 
      // If form is not valid, prevent AJAX submission
      if (!isValid) {
        $("#error-messages").text("Please fix the errors before submitting.").removeClass("d-none");
        return;
      }
 
      // AJAX request to the server-side script
      $.ajax({
        url: "../controllers/new_list.php",
        type: "POST",
        data: formData,
        success: function(response) {
          // Handle successful response here
          console.log(response); // Log the response for debugging
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Handle request failure here
          console.error(textStatus + ": " + errorThrown);
        }
      });
    });
  });
 