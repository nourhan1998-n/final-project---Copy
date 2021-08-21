<?php
session_start();
?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>clinics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="style11.css">

<style>
  #clinicss{
    background-image: linear-gradient(rgba(0,0.2,0,0),rgba(0.6,0.4,0,0.3)),url(x.jpg);
  	background-size: cover;
  	background-position: center;
  	color: black !important;
  	background-attachment: fixed;
  	padding-top: 50px;
  	padding-bottom: 50px;
  }
  #clinicss h1{
  	text-align: center;
  	color: black !important;
  	padding-bottom: 10px;
  }

  #clinicss img{
   border-radius: 50%;

 }
  .marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
  	color: black;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
  font-size: 17px;
  word-spacing:1px;
}
#clinicss hr { display: block;
  margin-before: 0.5em;
  margin-after: 0.5em;
   margin-start: auto;
    margin-end: auto;
     overflow: hidden;
      border-style: inset;
       border-width: 1px;

       color:white;
     }
#one{
  background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(back.jpg);
}
#clinicss img:hover{
  filter: grayscale(2);
	cursor: pointer;
}

</style>


  </head>


  <body>




    <?php
    include 'header.php';
    ?>
    <section id="clinicss">


    <div class="container marketing">
<h1> العيادات</h1>
<hr >




    <div class="row" id="two">
      <div class="col-lg-4">
            <form method="post">
        <img src="c1.jpeg" alt="" style="width:170px ; height:150px">

        <h2>انف و اذن</h2>
        <p> يمكنك حجز موعدك مع افضل الدكاترة التابعين لوزرة الصحة بدلا من الانتظار فى المستشفيات العامة فى ظل ازمة فيروس كرونا المستجدو اذا كنت ترغب فى حجز موعد اضغط على زر حجز موعد  </p>
         <p><button type="submit"  name =" b1"  onclick="document.getElementById('contact').style.display='block'" class="w3-button btn btn-secondary"" >حجز موعد</button></p>
    </form>
      </div>
      

      <!-- /.col-lg-4 -->
      
      <div class="col-lg-4">
                    <form method="post">

        <img src="c4.jpeg" alt="" style="width:170px ; height:150px">
     
        <h2>رمد</h2>
        <p> يمكنك حجز موعدك مع افضل الدكاترة التابعين لوزرة الصحة بدلا من الانتظار فى المستشفيات العامة فى ظل ازمة فيروس كرونا المستجدو اذا كنت ترغب فى حجز موعد اضغط على زر حجز موعد  </p>
         <p><button  type="submit" name =" b2" onclick="document.getElementById('contact').style.display='block'" class="w3-button btn btn-secondary">حجز موعد</button></p>
       </form>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <form method="post">
        <img src="c2.jpeg" alt="" style="width:170px ; height:150px">

        <h2>باطنة</h2>
      <p> يمكنك حجز موعدك مع افضل الدكاترة التابعين لوزرة الصحة بدلا من الانتظار فى المستشفيات العامة فى ظل ازمة فيروس كرونا المستجدو اذا كنت ترغب فى حجز موعد اضغط على زر حجز موعد  </p>
         <p><button type = "submit" name =" b3" onclick="document.getElementById('contact').style.display='block'" class="w3-button btn btn-secondary">حجز موعد</button></p>
       </form>
      </div><!-- /.col-lg-4 -->
    
    </div>
   
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-4">
                    <form method="post">
        <img src="c3.jpeg" alt="" style="width:170px ; height:150px">


        <h2>عظام</h2>
        <p> يمكنك حجز موعدك مع افضل الدكاترة التابعين لوزرة الصحة بدلا من الانتظار فى المستشفيات العامة فى ظل ازمة فيروس كرونا المستجدو اذا كنت ترغب فى حجز موعد اضغط على زر حجز موعد  </p>
       <p><button name =" b4" onclick="document.getElementById('contact').style.display='block'" class="w3-button btn btn-secondary">حجز موعد</button></p></form>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
                    <form method="post">
        <img src="c5.jpeg" alt="" style="width:170px ; height:150px">

        <h2>اطفال</h2>
        <p> يمكنك حجز موعدك مع افضل الدكاترة التابعين لوزرة الصحة بدلا من الانتظار فى المستشفيات العامة فى ظل ازمة فيروس كرونا المستجدو اذا كنت ترغب فى حجز موعد اضغط على زر حجز موعد  </p>
       <p><button type="submit" name =" b5" onclick="document.getElementById('contact').style.display='block'" class="w3-button btn btn-secondary">حجز موعد</button></p></form>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
                    <form method="post">
        <img src="c6.jpeg" alt="" style="width:170px ; height:150px">

        <h2>نسا و توليد</h2>
<p> يمكنك حجز موعدك مع افضل الدكاترة التابعين لوزرة الصحة بدلا من الانتظار فى المستشفيات العامة فى ظل ازمة فيروس كرونا المستجدو اذا كنت ترغب فى حجز موعد اضغط على زر حجز موعد  </p>
         <p><button  type="submit" name =" b6" onclick="document.getElementById('contact').style.display='block'" class="w3-button btn btn-secondary">حجز موعد</button></p></form>
      </div><!-- /.col-lg-4 -->
    </div> <!-- /.row -->
    
    <div class="row">
      <div class="col-lg-4">
                    <form method="post">
        <img src="c7.jpeg" alt="" style="width:170px ; height:150px">
        <h2>جلدية</h2>
<p> يمكنك حجز موعدك مع افضل الدكاترة التابعين لوزرة الصحة بدلا من الانتظار فى المستشفيات العامة فى ظل ازمة فيروس كرونا المستجدو اذا كنت ترغب فى حجز موعد اضغط على زر حجز موعد  </p>
         <p><button  type="submit" name =" b7" onclick="document.getElementById('contact').style.display='block'" class="w3-button btn btn-secondary">حجز موعد</button></p></form>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
                    <form method="post">
        <img src="c8.jpeg" alt="" style="width:170px ; height:150px">

        <h2>تغذية</h2>
      <p> يمكنك حجز موعدك مع افضل الدكاترة التابعين لوزرة الصحة بدلا من الانتظار فى المستشفيات العامة فى ظل ازمة فيروس كرونا المستجدو اذا كنت ترغب فى حجز موعد اضغط على زر حجز موعد  </p>
     <p><button  type="submit" name =" b8" onclick="document.getElementById('contact').style.display='block'" class="w3-button btn btn-secondary">حجز موعد</button></p></form>
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4">
                    <form method="post">
        <img src="c9.jpeg" alt="" style="width:170px ; height:150px">


        <h2>جراحة</h2>
<p> يمكنك حجز موعدك مع افضل الدكاترة التابعين لوزرة الصحة بدلا من الانتظار فى المستشفيات العامة فى ظل ازمة فيروس كرونا المستجدو اذا كنت ترغب فى حجز موعد اضغط على زر حجز موعد  </p>
       <p><button type="submit"  name =" b9" onclick="document.getElementById('contact').style.display='block'" class="w3-button btn btn-secondary">حجز موعد</button></p></form>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    </div>
</section>
<div id="contact" class="w3-modal" dir="rtl">
  <div class="w3-modal-content w3-animate-zoom" dir="rtl">
    <div class="w3-container w3-pale-green" dir="rtl">
      <h1 style="margin-left:48rem " >حجز موعد</h1>
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topleft w3-large" dir="rtl">x</span>
</div>
<div class="w3-container" align="center" id="one">
      <p>حجز الموعد سيكون فى الموافق</p>
       <textarea rows="4" cols="80" placeholder="" class="w3-padding-16 w3-border w3-round-xxlarge"></textarea>
       <br> <br>
    </div>

</div>
<br>
<br>
</form>
</div>


<?php
 require "db-conn.php";
 
 
 $start=2;
 $end=6;
 $period=15;
 
$z=(($end-$start)*60)/$period;

 if(isset($_POST['b1'])){
 
  $sql = "SELECT * FROM `nose` WHERE `checks`=0";
          $result1 = $conn->query($sql)  ;
          
          if ($result1->num_rows > 0)
           {
			  // output data of each row
			  while($row = $result1->fetch_assoc())
			   {
			   global $i;
          $i=$row['number'];
			    break;	
          }
          if($i==1){
           global $timemin;
            $timemin= $start;
            echo '<script> alert(" '.$timemin.' تم الحجز بنجاح ...ميعادك الساعة  ")</script>';

          }
          else{
            $timemin=($period*$i);
            $hours = floor($timemin / 60);
            $min = $timemin - ($hours * 60) -$period;
          global  $totHour;
          $totHour=$hours+$start;

            echo'<script> alert(" '.$totHour.' : '.$min.' ميعاد زيارتك الساعة  ")  </script>';
          }
          $sql2 = "UPDATE `nose` SET `checks`=1 WHERE `number`=$i";
          mysqli_query($conn,$sql2);
           } 
           else
           {
           echo '<script> alert("لا يوجد موعد اليوم احجز غدا ")</script>';
          } 
 }



?>

<?php
include 'footer.php';
?>

  </body>
</html>
