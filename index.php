<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'partials/_head.php'; ?>
<?php include 'partials/_server.php'; ?>



<body>
    <!-- Navbar -->
    <?php include 'partials/_navbar.php'; ?>
    <!-- Slideshow -->
    <?php include 'partials/_slideshow.php'; ?>

    <!-- Categories -->
    <div style="margin-top:50px;" id="category">
        <div class="cards">
            <?php
$categorysql = "SELECT  * FROM `categories` LIMIT 5;";
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
$con->close();
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





    <!-- ScrollBar script -->
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function showSlides(n) {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        slides.forEach((slide) => (slide.style.display = 'none'));
        dots.forEach((dot) => dot.classList.remove('active'));
        slides[slideIndex - 1].style.display = 'block';
        dots[slideIndex - 1].classList.add('active');
    }

    function autoSlides() {
        showSlides((slideIndex += 1));
        setTimeout(autoSlides, 5000);
    }
    autoSlides();

    function plusSlides(n) {
        showSlides((slideIndex += n));
    }

    function currentSlide(n) {
        showSlides((slideIndex = n));
    }
    </script>

</body>

</html>