<?php
  include "inc/dbconnection.php";
?>
<!DOCTYPE HTML>
<html>
<head lang="en">
  <title>Contact page</title>
<?php include "header.php" ?>
</head>
<body>
  <div class="banner">
    <?php include "inc/navigation.php" ?>
    </div>
  <section>
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
            <label for="Company">Company</label>
            <input type="text" id="company" name="company" placeholder="Company" required />
          </div>
          <div>
            <label for="email">Email<input type="email" id="email" name="email" placeholder="Email" required /></label>
          </div>
          <div>
            <p>Comments:</p>
          <textarea placeholder="Please add comments here..." cols="80" rows="10" name="comment" id="comment" required /></textarea>
        </div>
        <div id="submitbtn">
         <input type="submit" name="submit" value="Submit"/>
       </div>
      </form>
    </div>
    <div>
      <?php
       if(!empty($_POST)){
         try {
          $db = new PDO('mysql:dbname=Portfolio; host=localhost', 'root', 'root');
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $info = 'INSERT INTO  Contact(comment, firstname, lastname, email, company)
          VALUES( :comment, :firstname, :lastname, :email, :company)';
          $givenInfo = $db->prepare($info);
          $givenInfo->bindParam(':firstname',$_POST['firstname']);
          $givenInfo->bindParam(':lastname',$_POST['lastname']);
          $givenInfo->bindParam(':email',$_POST['email']);
          $givenInfo->bindParam(':company', $_POST['company']);
          $givenInfo->bindParam(':comment',$_POST['comment']);
          $givenInfo->execute();
        } catch(Exception $e){
            echo $e->getMessage();
            exit;
          }
      }
        ?>
    </div>
  </section>
<script src="lib/js/javascript.js"></script>
<?php
  include "footer.php";
 ?>
</body>
</html>
