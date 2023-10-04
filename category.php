<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'partials/_head.php'; ?>
<?php include 'partials/_server.php'; ?>


<body>
    <!-- Navbar -->
    <?php include 'partials/_navbar.php'; ?>

    <!-- Form Submit -->
    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST') {
            $cat_title = $_POST['categoryTitle'];
            $cat_title = str_replace("<", "&lt",  $cat_title);
            $cat_title = str_replace(">", "&gt",  $cat_title);
            $usercode = $_SESSION['usercode'];
            $cat_description = $_POST['categoryDescription'];
            $cat_description = str_replace("<", "&lt", $cat_description);
            $cat_description = str_replace(">", "&gt", $cat_description);
            date_default_timezone_set('Asia/Kolkata');
            $currentTime=date('jS F Y h:i A');
            $cat_sql = "INSERT INTO `cat_request` ( `title`, `description`,  `user_id`, `time`) VALUES ( '$cat_title', '$cat_description',  '$usercode', '$currentTime');";
            $cat_Result = mysqli_query($con,$cat_sql);
            if($cat_Result){
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

    <!-- Add Category -->
    <div class="threadlist">
        <div class="jumbotron">
            <h1>Want to add a new category?</h1>
            <hr>
            <?php 
   if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true'){
echo'<div class="threadform">
<form action="'.$_SERVER['REQUEST_URI'] .'" method="post">
    <label for="categoryTitle">Category Title</label>
    <input type="text" id="categoryTitle" name="categoryTitle" required>
    <label for="categoryDescription">Ellaborate your category</label>
    <textarea id="categoryDescription" type="text" rows="5" name="categoryDescription" required></textarea>
    <button type="submit">Submit</button>
</form>
</div>';
   }else{
        echo' 
        <div style="margin-bottom:37vh;" class="threadform">
            <h4>You need to Login first!</h4>
    </div>';}
    
    ?>
        </div>
    </div>


    <div style="margin-top:50px;" id="category">
        <div class="cards">
            <?php
$categorysql = "SELECT  * FROM `categories`;";
$categoryResult = mysqli_query($con,$categorysql);
while ($row = mysqli_fetch_assoc($categoryResult)){
    $categoryId = $row['id'];
    $categoryName = $row['name'];
    $categoryDesc = $row['description'];
    $searchCategoryName = str_replace(' ', '', $categoryName);
    echo"<div class='card' style='background-image: url(https://source.unsplash.com/500x400/?programming,$searchCategoryName);'><a href='threadlist.php?id=$categoryId'>
    <div class='cardData'>
        <h3> $categoryName </h3>
        <p> " . substr($categoryDesc,0,150) . "... </p>
        <button>View</button>
    </div></a>
</div>";
}

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