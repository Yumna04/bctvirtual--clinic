<?php


    $connection=mysqli_connect('localhost','root','','virtual_clinic'); 
    
    //$room=$_POST['room_name'];
    //$patient=$_POST['patient_name'];
    $roomLink=$_POST['roomLink'];
    
    $query="insert into video_call(v_id,address) values('$roomLink');";
    
    mysqli_query($connection,$query);
         echo '<script>alert("inserted")</script>';

?>
