<?php
$id =  $_GET['id'];
console.log($id);
$con=mysqli_connect("localhost","root","root","db1");

if($con)
{
    mysqli_select_db($con,"db1");

    $query="SELECT * FROM student1 WHERE id ='$id'";
    
    $result = mysqli_query($con,$query);

    $row=mysqli_fetch_assoc($result);
     

?>
      <table>
      <tr>
        <td colspan=2>
        <center><font size=4><b>Student Detail</b></font></center>
        </td>
        </tr>
      <tr>
       <td>Name</td>
        <td><input type=text name="name" id="name" value=<?php  echo $row['name']; ?> readonly></td>
        </tr>
      <tr>
        <td>Personal Address</td>
        <td><input type="text" name="emailid" id="emailid" value=<?php  echo $row['emailid']; ?> readonly></td>
        </tr>
        <tr>
        <td>EmailId</td>
        <td><input type="text" name="address" id="address" value=<?php  echo $row['address']; ?> readonly></td>
        </tr>
      <tr>
        <td>DOB</td>
        <td><input type="text" name="dob" id="dob" value=<?php  echo $row['dob']; ?> readonly></td>
        </tr>
      <tr>
        <td>MobileNo</td>
        <td><input type="text" name="mobile" id="mobile" value=<?php  echo $row['mobile']; ?> readonly></td>
        </tr>
        
        </table>
    <?php
            }
            ?>