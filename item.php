<?php
function check($a) {
    if ($a==1){
		echo "Yes";
	}
	else{
		echo "No";
	}
};


include_once("conn.php");
	
	$id=$_GET["id"];
	$query="SELECT * FROM models,brands,variants WHERE models.cid=$id AND models.bid=brands.bid AND models.cid=variants.cid ;";
	
	$result = $connection->query($query);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	}
	else{
		echo "Unkown ERROR!!";
	}
	
	$connection->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
img{
	max-width:800px;
max-height:400px;
position:relative;
top:-20px;
left:20px;
}
.imgdiv{
	width:800px;
	height:300px;
}

</style>
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

</head>
<body>
 <?php
	include_once("header.php");
	?>

<!-- ///////////////////////////1st menu Category///////////////////////// -->
<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner imgdiv" role="listbox">
        <div class="item active">
          <img src="car/<?php echo $row['cid'];?>/1.jpg" alt="Image">
          <div class="carousel-caption">
            <!-- Caption if needed -->
          </div>
        </div>

        <div class="item">
          <img src="car/<?php echo $row['cid'];?>/2.jpg" alt="Image">
          <div class="carousel-caption">
            <!-- Caption if needed -->
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="chead">
      <h3><strong><?php echo $row['bname'];?> <?php echo $row['cname'];?></strong></h3>
    </div>
    <div class="cfeature">
       <p>Launched: <?php echo $row['vyear'];?></p>
    </div>
    <div class="cprice">
       <p><h2>₹ <strong><?php echo $row['minprice'];?></strong> - <strong><?php echo $row['maxprice'];?></strong> Lakh <br> </h2></p>
    </div>
  </div>
</div>
<hr>
</div>

<div class="container text-center">
  <h3>Specifications</h3>
  <table class="table table-bordered spectable">
    <thead>
      <tr>
        <th class="tablehead text-center">Feature</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Variant Name</td>
        <td><?php echo $row['vname'];?></td>
      </tr>
       <tr>
        <td>Price (Ex Showroom*)</td>
        <td>₹ <?php echo $row['price'];?></td>
      </tr>
      <tr>
        <td>Mileage</td>
        <td><?php echo $row['eco'];?> KM/L</td>
      </tr>
      <tr>
        <td>Top Speed</td>
        <td><?php echo $row['topspeed'];?> KMPH</td>
      </tr>
      <tr>
        <td>Acceleration (100 KMPH)</td>
        <td><?php echo $row['acc'];?> sec</td>
      </tr>
      <tr>
        <td>Displacement</td>
        <td><?php echo $row['displ'];?> cc</td>
      </tr>
      <tr>
        <td>Max Power</td>
        <td><?php echo $row['maxpow'];?></td>
      </tr>
      <tr>
        <td>Max Torque</td>
        <td><?php echo $row['maxtorq'];?></td>
      </tr>
      <tr>
        <td>Fuel Type</td>
        <td><?php echo $row['fueltype'];?></td>
      </tr>
      <tr>
        <td>Turning Radius</td>
        <td><?php echo $row['turnrad'];?> m</td>
      </tr>
      <tr>
        <td>Number of Cylinders</td>
        <td><?php echo $row['nocyl'];?></td>
      </tr>
      <tr>
        <td>Turbo</td>
        <td><?php check($row['turbo']);?></td>
      </tr>
      <tr>
        <td>Gearbox</td>
        <td><?php echo $row['gearbox'];?></td>
      </tr>
       <tr>
        <td>Seat Capacity</td>
        <td><?php echo $row['seatcap'];?></td>
      </tr>
      <tr>
        <td>Length</td>
        <td><?php echo $row['l'];?> mm</td>
      </tr>
      <tr>
        <td>Width</td>
        <td><?php echo $row['w'];?> mm</td>
      </tr>
      <tr>
        <td>Height</td>
        <td><?php echo $row['h'];?> mm</td>
      </tr>
      <tr>
        <td>Wheel Base</td>
        <td><?php echo $row['wb'];?> mm</td>
      </tr>
            <tr>
        <td>Ground Clearance</td>
        <td><?php echo $row['gc'];?> mm</td>
      </tr>
      <tr>
        <td>Kerb Weight</td>
        <td><?php echo $row['kerbweight'];?> Kg</td>
      </tr>
      <tr>
        <td>Fuel Capacity </td>
        <td><?php echo $row['fuelcap'];?> Litres</td>
      </tr>
      <tr>
        <td>Boot</td>
        <td><?php echo $row['boot'];?> Litres</td>
      </tr>
      <tr>
        <td>Tyre Size</td>
        <td><?php echo $row['tyresize'];?></td>
      </tr>
      
    </tbody>
  </table>
  <hr>
</div>

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