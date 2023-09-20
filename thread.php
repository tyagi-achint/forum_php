<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'partials/_head.php'; ?>


<body>
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
        <h1>Discussion</h1>
        <div class="questionList">
            <ul class="list-unstyled">
                <li class='media'>
                    <img src='images/logo.png' alt='Generic placeholder image'>
                    <div class='media-body'><a href='thread.php?id=$threadId'>
                            <h5 style='color: black;'> $threadTitle</h5>
                            <p style='color: grey;'> " . substr($threadDesc,0,150) . "... </p>
                        </a>
                    </div>
                </li>
                <hr>
                <li class='media'>
                    <div class='media-body'>
                        <h5 style='color: black;'>No Thread Found</h5>
                        <p style='color: grey;'>Be the first person to reply this question</p>
                    </div>
                </li>



            </ul>
        </div>
    </div>




    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>



</body>

</html>