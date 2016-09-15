<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Raleway:100,200,300,600,700" rel="stylesheet">
<title>Torq</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link href="css/hover.css" rel="stylesheet" media="all">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function choose1(a) {
	document.getElementById("op1").value=a;
};
function choose2(a) {

	document.getElementById("op2").value=a;
	
};
function choose3(a) {
	document.getElementById("op3").value=a;
};
function choose4(a) {
	document.getElementById("op4").value=a;
};

$('show-hide').ready(function() {
  $('.show-hide').hide();
  $('#1').show();
  $('.article').click(function() {
    <!-- $('.show-hide').fadeOut(5000,0); -->
    $(this).closest('.show-hide').fadeOut(200,0).next('.show-hide').fadeIn(200,0);
    return false;
  });
});
</script>
</head>
<body>
 <?php
	include_once("header.php");
	?>

<!-- ///////////////////////////1st menu Category///////////////////////// -->

<div id="1" class="container show-hide">
<hr>
<h2 class="text-center" id="feature">Choose your type?</h2>
<hr>
  <div class="row text-center">
  <a href="#" class="article">
    <div class="op1 col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float">
      <div class="thumbnail" onclick="choose1('sedan');"> <img src="images/sedan-feature.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Sedan</h3>
          <p>Perfect for Family and Luxury</p>
        </div>
      </div>
      
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float">
      <div class="thumbnail" onclick="choose1('compact');"> <img src="images/Compact-feature.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="op1 caption">
          <h3>Compact</h3>
          <p>Perfect for City use.</p>
          
        </div>
      </div>
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float">
      <div class="thumbnail" onclick="choose1('suv');"> <img src="images/suv.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>SUV</h3>
          <p>Where Size matters</p>
        </div>
      </div>
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm hvr-float">
      <div class="thumbnail" onclick="choose1('family');"> <img src="images/family.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Family</h3>
          <p>Economy and Space</p>
        </div>
      </div>
    </div>
    </a>
  </div>
  <div class="row text-center hidden-xs">
  <a href="#" class="article">
    <div class="op1 col-xs-4 col-sm-4 col-md-4 col-lg-4 hvr-float">
      <div class="thumbnail" onclick="choose1('luxury');"> <img src="images/luxury.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Luxury</h3>
          <p>Design and Features</p>
          
        </div>
      </div>
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-xs-4 col-sm-4 col-md-4 col-lg-4 hvr-float">
      <div class="thumbnail" onclick="choose1('sport');"> <img src="images/sporty.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Sporty</h3>
          <p>Perfomence matters</p>
          
        </div>
      </div>
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-xs-4 col-sm-4 col-md-4 col-lg-4 hvr-float">
      <div class="thumbnail" onclick="choose1('family');"> <img src="images/family.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Family</h3>
          <p>Economy and Space</p>
          
        </div>
      </div>
    </div>
    </a>
  </div>
</div>
<!-- ///////////////////////////2nd menu Feature///////////////////////// -->

<div id="2" class="container show-hide" style="display:none;">
<hr>
<h2 class="text-center" id="feature">Where do you drive more?</h2>
<hr>
  <div class="row text-center">
  <a href="#" class="article">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float menu">
      <div class="thumbnail" onclick="choose2('city');"> <img src="images/city.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>City</h3>
        </div>
      </div>
      
    </div>
    </a>
    <a href="#" class="article">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float menu">
      <div class="thumbnail" onclick="choose2('highways');"> <img src="images/highway.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption" >
          <h3>Highways</h3>
          
        </div>
      </div>
    </div>
    </a>
    <a href="#" class="article">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float menu">
      <div class="thumbnail" onclick="choose2('offroad');"> <img src="images/offroad.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Off Road</h3>
        </div>
      </div>
    </div>
    </a>
   </div>
 </div>

<!-- ///////////////////////////3nd menu - Transmission///////////////////////// -->

<div id="3" class="container show-hide" style="display:none;">
<hr>
<h2 class="text-center" id="feature">Do you prefer an automatic transmission?</h2>
<hr>
  <div class="row text-center">
  <a href="#" class="article">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6 hvr-float menu">
      <div class="thumbnail" onclick="choose3('auto');"> <img src="images/yes.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
        </div>
      </div>
      
    </div>
    </a>
    <a href="#" class="article">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6 hvr-float menu">
      <div class="thumbnail" onclick="choose3('manual');"> <img src="images/no.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption" >
        </div>
      </div>
    </div>
    </a>
   </div>
 </div>
 <!-- ///////////////////////////4nd menu - Petrol///////////////////////// -->

<div id="3" class="container show-hide" style="display:none;">
<hr>
<h2 class="text-center" id="feature">Do drive more than 1000Km per month?</h2>
<hr>
  <div class="row text-center">
  <a href="#" class="article">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6 hvr-float menu">
      <div class="thumbnail" onclick="choose4('diesel');"> <img src="images/yes.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
        <h3>Diesel</h3>
        </div>
      </div>
      
    </div>
    </a>
    <a href="#" class="article">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6 hvr-float menu">
      <div class="thumbnail" onclick="choose4('petrol');"> <img src="images/no.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption"  ><h3>Petrol</h3>
        </div>
      </div>
    </div>
    </a>
   </div>
 </div>
 <!-- ///////////////////////////5th menu - Budget///////////////////////// -->
<div id="4" class="container show-hide" style="display:none;">
<hr>
<h2 class="text-center" id="feature">Choose your Budget?</h2>
<hr>
  <div class="row text-center">
  <div data-role="main" class="ui-content">
    <form method="post" action="result_index.php">
	<input type="hidden" name="op1" id="op1" value="NULL" >
	<input type="hidden" name="op2" id="op2" value="NULL">
    <input type="hidden" name="op3" id="op3" value="NULL">
     <input type="hidden" name="op4" id="op4" value="NULL">
      <div data-role="rangeslider">
        <label for="price-min">Price min:</label>
        <input type="number" name="price-min" id="price-min" value="5">
        <label for="price-max">Price max:</label>
        <input type="number" name="price-max" id="price-max" value="10">
        <p>Price in Lakhs</p>
      </div>
        <input type="submit" data-inline="true" value="Submit">
        
      </form>
  </div>
   </div>
 </div>

<hr>
<!-- ///////////////////////////Footer Section///////////////////////// -->
<?php
	include_once("footer.php");
	?>



<!-- ///////////////////////////Footer///////////////////////// -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>