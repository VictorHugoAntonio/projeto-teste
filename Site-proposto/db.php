<?php
                 $con = mysqli_connect("localhost","root","","testrgb") 
or die(mysqli_error($con));
                 mysqli_query($con,"SET NAMES 'utf8'");
                 mysqli_query($con,'SET character_set_connection=utf8');
                 mysqli_query($con,'SET character_set_client=utf8');
                 mysqli_query($con,'SET character_set_results=utf8');
?>

