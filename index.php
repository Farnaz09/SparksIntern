<!DOCTYPE html>
<html lang="en">
<head>
   <title>SPARK Bank </title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Spark Bank  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customers.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transactions.php">Transactions</a>
        </li>
         <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
        
</div>
      </ul>
      
    </div>
  </div>
</nav>
<!-- Caraousel-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/11.jpg" alt="Easy Transfer" width="1520" height="500">
      <div class="carousel-caption">
    <h3 style="color : white;"> <b>Cash Transaction </b> </h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="imgs/6.jpg" alt="Quick Deposit" width="1520" height="500">
      <div class="carousel-caption  d-none d-md-block">
    <h3 style="color : white;"> <b> Bank Loans </b> </h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="imgs/4.jpg" alt="Low interests" width="1520" height="500">
      <div class="carousel-caption">
    <h3 style="color : white;"> <b> Customer Experience</b> </h3>
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
<!--About us-->
<section class= "my-5">
<div class="py-5">
    <h3 class="text-center" ><b><u>About Us</u></b></h3>
 </div>
<div class="container-fluid">
 <div class ="row">
<div  class="col-lg-6 col-md-6 col-12">
      <img src="imgs/3.jpg" class="img-fluid" width="700" height="80">
      </div>
      <div  class="col-lg-6 col-md-6 col-12">
          <h1><b>Spark Bank</b></h1>
      <p1> Spark Bank is a part of Spark foundation. It is one of Tnations's leading private banks and was among the first to receive approval from the Central bank of Tnation (CBT) to set up a private sector bank in 992 TY.
          Today, Spark Bank has a banking network of 5,608 branches and 16,087 ATM's in 2,902 cities/towns. Spark Bank offers a diverse range of financial products and banking services to customers through a growing branch and ATM network and digital channels such as Netbanking, Phonebanking and MobileBanking.
        
        </div>  
         
 </div>
 </div>
<!--Dsiclaimer-->
</section>
<section class= "my-5">
<div class="py-5">
    <h3 class="text-center" ><b><u>Overview</u></b></h3>
 <p1>This website is the
      outcome of a intern project, and does not
      necessarily represent the views of any organisation or any other individuals referenced or
      acknowledged within the website. Anyone may reproduce, distribute, adapt, translate the content on the website, without explicit permission, provided that the content is accompanied by an acknowledgement that TSF Bank website is the source and that it is clearly indicated if changes were made to the original content.</p1>
 </div>
 <?php
        include ("footer.html");
        ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
</body>
</html>