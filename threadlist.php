<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'partials/_head.php'; ?>


<body>
    <?php include 'partials/_server.php'; ?>

    <!-- Navbar -->
    <?php include 'partials/_navbar.php'; ?>

    <?php
        
$catId =$_GET['id'];
$catsql = "SELECT  * FROM `categories` WHERE `id` = '$catId';";
$catResult = mysqli_query($con,$catsql);
while ($row = mysqli_fetch_assoc($catResult)){
 
    $catName = $row['name'];
    $catDesc = $row['description'];
    
}

?>

    <!-- Thread Form Submit -->
    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST') {
            $th_title = $_POST['threadTitle'];
            $th_title = str_replace("<", "&lt",  $th_title);
            $th_title = str_replace(">", "&gt",  $th_title);
            $usercode = $_SESSION['usercode'];
            $th_description = $_POST['threadDescription'];
            $th_description = str_replace("<", "&lt", $th_description);
            $th_description = str_replace(">", "&gt", $th_description);
            $th_sql = "INSERT INTO `threads` ( `title`, `description`, `cat_id`, `user_id`, `time`) VALUES ( '$th_title', '$th_description', '$catId', '$usercode', CURRENT_TIMESTAMP);";
            $th_Result = mysqli_query($con,$th_sql);
            if($th_Result){
        $showAlert = true;
        if($showAlert){
            echo"
            <div id='threadAlert'>
            <span id='closeAlert'>&times;</span>
            <p><b>Success! </b>Your thread has been added! Please wait for community to respond. </p>
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


    <!-- Thread List -->
    <div class="threadlist">
        <div class="jumbotron">
            <h1>Welcome to <?php echo $catName ; ?> Forums</h1>
            <h3><?php echo $catDesc ; ?></h3>
            <hr>
            <p>This is peer to peer forum. No Spam / Advertising / Self-promote in the forums / Do not post
                copyright-infringing material / Do not post “offensive” posts, links or images / Do not cross post
                questions / Remain respectful of other members at all times</p>
        </div>
        <!-- Thread Form -->
        <?php 
   
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true'){
echo'<div class="threadform">
<h1>Start a Discussion</h1>
<form action="'.$_SERVER['REQUEST_URI'] .'" method="post">
    <label for="threadTitle">Problem Title</label>
    <input type="text" id="threadTitle" name="threadTitle" required>
    <label for="threadDescription">Ellaborate your Concern</label>
    <input style="height: 30px;" id="threadDescription" type="text" name="threadDescription" required>
    <button type="submit">Submit</button>
</form>
</div>';
    }
    else{
        echo'
        <div class="threadform">
            <h1>Start a Discussion</h1>
            <h4>You need to Login first!</h4>
    </div>';
    }
    ?>


        <!-- Question -->
        <h1>Browse Questions</h1>
        <div class="questionList">
            <ul class="list-unstyled">
                <?php
        
$catId =$_GET['id'];
$threadsql = "SELECT  * FROM `threads` WHERE `cat_id` = '$catId';";
$threadResult = mysqli_query($con,$threadsql);
$threadNoResult = true;
while ($row = mysqli_fetch_assoc($threadResult)){
$threadNoResult = false;
    $threadId = $row['id'];
    $threadTitle = $row['title'];
    $threadDesc = $row['description'];
    
    echo "<li class='media'>
    <img src='images/logo.png' alt='Generic placeholder image'>
    <div class='media-body'><a href='thread.php?id=$threadId'>
  <h5 style='color: black;'> $threadTitle</h5>
  
        <p style='color: grey;'>  "  .substr($threadDesc,0,150).  "... </p></a>
    </div>
</li>
<hr>
    ";
}
if ($threadNoResult){
    echo "<li class='media'>
    <div class='media-body'>
        <h5 style='color: black;'>No Threads Found</h5>
        <p style='color: grey;'>Be the first person to ask a question</p>
    </div>
</li>
    ";
}

?>
            </ul>
        </div>
    </div>


    <!-- Comment Modal -->




    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>



</body>

</html>