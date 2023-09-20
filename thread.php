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
        <h1>Browse Questions</h1>
    </div>




    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>

    <script src="script.js"></script>

</body>

</html>