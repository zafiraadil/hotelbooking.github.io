
<?php
session_start();
include("../config/connection.php");
include("header.php");

//  $date1=$_POST['date1'];
//  $date2=$_POST['date2'];
 $guests=$_POST['guests'];  
 
    // echo $rows;
    // $array[]=$rows;
    // print_r($array);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="listsstyle.css">
    <link rel="stylesheet" href="style.css">
    <title>Hotel Booking</title>
  </head>
  <body>

    
<?php
$res=mysqli_query($conn,"select * from hotel_lists where rooms='$guests'");

while($rows=mysqli_fetch_assoc($res)){
   
?>
 


<div class="lists">
<form action="room.php" method="POST" class="form-horizontal">

    <div class="container list bg-white">
    
        <!-- $max=sizeof($array);
        echo "size iss".$max;
        for($i=0;$i<$max;$4e3w2qi++)
        if(isset($array[$i])) 
        foreach($rows[$i] as $key=>$value)  -->
        <div class="row d-flex justify-content-center p-4">
            <div class="col-md-6">
                <img src="Media/Gallery/1-1.jpg" alt="">
            </div>
            <div class="col-md-6 pt-2">
                <h3> <?php echo $rows['hotelname']?></h3>
                <p><i class="bxs bx-email"></i>
                 <?php echo $rows['email']?>
                </p>
                <p><i class="bxs bx-phone"></i>
                 <?php echo $rows['phone']?>
                </p>
                <button class="btn btn-outline-dark mt-3">Book Now</button>
            </div>
        </div>
       
    </div>
</div>
</div>
</body>
</html>
<?php }    ?> 
    