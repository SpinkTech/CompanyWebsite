<?php
 session_start();
 
  $mail=$_POST['email'];
  $pass=$_POST['pass'];
  
       if((strcmp($mail,"admin@gmail.com"))==0 && (strcmp($pass,"admin"))==0)
       header('location:../Admin/Home.php');
       
  else
{
        $Host="localhost";
        $user="root";
        $password="";
        $table="registrtion";
        $Database="spinktech";
        
        $connection=mysqli_connect($Host,$user,$password) or die("Cannot Connect");
        mysqli_select_db($connection,$Database);
        $sql = "SELECT* from registrtion where uid='$mail 'and upass='$pass'";
        $result= mysqli_query($connection,$sql);

	if(! $result)
       {
                echo "Error description:" . mysqli_error($connection);
       }                                    
        $row = mysqli_fetch_array($result);
         if(!$row)
      { 
             echo ('User not Registered');
         
      }
        else
      {    
           $_SESSION["Anshul"]=$mail;
           
           header('Location:menu.php');
      }
	mysqli_close($connection);
      }

?>
 