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
<style>
#thumb{
	height:220px;
	width:350px;
}
.container	img{
	border-radius:1000px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
</script>
</head>
<body>
 <?php
	include_once("header.php");
	?>


<div id="1" class="container">
<div id="1" class="container show-hide">
<hr>
<h2 class="text-center" id="feature">This is Team Tyko!</h2>
<hr>
  <div class="row text-center">
  <a href="#" class="article">
    <div class="op1 col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float">
      <div class="thumbnail" onclick="choose1('sedan');"> <img src="images/team/chriss.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Chriss Martin</h3>
          <p>Team Lead</p>
        </div>
      </div>
      
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float">
      <div class="thumbnail" onclick="choose1('compact');"> <img src="images/team/bobby.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="op1 caption">
          <h3>Bobby Isac</h3>
          <p>Systems and Networking Guy</p>
          
        </div>
      </div>
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float">
      <div class="thumbnail" onclick="choose1('suv');"> <img src="images/team/cristina.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Cristina Johns</h3>
          <p>Code Gal</p>
        </div>
      </div>
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm hvr-float">
      <div class="thumbnail" onclick="choose1('family');"> <img src="images/team/jaison.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          
        </div>
      </div>
    </div>
    </a>
  </div>
  <div class="row text-center hidden-xs">
  <a href="#" class="article">
    <div class="op1 col-xs-4 col-sm-4 col-md-4 col-lg-4 hvr-float">
      <div class="thumbnail" onclick="choose1('luxury');"> <img src="images/team/jaison.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
         
           <h3>Jaison Thomas</h3>
          <p>Marketing Guru</p>
        </div>
      </div>
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-xs-4 col-sm-4 col-md-4 col-lg-4 hvr-float">
      <div class="thumbnail" onclick="choose1('sport');"> <img src="images/team/elice.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
           <h3>Elice Roy</h3>
          <p>PR and Outreach Maestro</p>
          
        </div>
      </div>
    </div>
    </a>
    <a href="#" class="article">
    <div class="op1 col-xs-4 col-sm-4 col-md-4 col-lg-4 hvr-float">
      <div class="thumbnail" onclick="choose1('family');"> <img src="images/team/amit.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
         
          <h3>Amit Binny Joseph</h3>
          <p>Design and Backend Bro</p>
          
        </div>
      </div>
    </div>
    </a>
  </div>
</div>
<center><br><br>
<strong><p style="font-size:18px;">Watch our video </p></strong>
<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fthetyko%2Fvideos%2F303949699966728%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe></center>

</div>
<br><br>
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