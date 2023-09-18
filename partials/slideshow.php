<?php
echo'<div class="slideshow-container">
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<div class="slide fade">
    <img src="https://source.unsplash.com/1700x600/?java" alt="Image 1">
</div>
<div class="slide fade">
    <img src="https://source.unsplash.com/1700x600/?books" alt="Image 2">
</div>
<div class="slide fade">
    <img src="https://source.unsplash.com/1700x600/?css" alt="Image 3">
</div>

<a class="next" onclick="plusSlides(1)">&#10095;</a>
<div class="dotBox">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>'
?>