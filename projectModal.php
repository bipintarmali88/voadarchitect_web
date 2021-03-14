<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  /* Hide the images by default */
  .mySlides {
    display: none;
  }

  /* Add a pointer when hovering over the thumbnail images */
  .cursor {
    cursor: pointer;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 40%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  #projects-full-view img{
    box-shadow: 0 0 0 5px #8c8c8c;
    transform: scale(0.90);
    margin-left: -20px;
  }

  #projects-thumb img:hover{
    box-shadow: 0 0 0 5px #8c8c8c;
    transform: scale(0.95);
  }

</style>

<body>



  <div  class="row m-0 p-0">
    
    <div id="projects-full-view" class="col-sm-10 m-0 p-0">
      <?php
      $projectName=$_POST['projectName'];
      $dir = "resources/img/projects/".$projectName."/";      
      // Open a directory, and read its contents
      $files = scandir($dir);
      foreach ($files as $file) {
        if (in_array($file, array(".", ".."))) continue;
      ?>
        <div class="col-sm-12 mySlides text-center">
          <img src="<?php echo $dir . $file ?>" class="" style="width:auto;height:100%;">
        </div>
      <?php
      }
      ?>
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <div id="projects-thumb" class="col-sm-2 m-0 p-2 pt-3" style="height: 540px;overflow-y: auto">
      <?php
      // Open a directory, and read its contents
      $files = scandir($dir);
      $slide =-2;
      foreach ($files as $file) {
        $slide++;
        if (in_array($file, array(".", ".."))) continue;        
      ?>
        <div class="col-sm-12 p-1">
          <img class="demo cursor" src="<?php echo $dir . $file ?>" class="zoom img-fluid" style="width:100%;" onclick="currentSlide(<?php echo $slide?>)" alt="The Woods">
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>

</body>

</html>