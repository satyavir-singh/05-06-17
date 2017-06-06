<?php
$emailid =  $_POST['emailid'];
$con=mysqli_connect("localhost","root","root","db1");

if($con)
{
    mysqli_select_db($con,"db1");
    $query="SELECT * FROM student1 WHERE emailid ='$emailid'";
    $result = mysqli_query($con,$query);

    $row=mysqli_num_rows($result);
    if( $row == 1){
        $USER="email exists";
    }
    else
    {
        $USER="email not exists";
    }

}
            
?>

<h1><?php echo $USER; ?> </h1> 