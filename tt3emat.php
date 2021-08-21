<!DOCTYPE html>
<html lang="ar">
  <head>
    <title>وزاره الصحه و السكان المصريه  </title>
    <meta charset="utf-8">
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
<style>
  



.ddd{
  
  background-color:rgba(1, 1,1, 0.7) ;
  position: relative;
  top: 100px;
  
  border-radius:20%;
  

  text-align:center;
width: 40%;
left: 30%;
height: 65%;
padding-top: 10px;
padding-bottom: 10px; }

.right{ text-align: right;
  border-radius: 20px;
}
.r {
  border-radius: 20px;
}
#bg{
  
  color: white;
  background-image: url(22.jpeg);
background-size: cover;
height: 700px;}

</style>
  </head>
  <body>
  	<?php
    include 'header.php';
    ?>
    <!-- END nav -->


    
    <div  id="bg" >
      <div class="ddd" >
        <form action="complete.html">
          <h3 style="color: white; text-align: center; "><b>بيانات الأم</b></h3>
          <input class="right" type="text" placeholder="ادخل الرقم القومي"required/>&nbsp;&nbsp;
         <input class="right" type="text" placeholder="ادخل الاسم" required/> 
          <br/><br>
          <input class="right" type="email" placeholder="ادخل البريد الالكتروني"required/> &nbsp;&nbsp;
         <input class="right" type="text" placeholder="ادخل رقم المحمول" required/>
         <h3 style="color: white; text-align: center; "><b>بيانات الطفل</b></h3>
         <input class="right" type="text" placeholder="ادخل الرقم القومي"required/>&nbsp;&nbsp;
         <input class="right" type="text" placeholder="ادخل الاسم" required/> 
          <br/><br>
 <b style=" color: white; padding-left: 100px;">وزن الطفل</b> &nbsp;&nbsp;
<b style=" color: white;padding-right: 20px;">تاريخ الميلاد</b><br>
          <input class="r"  type="date" required /> 
              
              &nbsp;&nbsp;
              <input class="right"  type="text" placeholder="أدخل وزن الطفل" required/> 
             
             <br><br>
             <input class="r"style="margin-right: 5px;" type="checkbox" /> هل يعاني من امراض قلب؟
             <br>
              <input class="r"style="margin-right: 5px;" type="checkbox" /> هل اصابته الصفرا من قبل؟
<br><br>
  <button class="r" type="submit" >Submit</button>
<button class="r" type="reset">Reset</button>

      </form>
        
      </div>
      
      </div>
      




<?php
include 'footer.php';
?>

  <!-- loader -->
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
    
  </body>
</html>