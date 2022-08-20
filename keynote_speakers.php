<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keynote Speakers</title>
 <?php $page = 'keynote_speakers'; include('styles.php') ?>
<style>
  .cardd{
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.15),0px 0px 10px rgba(0, 0, 0, 0.2);
    border-radius:8px;
    max-width: 200px;
    --bs-gutter-x: 0rem;
    margin-top:20px;
  }
  .cardd > img{
    height:280px;
    width: 100%;
    margin:auto;
    
    padding:0;
    border-radius:8px 0px;
    --bs-gutter-x: 0rem;
    
  }
</style>
</head>

<body>
<?php include('navnheader.php') ?>

<!-- Content  -->
<div class="container py-5 key_speakers">

      <!-- profile container   -->

      <div class="container mt-1" style="max-width:1000px;">
    <div class="row d-flex justify-content-around">

      <div class="cardd">
        <img src="./img/keynoteSpeakers/BjornSchuller.jpg" alt="Bjorn Schuller" />
        <p class="text-center pt-2">
        <b>Bjorn Schuller</b>  <br>
        <span style="font-size:0.9rem;">Professor</span>  <br>
        <span style="font-size:0.7rem;">AI Imperial College London & University of Augsburg</span> <br>
        <span style="font-size:0.7rem;">CSO, audEERING</span>
        
      </p>
    </div>
    
    <div class="cardd">
      <img src="./img/keynoteSpeakers/Rajiv Gupta.jpg" alt="Rajiv Gupta" />
      <p class="text-center pt-2">
        <b>Dr.Rajiv Gupta</b> <br>
        <span style="font-size:0.9rem;">Associate Professor</span>  <br>
        <span style="font-size:0.7rem;">Materials Science and Engineering</span> <br>
        <span style="font-size:0.7rem;">North Carolina State University, USA</span>
        </p>          
      </div>

    </div>
</div>




      <!-- profile container   -->



      </div>
    </div>

  </div>




<?php include('footer.php') ?>


</body>

</html>
