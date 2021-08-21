<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title> login</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <style >


      body{
        --color-primary: 	#00994d;
        --color-primary-dark: #007f67;
        --color-secondary: #252c6a;
        --color-error: #cc3333;
        --color-success: #4bb544;
        --border-radius: 4px;
        background: url(imge.jpg);
        background-size: cover;
      }
    .containerlo {
          width: 400px;
          max-width: 400px;
          margin-bottom:1rem;
            margin-top:3rem;
          margin-right:35rem;
          padding: 2rem;
          box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
          border-radius: var(--border-radius);
          background-color:white;


      }

      .containerlo,
      .form__input,
      .form__button {
          font: 500 1rem 'Quicksand', sans-serif;
      }

      .form--hidden {
          display: none;
      }

      .form > *:first-child {
          margin-top: 0;
      }

      .form > *:last-child {
          margin-bottom: 0;
      }

      .form__title {
          margin-bottom: 2rem;
          text-align: center;
      }

      .form__message {
          text-align: center;
          margin-bottom: 1rem;
      }

      .form__message--success {
          color: var(--color-success);
      }

      .form__message--error {
          color: var(--color-error);
      }

      .form__input-group {
          margin-bottom: 1rem;
      }

      .form__input {
          display: block;
          width: 100%;
          padding: 0.75rem;
          box-sizing: border-box;
          border-radius: var(--border-radius);
          border: 1px solid #dddddd;
          outline: none;
          background: #eeeeee;
          transition: background 0.2s, border-color 0.2s;
      }

      .form__input:focus {
          border-color: var(--color-primary);
          background: #ffffff;
      }

      .form__input--error {
          color: var(--color-error);
          border-color: var(--color-error);
      }

      .form__input-error-message {
          margin-top: 0.5rem;
          font-size: 0.85rem;
          color: var(--color-error);
      }

      .form__button {
          width: 100%;
          padding: 1rem 2rem;
          font-weight: bold;
          font-size: 1.1rem;

          color: white;
          border: none;
          border-radius: var(--border-radius);
          outline: none;
          cursor: pointer;
          background: var(--color-primary);
      }

      .form__button:hover {
          background: var(--color-primary-dark);
      }

      .form__button:active {
          transform: scale(0.98);
      }

      .form__text {
          text-align: center;
      }

      .form__link {
          color: var(--color-secondary);
          text-decoration: none;
          cursor: pointer;
      }

      .form__link:hover {
          text-decoration: underline;
      }
    </style>

<script>
      function formValidation ( ){
        flag = true;

        if (document.myForm.user_email.value == "" )

        {

        alert ( "من فضلك ادخل الايميل" );

        flag = false;

        }
        flag = true;

        if (document.myForm.user_pass.value == "" )

        {

        alert ( "من فضلك ادخل كلمة السر" );

        flag = false;

        }
        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)* (\.\w{2,3})+$/.test(myForm.user_email.value))  //Regular expressions to validate email

        {

        alert("ادخل عنوان بريد صالح!");

        flag = false;


        }
      }
</script>


  </head>
  <body>
   <?php
    include 'header.php';
    ?>


<section>

    <div class="containerlo">

           <form  method="POST" action="login.php" class="form" id="login" name="myForm" onsubmit="home.php">

               <h1 class="form__title">تسجيل الدخول</h1>
               <div class="form__message form__message--error"></div>
               <div class="form__input-group">
                   <input type="text" class="form__input" name="user_email" autofocus placeholder="الايميل">
                   <div class="form__input-error-message"></div>
               </div>
               <div class="form__input-group">
                   <input type="password" class="form__input" name="user_pass" autofocus placeholder="كلمة السر">
                   <div class="form__input-error-message"></div>
               </div>
               <button class="form__button" name="btn1" type="submit" onclick="home.php"> <a href="home.php">متابعة</a>  </button>
               <p class="form__text">
                   <a href="#" class="form__link">هل نسيت كلمة السر؟</a>
               </p>
               <p class="form__text">
                   <a class="form__link" href="signup.php" id="linkCreateAccount">ليس لديك حساب ؟ قم بانشاء حسابك</a>
               </p>

           </form>

           <?php
           

  require "db-conn.php";
  if(isset($_POST['user_email'])){
 $mail= $_POST['user_email'] ;
  }
  if(isset($_POST['user_pass'])){
 $pass=$_POST['user_pass'];
}


if(isset($_POST['btn1'])){
  $_SESSION['email']=$_POST['user_email'] ;
  $_SESSION['password']=$_POST['user_pass'];
  $x= $_SESSION['email'];
  $y= $_SESSION['password'];
  
  
}
   

if($mail=="" || $pass==""){
    echo'<script> alert(" ادخل الايمل و كلمة السر")</script>' or die(mysqli_error("fi 7aga 8lt"));

 }
  
 else{
  $sql = "SELECT *  FROM `person1` WHERE `email` LIKE '$mail' AND `password` LIKE '$pass'";
  $result1 = $conn->query($sql)  ;

    if($result1->num_rows > 0){
        echo'<script> alert("  تم الدخول بنجاح")</script>';
        while($row =$result1-> fetch_assoc()){
          $name=$row["name"];
          $age=$row["age"];
          $city=$row["city"];
          $area=$row["area"];
          $gender=$row["gender"];
          $medical=$row["medicalhistory"];
         $_SESSION['fname']=$name;
         $_SESSION['fage']=$age;
         $_SESSION['fcity']=$city;
         $_SESSION['fgender']=$gender;
         $_SESSION['farea']=$area;
         $_SESSION['fmedical']=$medical;

        $fname=$_SESSION['fname'];
        $fage=$_SESSION['fage'];
        $fcity=$_SESSION['fcity'];
        $fgender= $_SESSION['fgender'];
        $farea=$_SESSION['farea'];
        $fmedical=$_SESSION['fmedical'];
        
        }

 }
   else {
    echo'<script> alert("  ليس لديك حساب رجاء انشاء حساب ")</script>';
    header( "location: signup.html");

  }
  
}
 
 
 

  ?>


       </div>


</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

       <?php
include 'footer.php';
?>
  </body>
</html>
