<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'partials/_head.php'; ?>
<?php include 'partials/_server.php'; ?>



<body>
    <!-- Navbar -->
    <?php include 'partials/_navbar.php'; ?>

    <!-- Contact Form -->
    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST') {
            $contact_name = $_POST['contactName'];
            $contact_email = $_POST['contactEmail'];
            $contact_title = $_POST['contactTitle'];
            $contact_description = $_POST['contactDescription'];
            $contact_title = str_replace("<", "&lt",  $contact_title);
            $contact_title = str_replace(">", "&gt",  $contact_title);
            $usercode = $_SESSION['usercode'];
            $contact_description = str_replace("<", "&lt", $contact_description);
            $contact_description = str_replace(">", "&gt", $contact_description);
            $contact_sql = "INSERT INTO `contact_request` (`name`, `email`, `title`, `description`, `user_id`, `time`) VALUES (' $contact_name', ' $contact_email', ' $contact_title', ' $contact_description', '$usercode', CURRENT_TIMESTAMP);";
            $contact_Result = mysqli_query($con,$contact_sql);
            if($contact_Result){
        $showAlert = true;
        if($showAlert){
            echo"
            <div id='threadAlert'>
            <span id='closeAlert'>&times;</span>
            <p><b>Success! </b>Your request has been sent! Please wait for community to check it. </p>
        </div>";
        }
        echo"<script>
        let closeAlert = document.getElementById('closeAlert');
        let threadAlert = document.getElementById('threadAlert');
        closeAlert.onclick = function() {
            threadAlert.style.display = 'none';
        }
        </script>";
            }
        }        
        ?>

    <!-- Contact -->

    <div class="threadlist">
        <div class="jumbotron">
            <h1>Want to connect?</h1>
            <hr>
            <?php 
   if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true'){
echo'<div class="threadform">
<form action="'.$_SERVER['REQUEST_URI'] .'" method="post">
<input type="text" name="contactName" placeholder="Name" required>
<input type="email" name="contactEmail" placeholder="Email" required>
<input type="text" name="contactTitle" placeholder="Title" required>
<textarea  type="text" rows="5" name="contactDescription" placeholder="Description" required></textarea>
<button type="submit">Submit</button>
</form>
</div>';
   }else{
        echo' 
        <div style="margin-bottom:40vh;"class="threadform">
            <h4>You need to Login first!</h4>
    </div>';}
    
    ?>
        </div>
    </div>




    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>

    <!-- SignUp Alert -->
    <?php include 'partials/_signupAlert.php'; ?>
    <!-- Reset Alert -->
    <?php include 'partials/_resetPassAlert.php'; ?>
    <!-- Login Alert -->
    <?php include 'partials/_loginAlert.php'; ?>


</body>

</html>