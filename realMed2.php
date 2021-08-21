<?php
 session_start();
 ?>
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
    body{
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
  height: 400px;
  background-color:rgba(1, 1,1, 0.7) ;
  position: relative;
  top: 70px;
  left: 25%;
  padding-top: 4%;

 
}
#txt{
  border-radius: 10px;
}
.col-md-5{
  margin-left: -50px;
  
}
#btnn{
  font-size: larger;
  font-weight: bolder;
  width: 50px;
 
}
#area{
  height: 50px;
  width: 330px;
  margin-left: -35px;
  margin-top: -10px;
  
  
}
#sub{
  font-size: larger;
  font-weight: bolder;
  margin-top: 10px;
  margin-left: -30px;
  width: 100px;
}
.x{
  height: 45px;
  width: 450px;
}
select{
  direction: rtl;
}
option{
  direction: rtl;
}
  </style>
  <body>
    
    <?php
    include 'header.php';
    ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="home.php">الرئيسيه  <i class="fa fa-chevron-right"></i></a></span> <span> الأدوية و العقاقير <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread"> الأدوية و العقاقير</h1>
          </div>
        </div>
      </div>
    </section>
      <!-- end banner -->
            <div class="ddd" >
            <b class="dh">البحث عن العقاقير</b><br><br>
            <form   method="post">
            <input name="product"  class="x" type="text"><br><br>
            <select name="area" id="area" >
            <option value="agamy">عجمي</option>
            <option value="smouha">سموحة</option>
            <option value="glem">جليم</option>
            <option value="manshya">منشية</option>
            </select><br>
            <input id="sub" type="submit" value="اضف" class="btn btn-primary"   name="submit">
            <br>

            <p style="padding-right: 30px;padding-top: 15px;"><a class="btn btn-primary" onclick="check()" role="button" style="color: white; font-weight: bolder;"> تأكيد الحجز</a></p><br>
        
            </form>
            </div>
          
<br><br><br><br><br>


        
<script type="text/javascript">
  function check()
  {
    alert("تم الحجز بنجاح سيصلك في خلال 60 دقيقة");
  }
  function notfound()
  {
    alert("هذا الدواء ليس موجود في هذه المنطقة ابحث في منطقة اخرى");
  }
</script>


 <?php
 $host="localhost";
$user="root";
$pass="";
$db="medicine";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn){}

    else
    {
    die($conn);
    }


if(isset($_POST['submit']))
        {
  if(!empty($_POST['product']))
         {
          $product =  $_POST['product'];
          $a = $_POST['area'];
          $sql = "SELECT *  FROM `$a`  WHERE `product`LIKE '$product' ";
          $result1 = $conn->query($sql)  ;
          
          if ($result1->num_rows > 0)
           {
        while($row = $result1->fetch_assoc())
         {
          $id=$row["id"];
          $quantity=$row["quantity"];
          $price=$row["price"];
          if ($quantity ==0)
          {?>
            <script type="text/javascript">
            notfound();
            </script>
          <?php
          }
          $q=$quantity-1;
          $sql2 = "UPDATE `$a` SET `quantity`=$q WHERE `id`=$id";
          mysqli_query($conn,$sql2);
          break;          
          }
         }
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
        if(!in_array($id, $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $id,  
                     'item_name'               =>     $product,  
                     'item_price'          =>     $price
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }    
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $id, 
                'item_name'               =>   $product,  
                'item_price'          =>     $price
               );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
      }

}
if(isset($_GET["action"]))  
 { 
    if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="realMed2.php"</script>';  
                }  
           }  
      }  
 }

?>

<div class="container" style="width:700px;">  
               
                <div style="clear:both"></div>  
                <br />  
                <h3 style="font-weight: bold;">قائمة المشتريات</h3> 
                <br> 
                <div class="table-responsive">  
                     <table class="table table-bordered" style="background-color: white">  
                          <tr>  
                               <th width="40%">الاسم</th>  
                               <th width="20%">السعر</th>  
                               <th width="5%">حذف</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td><a href="realMed2.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="2" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                             
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />


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