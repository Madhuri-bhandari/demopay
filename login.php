<?php
//include_once('db.php');
if(isset($_POST['email']) && isset($_POST['password']))
{

  $email = $_POST['email'];
  $password = $_POST['password'];

  /*$query = "select email,password from user where email='$email' and password='$password'";
  $result=mysqli_query($conn,$query);

  */
   if($email=="demo123@gmail.com"&& $password="12345")
   {
    echo 1;
   }
   else
   {
    echo 0;
   
   }
}

?>



