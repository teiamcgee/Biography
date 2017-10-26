<?php
  include "inc/dbconnection.php";
?>
<!DOCTYPE HTML>
<html>
<head lang="en">
  <title>Contact page</title>
  <!--Header information  -->
<?php include "header.php" ?>
</head>
<body>
  <div class="banner">
    <!-- Navbar -->
    <?php include "inc/navigation.php" ?>
    </div>
  <section>
    <!-- Contact information form -->
    <h1 class="contact-h1">I'm so excited to hear from you!</h1>
    <div class="form-content">
       <form id="form" name="form" action="thankyou.php"  method="POST">
          <div>
            <label for="firstname">First Name<input type="text" id="firstname" name="firstname" placeholder="First Name" required/></label>
          </div>
          <div>
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" placeholder="Last Name" required />
          </div>
          <div>
            <label for="company">Company</label>
            <input type="text" id="company" name="company" placeholder="Company" required />
          </div>
          <div>
            <label for="email">Email<input type="email" id="email" name="email" placeholder="Email" required /></label>
          </div>
          <div>
            <p>Comments:</p>
          <textarea placeholder="Please add comments here..." cols="80" rows="10" name="comment" id="comment" required></textarea>
        </div>
        <div id="submitbtn">
         <input type="submit" name="submit" value="Submit"/>
       </div>
      </form>
    </div>
    <div>
      <?php
      // If there is something being sent to the database
       if(!empty($_POST)){
         try {
          $db = new PDO('mysql:dbname=Portfolio; host=localhost', 'root', 'root');
          // Make a new connection to the database
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // Check to if there are errors
          $info = 'INSERT INTO  Contact(comment, firstname, lastname, email, company)
          VALUES( :comment, :firstname, :lastname, :email, :company)';
          // Insert the information into the table in the correct fields
          $givenInfo = $db->prepare($info);
          //  prepare the database
          $givenInfo->bindParam(':firstname',strip_tags($_POST['firstname']));
          // Bind the firstname value from the form to the firstname value of the table
          $givenInfo->bindParam(':lastname',strip_tags($_POST['lastname']));
          // bind the last name value of the form with the lastname value of the table
          $givenInfo->bindParam(':email',strip_tags($_POST['email']));
          // bind the email value of the form with the email value of the table
          $givenInfo->bindParam(':company',strip_tags($_POST['company']));
          // bind the company value of the form witht the email value of the table
          $givenInfo->bindParam(':comment',strip_tags($_POST['comment']));
          // bind the comment value of the form with the comment value of the table
          $givenInfo->execute();
          // Run the query
        } catch(Exception $e){
          // check to see if there are errors
            echo $e->getMessage();
            exit;
          }
      }
        ?>
    </div>
  </section>
<?php
// footer
  include "footer.php";
 ?>
