<?php

$con=mysqli_connect("localhost","root","root","db1");

if($con)
{
    mysqli_select_db($con,"db1");

            $name=$_POST['name'];
            $address=$_POST['address'];
            $mobile=$_POST['mobile'];
            $emailid=$_POST['emailid'];
            $dob=$_POST['dob'];

            if (empty($name)) 
           {
                $name_error="name empty";
            }
            elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) 
            {
               $name_error = "Only letters and white space allowed";
            }

           
        /*address*/
           if(empty($address)) 
           {
               echo $address_error="address empty";

            }
            

        /*email*/

            if (empty($emailid))
            {
                $email_error="email empty";
                
            }
            elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailid))
            {
               $email_error = "Invalid email format";
            }
            
            

        /*mobile*/

            if (empty($mobile))
            {
                $mobile_error="mobile empty";
            }
            elseif(!preg_match("/^\d{10}$/",$mobile))
            {  
                echo $mobile_error="only num allow and 10 digit is allow ";
            }  
            

            

        /*dob*/

            if (empty($dob))
            {
                $dob_error="dob empty";
            
            }
            elseif (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dob))
            {
               $dob_error = "Invalid email format";
            }



            if( isset($name_error) || isset($address_error) || isset($email_error) || isset($mobile_error) || isset($dob_error)  )
            {
            header("Location:create.php?"."name_error=".$name_error ."&address_error=".$address_error .
                "&email_error=".$email_error ."&mobile_error=".$mobile_error ."&dob_error=".$dob_error );
            }

            else
            {
                    $query_email_exists="SELECT * FROM student1 WHERE emailid ='$emailid'";
                $result = mysqli_query($con,$query_email_exists);

                $row=mysqli_num_rows($result);
                if( $row == 1)
                {
                    header("Location:create.php?email_exists_error=email exists ");
                }
                else
                {
                    $query1= " INSERT INTO student1 (name,emailid,mobile,address,dob)  VALUES ('$name','$emailid','$mobile','$address','$dob') ";

                    $run=mysqli_query($con,$query1);


                    if($run)
                    {
                        
                        header('Location: dashboard.php');

                    }
                    else
                    {
                        echo "error !!";
                    }

                }

                


            }

}
?>