<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'partials/_head.php'; ?>


<body>
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
        <h1>Browse Questions</h1>
        <div class="questionList">
            <ul class="list-unstyled">
                <?php
        
$catId =$_GET['id'];
$threadsql = "SELECT  * FROM `threads` WHERE `cat_id` = '$catId';";
$threadResult = mysqli_query($con,$threadsql);
while ($row = mysqli_fetch_assoc($threadResult)){
    $threadId = $row['id'];
    $threadTitle = $row['title'];
    $threadDesc = $row['description'];
    
    echo "<li class='media'>
    <img src='images/logo.png' alt='Generic placeholder image'>
    <div class='media-body'><a href='thread.php?id=$threadId'>
        <h5 style='color: black;'> $threadTitle</h5>
        <p style='color: grey;'>  " . substr($threadDesc,0,150) . "... </p></a>
    </div>
</li>
<hr>
    ";
}

?>
            </ul>
        </div>
    </div>



    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>

    <script src="script.js"></script>

</body>

</html>