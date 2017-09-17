<!DCOTYPE HTML>
<html>
<head>
  <title>TeenAge Crime</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.container-fluid {
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 5px;
    padding-right: 5px;
}
.bg-4 {
     background-color: #2f2f2f; /* Black Gray */
     color: #fff;
 }
</style>

<body>
  <?php
// define variables and set to empty values
$nameErr = $emailErr = $aadharErr = $addressErr = $cityErr = $pincodeErr = $districtErr = $stateErr = $countryErr = "";
$name = $email = $aadhar = $address = $city = $pincode = $district = $state = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <!--navbar section-->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TeenCrime</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav  navbar-right">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="issues.php">Issues</a></li>
        <li><a href="stage.php">Stages</a></li>
        <li><a href="solution.php">Solutions</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>

    </div>
  </div>
 </nav>
<hr>


<!--Crousel section-->
<div class="container">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://orig01.deviantart.net/83a8/f/2014/036/0/a/issues_self_titled_wallpaper_by_gnastystudios-d7590ft.jpg"  style="width:100%;">
        <div class="carousel-caption">
        <a href="issues.php"><button type="button" class="btn btn-success">About</button></a>
        </div>
      </div>
    </div>
</div>
</div>
<hr>
<br>

<!--Enter issue-->
<div class="container">
   <form method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <!--name-->
      <div claas="form-group">
        <label for="name" class="col-sm-2 control-label">Name:</label>
        <div clas="col-sm-2">
          <input type="text"class="form-control" id="name" name="name" value="<?=$name;?>">
          <span class="error"> <?php echo $nameErr;?></span><br>
          <p>(e.g Attitude Problem,Drug Abuse,Lying,Drinking,Smoking,Drunk Driving,Rebellious Behaviour etc.)</p>
        </div>
      </div>
      <br>

        <!--submit-->

      	<div class="form-group">
		     <div class="col-sm-2 col-sm-offset-2">
			   <input id="submit" name="submit" type="submit" value="submit" class="btn btn-success btn-lg">
		     </div>
	    </div>

      </div>
   </form>
<br>


<?php
$attitude ="Attitude Problem";
if ($name =$attitude) {

}
echo $name;

 ?>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>This creation is done by <a href="https://github.com/hiten2112">Hitesh Jangid</p>
</footer>

</body>
</html>
