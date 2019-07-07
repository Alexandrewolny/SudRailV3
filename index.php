  <?php session_start()?><!DOCTYPE html>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Vidaloka&display=swap" rel="stylesheet"> 
          <link href="https://fonts.googleapis.com/css?family=Marcellus+SC&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC&display=swap" rel="stylesheet"> 
          <link href="https://fonts.googleapis.com/css?family=Vidaloka&display=swap" rel="stylesheet"> 
    <meta charset="utf-8">
  </head>
  <body>

  <?php 

    require_once 'database.php';
  ?>
 
 <?php  include('header.php') ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
  <img class="d-block w-100" src="Img/3.jpg" alt="First slide" height="300px;" class="carous">
  <div class="carousel-caption d-none d-md-block">
  <h5><button class="boutoncarousel">Voir les infos ville par ville</button></h5>

  </div>
  </div>
  <div class="carousel-item">
  <img class="d-block w-100" src="Img/3.jpg" alt="Second slide" height="300px;" class="carous">
  <div class="carousel-caption d-none d-md-block">
  <h5><button class="boutoncarousel">Voir le journal</button></h5>

  </div>
  </div>
  <div class="carousel-item">
  <img class="d-block w-100" src="Img/3.jpg" alt="Third slide" height="300px;" class="carous"> 
  <div class="carousel-caption d-none d-md-block">
  <h5><button class="boutoncarousel">Voir les prochains regroupements</button></h5>

  </div>
  </div>
  </div>
  </div>




  <!-- 
  <div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  </div> -->



<div id= backgroundcarousel>

<div id="demo" class="carousel slide" data-ride="carousel">

 
   <h2 class="agenda">Actualités:</h2>
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="Img/9.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Voir en entier</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
          <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
         <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
          <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
         <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
         <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
         <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
          <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
       <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<div id="demo1" class="carousel slide" data-ride="carousel">


  <h2 class="agenda">Prochains regroupements:</h2>
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
         <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
       <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
       <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>  
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
       <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
       <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
       <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
       <img src="Img/manif.jpg">
         <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>



<?php include('footer.php') ?>

  <div class="container">

  <!-- <?php 
  $req = $db->query('SELECT * FROM article');

  $articles = $req->fetchAll();

  foreach ($articles as $article) {
 echo $article['content'];
  }
  
  ?>
 -->
 



  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>