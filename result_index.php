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

<hr>
<h2 class="text-center" id="feature">Here are your cars!</h2>
<hr>
<!-- ///////////////////////////1st menu Category///////////////////////// -->


<input type="hidden" id="type" name="type_option" value="lol">
<div id="1" class="container show-hide">
<?php
	include_once("conn.php");
	
	$op1=$_POST["op1"];
	$op2=$_POST["op2"];
	$op3=$_POST["op3"];
	$op4=$_POST["op4"];
	$pmin=$_POST["price-min"];
	$pmax=$_POST["price-max"];
	
	$query="SELECT DISTINCT * FROM models,brands WHERE $op1=1 AND $op2=1 AND (minprice>=$pmin OR maxprice<=$pmax) AND $op4=1 AND models.bid=brands.bid ;";
	
	$result = $connection->query($query);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
 			 echo "<a href=\"item.php?id=".$row['cid']."\" class=\"article\">
   					 <div class=\"op1 col-sm-4 col-md-4 col-lg-4 col-xs-6 hvr-float\">
      				<div class=\"thumbnail\"> <img src=\"car\\".$row['cid']."\\1.jpg\" id=\"thumb\" alt=\"Thumbnail Image 1\" class=\"img-responsive\">
        			<div class=\"caption\">
          			<h2>". $row['cname']."</h2><h3>". $row['bname']."</h3><h4>₹ <strong>".$row['minprice']."</strong> - <strong>".$row['maxprice']."</strong> Lakh <br> </h4>
       				 </div></div></div></a>";
			}
	} 
	else {
			echo "Oops!!! No Cars matching your criteria";
	}
	
	$connection->close();
	
	?>
    
    
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