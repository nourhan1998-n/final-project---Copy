<?php
session_start();

?>
<div class="top py-1" lang="ar" dir="rtl">
      <div class="container">
        <div class="row">
          <div class="col d-flex align-items-center">
            <p class="mb-0"><a href="#">mohp.gov.egy@gmail.com</a> </p>
          </div>
          <div class="col-4 d-flex justify-content-end">
            <div class="social-media">
              <p class="mb-0 d-flex">
                <a href="https://www.facebook.com/egypt.mohp" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                <a href="https://twitter.com/mohpegypt?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                <a href="https://www.instagram.com/mohpegypt/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>





    <div class="wrap" lang="ar" dir="rtl">

      <div class="container">

        <div class="row ">
          <div class="navbar-brand ml-md-2">
          <a >
          <img src="logo3.jpg" class="eagle " alt="brand-logo" style="width:159px ; height:65px ; margin-right:0px"/>
          </a></div>
          <div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">

            <a class="navbar-brand" href="index1.html"> وازرة الصحة  و الاسكان  </a>
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-8 mb-md-0 mb-3">
                <div class="top-wrap d-flex">
                  <div class="text" ><span>العنوان</span><span> Magles Al Shaeb, El-Sayeda Zainab, Cairo Governorate, Egypt </span></div>
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>

                </div>
              </div>
              <div class="col">
                <div class="top-wrap d-flex">
                  <div class="text"><span> اتصل بينا</span><span> 27941506 02</span></div>
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" lang="ar" dir="rtl">

      <div class="container" style=" margin-right: 0px" >




        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> القائمة
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="home.php" class="nav-link">الرئسية</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link" >عيادات</a></li>
            <li class="nav-item"><a href="realMed.php" class="nav-link">ادوية و عقاقير</a></li>
            <li class="nav-item"><a href="consult.php" class="nav-link">مستشارك الطبى</a></li>
            <li class="nav-item"><a href="19.php" class="nav-link">كوفيد 19</a></li>
            <li class="nav-item"><a href="vacc.php" class="nav-link">تطعيمات </a></li>
            <li class="nav-item"><a href="intiatives.php" class="nav-link">مبادرات طبية </a></li>
            


          </ul>
        </div>

        <div class="order-lg-last" id="but">
          <a href="login.php" class="btn btn-primary" style="margin-right: 100px">
<?php
if (isset($_SESSION['fname'])) {
   echo $_SESSION['fname'];
 } 
 else
  echo "تسجيل الدخول";
?>
          </a>
        </div>
      </div>
    </nav>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style type="text/css">
#bouton{
  position: fixed;
  bottom: 15px;
  left: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
</style>
<div >
<button class="btn btn-primary" id="bouton" style='font-size:24px'><a href="ChatApp/ChatApp" style="color: white">تواصل معنا   </a><i class='fas fa-comments'></i></button>
</div>