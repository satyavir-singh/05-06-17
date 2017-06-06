<?php
$email_exists_error=$_GET['email_exists_error'];
$name_error=$_GET['name_error'];
$email_error=$_GET['email_error'];
$dob_error=$_GET['dob_error'];
$mobile_error=$_GET['mobile_error'];
$address_error=$_GET['address_error'];




?>

<html>
<head>
<style type="text/css"></style>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
        } );
  </script>


   <!-- validation -->
  <!-- <script type="text/javascript">
      
      $(document).ready(function(){
        /*name*/
          $(".name").blur(function() {
                 var name = $(".name").val();
               
                 var regex = /^[a-zA-Z ]+$/;
                 if(name.match(regex))  
                   {  
                    return true;  
                   }  
                 else  
                   {  
                   alert("fail");  
                   return false;  
                   }  

            });

            /*address*/
            $(".address").blur(function() {
                var address = $(".address").val();
                if (address == '' )
                 {
                     alert("address empty...!!!!!!");
                 }


            });


            /*email*/
            $(".emailid").blur(function() {
                 var emailid = $(".emailid").val();
                 if (emailid == '' )
                 {
                     alert("Email Empty...!!!!!!");
                 }
                var atpos = emailid.indexOf("@");
                var dotpos = emailid.lastIndexOf(".");
                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailid.length) {
                    alert("Not a valid e-mail address");
                    return false;
                }

                $.ajax({
                    
                    url:'email.php',
                    data:"emailid="+emailid,
                    type:'POST',
                    success:function(result){
                        $(".email_response").html(result);
                    },
                     error : function() {
                          alert("Error");
                     }

                 });

            });

            /*mobile*/
            $(".mobile").blur(function() {
                  var mobile = $(".mobile").val();
                  if (mobile == '' )
                   {
                       alert("Mobile NO Empty...!!!!!!");
                   }
                    var pattern = /^\d{10}$/;
                    if (pattern.test(mobile)) {
                        return true;
                    }
                    alert("It is not valid mobile number.input 10 digits number!");
                    return false;

            });


            /*dob*/
            $(".dob").blur(function() {
                  var dob = $(".dob").val();
                  if (dob == '' )
                   {
                       alert("dob  Empty...!!!!!!");
                   }


            });




            //submit

            $(".submit_detail").click(function(){

        /*name*/
                 var name = $(".name").val();
                 var regex = /^[a-zA-Z ]+$/;
                 if(name.match(regex))  
                   {  
                    return true;  
                   }  
                 else  
                   {  
                   alert("fail");  
                   return false;  
                   }  

            /*address*/
                var address = $(".address").val();
                if (address == '' )
                 {
                     alert("address empty...!!!!!!");
                 }

            /*email*/
                 var emailid = $(".emailid").val();
                 if (emailid == '' )
                 {
                     alert("Email Empty...!!!!!!");
                 }
                  var atpos = emailid.indexOf("@");
                  var dotpos = emailid.lastIndexOf(".");
                  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                      alert("Not a valid e-mail address");
                      return false;
                  }
            /*mobile*/
                  var mobile = $(".mobile").val();
                  if (mobile == '' )
                   {
                       alert("Mobile NO Empty...!!!!!!");
                   }
                    var pattern = /^\d{10}$/;
                    if (pattern.test(mobile)) {
                        return true;
                    }
                    alert("It is not valid mobile number.input 10 digits number!");
                    return false;


            /*dob*/
                  var dob = $(".dob").val();
                  if (dob == '' )
                   {
                       alert("dob  Empty...!!!!!!");
                   }


            });
             

                 
});
      


      </script> -->

 

</head>
<body>
<form method="post" action="createdb.php">

      <table >
      <tr>
        <td colspan=2>
        <center><font size=4><b>Student Detail</b></font></center>
        </td>
        </tr>
      <tr>
       <td>Name</td>
        <td><input type=text name="name" id="name" class="name" ></td>
        <td><span class = "error">* <?php echo $name_error;?></span></td>
        </tr>
      <tr>
        <td>Personal Address</td>
        <td><textarea rows="5" cols="33" name="address" id="address" class="address"></textarea></td>
        <td><span class = "error">* <?php echo $address_error;?></span></td>
        </tr>
        <tr>
        <td>EmailId</td>
        <td><span><input type="text" name="emailid" id="emailid" class="emailid" >
        </span></td>
        <td><span class = "error">* <?php echo $email_error;?></span></td>
        <td>
        <span class="email_response">
        <?php
            if(isset($email_exists_error))
            {
                echo $email_exists_error;
            }
        ?>
        </span></td>
        </tr>
      <tr>
        
        <td>Date:</td>
        <td> <input type="text" id="datepicker" class="dob" name="dob" ></p></td>
        <td><span class = "error">* <?php echo $dob_error;?></span></td>
        </tr>
      <tr>
        <td>MobileNo</td>
        <td><input type="text" name="mobile" id="mobile" class="mobile" ></td>
        <td><span class = "error">* <?php echo $mobile_error;?></span></td>
        </tr>
        <tr>
        <td><input type="reset"></td>
        <td colspan="2"><input type="submit" value="Submit Form" class="submit_detail"></td>

        </tr>
        </table>
        </form>

  </div>
  </body>
  </html>


        