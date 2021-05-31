<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
/* Hide the images by default */
.mySlides {
  display: none;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 8.5s;
  animation-name: fade;
  animation-duration: 8.5s;
}
@-webkit-keyframes fade {
  from {opacity: .9}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .9}
  to {opacity: 1}
}
</style>

  <h1 class="text-center"><?php echo $data['title']; ?></h1>
  <br>

   <!-- Slideshow container -->
<div >

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <img src="../public/img/image1.png" style="width:100%;height: 500px;">
</div>

<div class="mySlides fade">
  <img src="../public/img/image2.png" style="width:100%;height: 500px;">
</div>

<div class="mySlides fade">
  <img src="../public/img/image3.png" style="width:100% ;height: 500px; ">
</div>

<div class="mySlides fade">
  <img src="../public/img/image4.png" style="width:100%;height: 500px;">
</div>

<div class="mySlides fade">
  <img src="../public/img/image5.png" style="width:100%;height: 500px;">
</div>

<div class="mySlides fade">
  <img src="../public/img/image6.png" style="width:100%;height: 500px;">
</div>

</div>
<br>


<p class="lead jumbotron jumbotron-flud"><?php echo $data['description']; ?></p>
  <p class="text-center">Web Application Version: <strong><?php echo APPVERSION; ?></strong></p>
  </div> 
  <script>
 var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); 
} 
  </script>
<?php require APPROOT . '/views/inc/footer.php'; ?>