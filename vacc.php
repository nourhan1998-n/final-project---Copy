  <!DOCTYPE html>
<html  lang="en">
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
    	* {
  box-sizing: border-box;
}

.container {
  width: 1000px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
}



.deck {
  margin: 15px;
  width: 400px;
  height: 380px;
  position: relative;
  -webkit-perspective: 1000px;
  perspective: 1000px;
  font-family: verdana;
  border-radius: 10px;
}

.card {
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transition: all 0.5s linear;
  transition: all 0.5s linear;
  border-radius: 10px;
}

.face {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  background-color: whitesmoke;
  border-radius: 10px;
}

.back {
  overflow: hidden;
  z-index: -1;
  display: block;
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
  box-sizing: border-box;
}
.back:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -1;
  background-size: 100% 100%;
  
  -webkit-transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -ms-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
  transform: rotateY(180deg);
}

.front, .back {
  transition: all 0.5s linear;
}

.front {
 
  z-index: 1;
  box-shadow: 5px 5px 5px #01d28e;
}

.back {
  box-shadow: 0 0 0 #01d28e;
}

.flipped, .hovercard:hover {
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
}
.flipped .front, .hovercard:hover .front {
  box-shadow: 0 0 0 #01d28e;
}
.flipped .back, .hovercard:hover .back {
  box-shadow: 5px 5px 5px #01d28e;
}

.bottext {
  position: absolute;
  color: whitesmoke;
  width: 100%;
  height: 100px;
  bottom: 0;
  border-radius: 0 0 10px 10px;
  text-align: center;
  padding: 10px;
}
.bottext h2 {
  margin: 0;
}
.bottext h3 {
  margin: 10px 0;
}
 .btn-block {
      margin-top: 20px;
      text-align: center;
      }
 button {
      width:  150px;
      height: 50px;
      padding-left: 00px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #01d28e;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #808080;
      }

.front h2, .front h3 {
  text-align: center;
  color: whitesmoke;
}

.back h2 {
  margin: 0;
  border-radius: 10px 10px 0 0;
  padding: 10px;
  text-align: center;
  color: whitesmoke;
}
.back ul {
  text-align: center;
  list-style: none;
  padding: 10px;
  margin: 0;
}
.back ul li {
  margin-top: 15px;
  color: whitesmoke;
}
.back .botprice {
  position: absolute;
  bottom: 30px;
  border-radius: 0 0 10px 10px;
  text-align: center;
  width: 100%;
  padding: 15px;
  color: whitesmoke;
}
.back .botprice h3 {
  margin: 0px;
}

.return {
  position: absolute;
  width: 100%;
  background-color: transparent;
  border: none;
  color: gray;
  cursor: pointer;
  padding: 5px;
  bottom: 0;
  border-radius: 0 0 10px 10px;
  background-color: gainsboro;
  font-size: 18px;
}
.return:focus {
  outline: none;
}


    </style>

   
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
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="home.php">الرئيسيه  <i class="fa fa-chevron-right"></i></a></span> <span> التطعيمات  <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread"> التطعيمات </h1>
          </div>
        </div>
      </div>
    </section>
      <!-- end banner -->

<h1 style="text-align: center;">اساله و اجابات خاصه بلتطعيمات</h1>
<br>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="container"> 

	<div class="row">
  <div class="deck" >
    <div class="card hovercard">
      <div class="front face" style="background: url(v12.png); background-size:150%; background-repeat: no-repeat; text-align: center; padding-top:190px; ">
        <h3 style="color: white; text-align: center;">هل تتسبب التطعيمات في الإصابة بالتوحد؟ هل من المقبول عدم الحصول على تطعيمات معينة؟  </h3>
        <div class="bottext">
          
        </div>
      </div>
      <div class="back face">
        
        <p style="font-weight: bold;">تَقِي اللقاحات في مرحلة الطفولة الأطفال من مجموعة متنوِّعة من الأمراض الخطيرة أو القاتلة المحتمَلة، بما في ذلك الدفتيريا والحصبة والنكاف والحصبة الألمانية وشلل الأطفال والكُزاز والسعال الديكي وغيرها. في حالة كون هذه الأمراض غير مألوفة أو أول مرة تَسمع بها، فإن ذلك يعني أن هذه اللقاحات قد أدَّتْ مفعولها.</p>
        <div class="botprice">
          
        </div>
      </div>
    </div>
  </div>
  <div class="deck">
    <div class="card hovercard">
      <div class="front face" style="background: url(v13.png); background-size:140%; background-repeat: no-repeat; padding-top: 250px; ">
        <h3 style="color: white; text-align: center">هل المناعة الطبيعية أفضل من التطعيم باللقاح؟</h3>
       
      </div>
      <div class="back face">
        <p style="font-weight: bold;">قد تَزيد العدوى الطبيعية من كفاءة الجهاز المناعي بشكل أفضل من التطعيم باللقاح، ولكن لذلك مخاطر جسيمة. على سبيل المثال، قد تُؤَدِّي عدوى الجدري (جدري الماء) الطبيعية إلى الإصابة بالالتهاب الرئوي. وقد تتسبَّب عدوى شلل الأطفال الطبيعية في حدوث شلل دائم. وقد تُؤَدِّي عدوى النكاف الطبيعية إلى الإصابة بالصمم. قد تتسبَّب عدوى المستدمية النزلية من النوع (ب) في الإصابة بتلف دائم في المخ أو تصل للوفاة. قد تُساعد التطعيمات باللقاح في الوقاية من هذه الأمراض ومضاعفاتها الجسيمة المحتَمَلة.</p>
       
      </div>
    </div>
  </div>
  <div class="deck">
    <div class="card hovercard">
      <div class="front face" style="background: url(v3.png); background-size:190%; background-repeat: no-repeat; padding-top: 240px;">
        <h3 style="color: white; text-align: center">هل تتسبب التطعيمات في الإصابة بالتوحد؟</h3>
       
      </div>
      <div class="back face">
        <p style="font-weight: bold;">ا تتسبب اللقاحات في حدوث اضطراب طيف التوحد. وعلى الرغم من وجود الكثير من الجدل حول هذا الموضوع، لم يجد الباحثون علاقة بين اضطراب طيف التوحد واللقاحات في مرحلة الطفولة. في الواقع، تم التراجع عن الدراسة التي أشعلت الجدال منذ سنوات.</p>
        
      </div>
    </div>
  </div>
</div>
<div class="row">
   <div class="deck">
    <div class="card hovercard">
      <div class="front face" style="background: url(v9.png); background-size:140%; background-repeat: no-repeat; padding-top: 200px; ">
        <h3 style="color: white; text-align: center">هل الآثار الجانبية للقاح خطيرة؟</h3>
       
      </div>
      <div class="back face">
        <p style="font-weight: bold;">يُمكن أن يُؤدِّي أيُّ لقاح إلى آثار جانبية. وعادةً، تكون هذه الآثار الجانبية بسيطة؛ مثل الحُمَّى من الدرجة المنخفضة، والاهتياج، والتقرُّح في موقع الحقن. تُسبِّب بعض اللقاحات الصداع المُؤَقَّت أو الإرهاق أو فقدان الشهية. ونادرًا، يُمكن أن يُعاني الطفل تفاعل حساسية شديدًا أو أثرًا جانبيًّا عصبيًّا مثل النوبات. على الرغم من أن هذه الآثار الجانبية النادرة تُعَدُّ من المخاوف، يُعَدُّ خطر تسبُّب اللقاح في الضرر الخطير أو الوفاة بسيطًا للغاية. تُعَدُّ فوائد الحصول على اللقاح أكبر بكثير من الآثار الجانبية الممكنة لدى ما يقرُب من كل الأطفال.

وبالطبع، لا يَحصُل على اللقاح الأطفال المعروفة إصابتهم بحالات الحساسية تجاه مُكوِّنات اللقاح. وعلى نحو مماثل، في حالة إصابة الطفل برد فعل مهدِّد للحياة تجاه لقاح معيَّن، لا يحصل على جرعات إضافية منه.</p>
        
      </div>
    </div>
  </div>
   <div class="deck">
    <div class="card hovercard">
      <div class="front face" style="background: url(v8.png); background-size:130%; background-repeat: no-repeat;padding-top: 250px; ">
        <h3 style="color: white; text-align: center">لماذا يتم إعطاء التطعيمات في فترة مبكرة للغاية؟</h3>
       
      </div>
      <div class="back face">
        <p style="font-weight: bold;">لأن الأمراض التي تُعطى التطعيمات في مرحلة الطفولة للوقاية منها تُعد أكثر حدوثًا على الراجح عندما يكون الطفل صغيرًا للغاية وتكون مخاطر مضاعفاتها أخطر في فترة الطفولة المبكرة. وهذا يجعل من التطعيم المبكر — الذي يبدأ أحيانًا خلال مدة قصيرة بعد الولادة — أمرًا أساسيًّا. إذا أجلت الحصول على التطعيمات حتى يصبح طفلك أكبر، فقد تكون بذلك تأخرت وفاتك الوقت.</p>
        
      </div>
    </div>
  </div>
   <div class="deck">
    <div class="card hovercard">
      <div class="front face" style="background: url(v6.png); background-size:180%; background-repeat: no-repeat; padding-top: 240px;">
        <h3 style="color: white; text-align: center">هل من المقبول انتقاء التطعيمات واختيارها؟</h3>
       
      </div>
      <div class="back face">
        <p style="font-weight: bold;">وجه عام، لا تُعَدُّ فكرة تجاوُز الحصول على التطعيمات فكرة جيدة. فذلك قد يجعل طفلكِ عُرضةً للإصابة بأمراض خطيرة كان من السهل تجنُّبها. فَكِّري فيما يلي: بالنسبة لبعض الأطفال - بمن فيهم أولئك الذين يتعذَّر عليهم الحصول على بعض التطعيمات لأسباب طبية (مثل علاج السرطان) - فإن الحماية الوحيدة من الأمراض التي يُمكن الوقاية منها بالتطعيمات هي مناعة الأشخاص ممن حولهم. في حالة انخفاض مُعدَّلات المناعة، قد تُصبح الأمراض التي يُمكن الوقاية منها بالتطعيمات تهديدًا شائعًا مرة أخرى.</p>
        
      </div>
    </div>
  </div>
</div>
</div>
<br><br>
        <p style="padding-left: 740px">  <button type="submit" style="text-align: center; " ><a href="v2.php" style="color:white">مواعيد التطعيمات    </a></button></p>
        
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