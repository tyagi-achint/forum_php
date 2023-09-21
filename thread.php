<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'partials/_head.php'; ?>


<body>
    <?php include 'partials/_server.php'; ?>

    <!-- Navbar -->
    <?php include 'partials/_navbar.php'; ?>

    <?php
        
        $threadId =$_GET['id'];
        $threadsql = "SELECT  * FROM `threads` WHERE `id` = '$threadId';";
        $threadResult = mysqli_query($con,$threadsql);
        while ($row = mysqli_fetch_assoc($threadResult)){
         
            $threadTitle = $row['title'];
            $threadDesc = $row['description'];
            
        }
        
        ?>


    <!-- Comment Form Submit -->
    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST' &&isset($_POST['threadComment'])) {
            
            $Cmnt_comment = $_POST['threadComment'];
            $Cmnt_sql = "INSERT INTO `comments` ( `comment`, `thread_id`, `user_id`, `time`) VALUES ( '$Cmnt_comment', '$threadId', '0', CURRENT_TIMESTAMP);";
            $Cmnt_Result = mysqli_query($con,$Cmnt_sql);
            if($Cmnt_Result){
        $showAlert = true;
        if($showAlert){
            echo"
            <div id='threadAlert'>
            <span id='closeAlert'>&times;</span>
            <p><b>Success!  </b>Your Comment has been added!  Thankyou for your comment. </p>
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
            <h1><?php echo $threadTitle ; ?></h1>
            <hr>
            <h3><?php echo $threadDesc ; ?></h3>
            <br>
            <p>Posted by : <b>Achint </b>
            </p>
        </div>

        <div class="threadform">
            <h1>Enter a Comment</h1>
            <form action="<?php echo$_SERVER['REQUEST_URI'] ?>" method="post">
                <label for="threadComment">Your Comment</label>
                <textarea id="threadComment" type='text' rows="5" name='threadComment' required></textarea>
                <button type='submit'>Submit</button>
            </form>
        </div>


        <h1>Comments</h1>
        <div class="questionList">
            <ul class="list-unstyled">

                <?php
$threadId =$_GET['id'];
        $commentssql = "SELECT  * FROM `comments` WHERE `thread_id` = '$threadId';";
        $commentsResult = mysqli_query($con,$commentssql);
        $commentsNoResult = true;
        while ($row = mysqli_fetch_assoc($commentsResult)){
        $commentsNoResult = false;
            $commentsId = $row['id'];
            $comment = $row['comment'];
            $commentTime=$row['time'];
            $formattedTime = date('jS F Y h:i A', strtotime($commentTime));

            echo "
                <li class='media'>
                    <img src='images/logo.png' alt='Generic placeholder image'>
                    <div class='media-body' style='cursor: pointer;'>
                        <h5 style='color: black;  font-weight: 900;'> User <span
                                style='font-size:.8rem ;font-weight: 600;'>($formattedTime)</span></h5>
                                <div id='commentData'>
                                <p class='commentVisible' style='color: grey;'> $comment </p>
        </div>
                        
                    </div>
                </li>
                <hr>
        
               " ;


                }
                if ($commentsNoResult){
                echo "<li class='media'>
                    <div class='media-body'>
                        <h5 style='color: black;'>No Comment Found</h5>
                        <p style='color: grey;'>Be the first person to comment on this question</p>
                    </div>
                </li>
                ";
                }

                ?>
            </ul>
        </div>

    </div>
    <!-- Comment Thread -->



    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>



</body>

</html>