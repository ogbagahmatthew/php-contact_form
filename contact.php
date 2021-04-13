<?php

// $msg="";
// if(isset($_GET['error']))
// {
//   $msg="Please Fill in the Blanks";
//   echo '<div class="alert alert-danger">'.$msg.'</div>';
// }
// if(isset($_GET['success']))
// {
//   $msg="Your  Message Has Been Sent";
//   echo '<div class="alert alert-success">'.$msg.'</div>';
// }

if(isset($_POST['btn-send']))
{
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone_no=$_POST['Phone_no'];
$Company=$_POST['Company'];
if(empty($Name)|| empty($email)|| empty($Phone_no)|| empty($Company))
{
    header('location:index.php?error');
}
else
{
    $to="ogbagahjb@gmail.com";
    $to="ogbagahjb@yahoo.com";
    $to="waleabb@yahoo.com";
    $to="cleansoul@yahoo.com";
    if(mail($to, $Name, $Email, $Phone_no, $Company));

{
    header('location:index.php?Successful');
}
}
}
else
{
    header('location:index.php?');
}
?>