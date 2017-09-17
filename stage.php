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

   $issue = $_GET['issue'];
   $stage = $_GET['stage'];
   $Attitude_Problem = "Attitude Problem";
   $Drug_Abuse = "Drug Abuse";
   $Lying = "Lying";
   $Drinking = "Drinking";
   $Smoking = "Smoking";
   $Drunk_Driving = "Drunk Driving";
   $Rebellious_Behaviour = "Rebellious Behaviour";
   $Little = "Little";
   $Medium = "Medium";
   $Adequate = "Adequate";

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
        <img src="http://45.113.136.130:8164/letsfight/public_html/images/big_imgs/scroller-logo-alt2.png"  style="width:100%;">
        <div class="carousel-caption">
        <a href="issues.php"><button type="button" class="btn btn-success">About</button></a>
        </div>
      </div>
    </div>
</div>
</div>

<hr>
<div class="container">
  <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      <label for="issue">Select Your Issue:</label>
   <select class="form-control" id="issue_name" name="issue" >
     <option><?=$Attitude_Problem;?></option>
     <option><?=$Drug_Abuse;?></option>
     <option><?=$Lying;?></option>
     <option><?=$Drinking;?></option>
     <option><?=$Smoking;?></option>
     <option><?=$Drunk_Driving;?></option>
     <option><?=$Rebellious_Behaviour;?></option>
   </select>
   <label for="stage">Select Your Stage:</label><br>
   <select class="form-control" id="stage_name" name="stage">
     <option><?=$Little;?></option>
     <option><?=$Medium;?></option>
     <option><?=$Adequate;?></option>
    </select>
    <br>
    <div class="form-group">
     <div class="col-sm-2 col-sm-offset-2">
     <input id="submit" name="submit" type="submit" value="submit" class="btn btn-success btn-lg">
     </div>
  </div>
	   </div>

     <br
  </form>
</div>
<br>
<hr>

<?php


if($issue = $Drinking)
{
   if($stage = $Little){

   }
   elseif ($stage = $Medium) {
     # code...
   }
   elseif ($stage = $Adequate ) {
     # code...
   }
}
elseif($issue = $Attitude_Problem)
{
   if($stage = $Little){
       echo'hello';
   }
   elseif ($stage = $Medium) {
     # code...
   }
   elseif ($stage = $Adequate ) {
     # code...
   }
}
elseif($issue = $Drug_Abuse)
{
   if($stage = $Little){

   }
   elseif ($stage = $Medium) {
     echo "heelo guys";
   }
   elseif ($stage = $Adequate ) {
     # code...
   }
}
elseif($issue = $Lying)
{
   if($stage = $Little){

   }
   elseif ($stage = $Medium) {
     # code...
   }
   elseif ($stage = $Adequate ) {
     # code...
   }
}
elseif($issue = $Smoking)
{
   if($stage = $Little){

   }
   elseif ($stage = $Medium) {
     # code...
   }
   elseif ($stage = $Adequate ) {
     # code...
   }
}
elseif($issue = $Drunk_Driving)
{
   if($stage = $Little){

   }
   elseif ($stage = $Medium) {
     #code
   }
   elseif ($stage = $Adequate ) {
     # code...
   }
}
elseif($issue = $Rebellious_Behaviour)
{
   if($stage = $Little){

   }
   elseif ($stage = $Medium) {
     # code...
   }
   elseif ($stage = $Adequate ) {
     # code...
   }
}
else {
  # code...
}
echo $issue;
echo $stage;
?>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>This creation is done by <a href="https://github.com/hiten2112">Hitesh Jangid</p>
</footer>

</body>
</html>
