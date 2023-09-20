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
    <h1>Browse Categories</h1>
    <div id="category">
        <div class="cards">
            <?php
        
$categorysql = "SELECT  * FROM `categories`;";
$categoryResult = mysqli_query($con,$categorysql);
while ($row = mysqli_fetch_assoc($categoryResult)){
    $categoryId = $row['id'];
    $categoryName = $row['name'];
    $categoryDesc = $row['description'];
    echo"<div class='card' style='background-image: url(https://source.unsplash.com/500x400/?$categoryName,programming);'>
    <div class='cardData'>
        <h3> $categoryName </h3>
        <p> " . substr($categoryDesc,0,150) . "... </p>
        <button><a href='threadlist.php?id=$categoryId'>View</a></button>
    </div>
</div>";
}
$con->close();
?>
        </div>
    </div>




    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>




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