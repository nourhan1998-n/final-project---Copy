<?php
$host="localhost";
$user="root";
$pass="";
$db="final";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn){}

    else
    {
    die($conn);
    }
 $start=2;
 $end=6;
 $period=15;
 
$z=(($end-$start)*60)/$period;

 if(isset($_POST['test'])){
 
  $sql = "SELECT * FROM `covid` WHERE `checks`=0";
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
          $sql2 = "UPDATE `covid` SET `checks`=1 WHERE `number`=$i";
          mysqli_query($conn,$sql2);
           } 
 }
