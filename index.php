<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include 'partials/head.php'; ?>
<style>

</style>

<body>
    <!-- Navbar -->
    <?php include 'partials/navbar.php'; ?>
    <?php include 'partials/slideshow.php'; ?>

    <h1>Categories</h1>
    <div id="category">
        <div class="cards">

            <div class="card">

                <div class="cardData">
                    <h3>Hello</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, quibusdam?</p>
                    <button><a href="">View</a></button>
                </div>
            </div>
            <div class="card">

                <div class="cardData">
                    <h3>Hello</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, quibusdam?</p>
                    <button><a href="">View</a></button>
                </div>
            </div>
            <div class="card">

                <div class="cardData">
                    <h3>Hello</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, quibusdam?</p>
                    <button><a href="">View</a></button>
                </div>
            </div>
            <div class="card">

                <div class="cardData">
                    <h3>Hello</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, quibusdam?</p>
                    <button><a href="">View</a></button>
                </div>
            </div>
            <div class="card">

                <div class="cardData">
                    <h3>Hello</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, quibusdam?</p>
                    <button><a href="">View</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'partials/footer.php'; ?>

    <script src="script.js"></script>
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