<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
	 <title>وزاره الصحه و السكان المصريه</title>
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
    <style type="text/css">
    	 .dd{
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
  top: 70px;
  right: 25%;
  padding-top: 1%;
  color: white;
  font-size: 15px;

 
}
#txt{
  border-radius: 10px;
}


    </style>
    <script type="text/javascript">
      var helpers = ["يوم السبت والثلاثاء من كل إسبوع. \n \ التطعيم ضد مرض الدرن وضد شلل الأطفال، ويكون تطعين الدرن بالحقن في الكتف الأيسر وجرعه شلل الأطفال عبارة عن نقطتين بالفم." , "يوم الأحد والإثنين من كل إسبوع. \n \ تكون الجرعه عبارة عن التطعيم ضد شلل الأطفال وحقنة التطعيم الخماسي الذي يشمل التطعيم ضد الدفتريا والسعال الديكي والتيتانوس وضد الالتهاب الكبدي الوبائي بي والانفلونزا البكتيرية." , "يوم الأحد والإثنين من كل إسبوع. \n \ وهي نفس تطعيم الجرعة الاولي ويزيد عليها جرعة تطعيم ضد شلل الأطفال بالحقن يُسمي سولك." , "يوم الأحد والإثنين من كل إسبوع. \n \ وهي نفس تطعيم الجرعة الاولي." , "يوم الأربعاء من كل إسبوع. \n \ جرعة منشطة ضد مرض شلل الاطفال عبارة عن نقطتين بالفم." , "يوم الخميس من كل إسبوع. \n \  هي عبارة عن تطعيم ضد شلل الأطفال بالفم، وحقنة تطعيم إم إم أر وهو تطعيم ضد الحصبة و التهاب النكاف والحصبة الألمانية." , "يوم الأربعاء من كل إسبوع. \n \ وتكون الجرعة عبارة عن التطعيم ضد شلل الأطفال بالفم وحقنة التطعيم الثلاثي ضد الدفتريا والسعال الديكي والتيتانوس، ووحقنة تطعيم إم إم أر وهو تطعيم ضد الحصبة و التهاب النكاف والحصبة الألمانية."]

       function messages(adviceNumber) {
        document.getElementById("txt").value = 
                                        helpers[adviceNumber];
}
    </script>

   
</head>
<body>
	<?php
    include 'header.php';
    ?>
 <!-- END nav -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="home.php">الرئيسيه  <i class="fa fa-chevron-right"></i></a></span> <span> مواعيد التطعيمات  <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread"> مواعيد التطعيمات </h1>
          </div>
        </div>
      </div>
    </section>
      <!-- end banner -->
 <!-- END nav -->
 <div class="dd">
            <div class="ddd" >
            <b class="dh">اختر سن طفلك</b><br>
            <form   method="post">
            <input type="radio" name="vac" onclick="messages(0)" style="text-align: center;">عمر يوم حتي إسبوع      <br>
            <input type="radio" name="vac" onclick="messages(1)" style="text-align: center;">عمر شهرين       <br>
            <input type="radio" name="vac" onclick="messages(2)" style="text-align: center;">عمر أربع شهور      <br>
            <input type="radio" name="vac" onclick="messages(3)" style="text-align: center;">عمر ست شهور    <br>
            <input type="radio" name="vac" onclick="messages(4)" style="text-align: center;">عمر تسع شهور   <br>
            <input type="radio" name="vac" onclick="messages(5)" style="text-align: center;">عمر سنه       <br>
            <input type="radio" name="vac" onclick="messages(6)" style="text-align: center;">عمر سنة ونصف
            <br><br>
            </form>
            </div>
            <textarea id="txt" style="text-align: center; margin-top:150px;margin-bottom: 50px; " rows="3" cols="100"></textarea>
            </div>
</section>
<?php
include 'footer.php';
?>

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

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