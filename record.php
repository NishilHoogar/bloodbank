<?php
$con  = mysqli_connect("localhost","root","","bloodbank_db");
 if (!$con) {
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM max_req_per_bloodgroup";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $bloodgroup[]  = $row['blood_group']  ;
            $volume[] = $row['max_volume'];
        }
 
 
 }
 
 
?>