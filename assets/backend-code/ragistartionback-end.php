<?php

    $Name=$_POST['name'];
     $mob=$_POST['mob'];
     $mail=$_POST['email'];
     $pass=$_POST['pass'];
     
     
     $Database="spinktech";  
     //$connection=mysqli_connect("localhost","root","") or die("Cannot Connect");
     $conn = mysqli_connect('localhost', 'root', '', 'spinktech');
     mysqli_select_db($conn,$Database);
     $sql = "insert into registrtion values ('$Name','$mob','$mail','$pass')";
     $result=mysqli_query($conn,$sql);

 if(! $result)
{
   die('Could not enter data:' . mysqli_error());
}
 else {
    echo 'successfully Registered';
}
   mysqli_close($conn);
   
  header('Location:login.html');
 ?>


