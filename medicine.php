<!DOCTYPE html>
<html lang="en">
  <head>
    <title>وزاره الصحه و السكان المصريه  </title>
    <meta charset="utf-8" dir="rtl" lang="ar">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  </head>
  <style>
    .dd{
  background-image: url(1.jpeg);
 background-repeat: no-repeat;
 height: 100%;
 width: 100%;
  background-size: cover;
 text-align: center;
}
.dh{
  
  color: white;
  font-size:200%;
}
.di{
 width: 40%;
 height: 20%;
 border-radius: 10px;

}
.db{
  width: 23%;
  height: 16%;
  font-weight: bold;
  border-radius: 10px;
}
.ddd{

  width: 50%;
  height: 320px;
  background-color:rgba(1, 1,1, 0.7) ;
  position: relative;
  top: 100px;
  left: 25%;
  border-radius:10%;
  padding-top: 4%;

 
}
#txt{
  border-radius: 10px;
}

  </style>
  <body>
    
    <?php
    include 'header.php';
    ?>

       <div class="dd">
            <div class="ddd" >
            <b class="dh">البحث عن العقاقير</b><br>
            <form   method="post">
            <select  name="product" id="product">
            <option value="brofen">brofen</option>
            <option value="voltaren">voltaren</option>
            <option value="antinal">antinal</option>
              </select><br>
                    <select name="area" id="area">
            <option value="عجمي">عجمي</option>
            <option value="سموحة">سموحة</option>
            <option value="glem">glem</option>
            <option value="manshya">manshya</option>
             </select>
              <br>
            <input  type="submit" value="بحث"   name="submit">
            </form>
            </div>
            <textarea id="txt" style="text-align: center; margin-top:150px;margin-bottom: 50px; " rows="5" cols="50"></textarea>

//more products
<div class="container-fluid" align="center">
<div class="row">
<div class="col-sm">
<div class="card" style="width:400px">
    <img class="card-img-top" src="1.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>
  <div class="col-sm">
<div class="card" style="width:400px">
    <img class="card-img-top" src="1.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>

  <div class="col-sm">
<div class="card" style="width:400px">
    <img class="card-img-top" src="1.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
 </div>
</div>
</div> 

            </div>
            <p><a class="btn btn-secondary" href="clinic.html" role="button"> <blockquote>+</blockquote></a></p>
            



 <?php
$host="localhost";
$user="root";
$pass="";
$db="medicine1";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn){
    echo"connected successfully";}

    else{
    die($conn);
}
        if(isset($_POST['submit']))
        {
         if(!empty($_POST['product']))
         {
	      //dealing with first table
          $product =  $_POST['product'];
          $a =  $_POST['area'];
          $sql = "SELECT *  FROM `areas` WHERE `area` LIKE '$a'";
          $result1 = $conn->query($sql)  ;
          
          if ($result1->num_rows > 0)
           {
			  // output data of each row
			  while($row = $result1->fetch_assoc())
			   {
			    $w=$row["id"];
			    echo $w  ;
			    break;			    
                }
           }
       }
 


          //second table
          $q="SELECT `phname` FROM `phars` WHERE `id` = $w ORDER BY `diff_id` ASC ";
          $result = $conn->query($q);
		  if ($result->num_rows > 0) {
			  // output data of each row
			  while($row2 = $result->fetch_assoc()) {
			    $phname=$row2["phname"];
			    echo $phname ."gdg";
			    break;			    
                }}


          //third table
                $sql2 = "SELECT *  FROM $phname WHERE `product`= '$product' ";
                $result1 = $conn->query($sql2);

				if ($result1->num_rows > 0) {
				  // output data of each row
				  while($row3 = $result1->fetch_assoc()) {
				    echo "<br> id: ". $row3["id"]. $row3["quantity"] . "<br>";
                }}



 }
         else {
          echo 'Please select the value.';
        }
?>

<?php
include 'footer.php';
?>


          <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


          <script src="js/jquery.min.js"></script>
          <script src="js/jquery-migrate-3.0.1.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/jquery.easing.1.3.js"></script>
          <script src="js/jquery.waypoints.min.js"></script>
          <script src="js/jquery.stellar.min.js"></script>
          <script src="js/jquery.animateNumber.min.js"></script>
          <script src="js/bootstrap-datepicker.js"></script>
          <script src="js/jquery.timepicker.min.js"></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="js/jquery.magnific-popup.min.js"></script>
          <script src="js/scrollax.min.js"></script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
          <script src="js/google-map.js"></script>
          <script src="js/main.js"></script>
          <script>
          function search(){
            var w= window.s.value;
            if(w==1)
            window.txt.value="The value exist at index"; 
          }</script>
    </body>
</html>