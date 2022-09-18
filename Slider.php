<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



</head>
<style>
/* .carousel-inner > .item > img { */
/*   min-width: 100%; */
/*   width: 100%; */
/* } */
.carousel-inner .carousel-item-right.active,
.carousel-inner .carousel-item-next {
  transform: translateX(33.33%);
}

.carousel-inner .carousel-item-left.active, 
.carousel-inner .carousel-item-prev {
  transform: translateX(-33.33%)
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}

.carousel-item img {width: 100%; height: 300px;}


 .carousel-control-prev-icon, 
.carousel-control-next-icon {
  height: 100px; 
  width: 100px; 
   outline: black; 
   background-size: 100%, 100%; 
   border-radius: 50%; 
  border: 4px solid black; 
   background-image: black; 
   color:white; 
} 
/* .carousel-inner */
/* { */
/*   height:400px; */
/*   overflow:visible !important; */
  
/* } */
.carousel .carousel-inner {
  overflow: visible;
  text-align: center
}
/* .carousel-control-next-icon:after */
/* { */
/*   content: '>'; */
/*   font-size: 55px; */
/*   color: black; */
/* } */

/* .carousel-control-prev-icon:after { */
/*   content: '<'; */
/*   font-size: 55px; */
/*   color: black; */
/* } */
</style>
<body>

<div class="container">
<div class="row">
<div class="col-sm-12">

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" style="height:300px">
    <div class="carousel-item active">
      <img src="image/slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/slider7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/slider4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/slider8.jpg" class="d-block w-100" alt="...">
    </div>
<!--     <div class="carousel-item"> -->
<!--       <img src="image/screenshot-6.png" class="d-block w-100" alt="..."> -->
<!--     </div> -->
<!--     <div class="carousel-item"> -->
<!--       <img src="image/screenshot-7.png" class="d-block w-100" alt="..."> -->
<!--     </div> -->
    <button class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
  </div>
  <!--  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="color:black">-->
<!--     <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
<!--     <span class="visually-hidden">Previous</span> -->
<!--   </button> -->
<!--   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"> -->
<!--     <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
<!--     <span class="visually-hidden">Next</span> -->
<!--   </button> -->

</div>


<!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"> -->
<!--   <div class="carousel-inner"> -->
<!--     <div class="carousel-item active"> -->
     
<!--     </div> -->
<!--     <div class="carousel-item"> -->
<!--       <img src="image/r5.jpg" class="d-block w-100" alt="..."> -->
<!--     </div> -->
<!--     <div class="carousel-item"> -->
<!--       <img src="image/r6.jpg" class="d-block w-100" alt="..."> -->
<!--     </div> -->
<!--   </div> -->
<!--   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"> -->
<!--     <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
<!--     <span class="visually-hidden">Previous</span> -->
<!--   </button> -->
<!--   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"> -->
<!--     <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
<!--     <span class="visually-hidden">Next</span> -->
<!--   </button> -->
<!-- </div> -->

</div>
</div>
</div>
</body>
</html>
