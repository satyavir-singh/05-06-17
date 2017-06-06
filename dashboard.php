<?php
session_start();
if(!array_key_exists('username', $_SESSION))
{
	header('Location: login.html');
}
else
{
}

$con=mysqli_connect("localhost","root","root","db1");

				if($con)
				{
						mysqli_select_db($con,"db1");
				}

?>
<!DOCTYPE html>
<html>
<head>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){

			
			$(".student").click(function(){
				$(".student_div").show();
				$(".create_div").hide();
			});

			$(".create").click(function(){
				$(".create_div").show();
				$(".student_div").hide();
			});


		});

</script>

	
</head>
<body bgcolor="#dfe3ee">
	<div class="header" style="height:40px;width:1200px;background-color: #3b5998;">
	
		<div style="float:left;width:900px;height:20px;">
			<h3 style="padding-left:10px;">Dashboard</h3>
		</div>

		<div style="float:right;width:10%;height:20px;">
			<?php echo $_SESSION['username']; ?><br>
			<a href="logout.php">LOG OUT</a>
		</div>

	</div>                  
	<hr>

	<div style="float:left;width:200px;" name="section" id="section" >

		<input type="button" value="Student Detail"  class="student" >
	</div> 








	<div style="float:left;display:none" class="student_div" action="">
			Student detail<br>
			<a href="create.php">Create</a><br>
			<table style="border: 1px solid black; border-bottom: 1px solid black;"> 
			<tr>
				<td>name</td>
				<td>emailid</td>
				<td>mobile</td>
				<td>address</td>
				<td>dob</td>
				<td colspan="2">Action</td>

			</tr>

						<?php
				
						$query="SELECT * FROM student1";
						$result = mysqli_query($con,$query);

						while($row=mysqli_fetch_assoc($result))
						{
						?>

						
							<tr>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['emailid'] ?></td>
							<td><?php echo $row['mobile'] ?></td>
							<td><?php echo $row['address'] ?></td>
							<td><?php echo $row['dob'] ?></td>
							<td><a href="view.php?id=<?php echo $row['id']; ?>">View</a></td>
							<td><a href="update.php?id=<?php echo $row['id']; ?>">update</a></td>
							<td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
							</tr>
						
						
					
						<?php
						}
						?>

			</table>
	</div>


	<div class="create_div" style="display:none">
		<!-- <form  name="Student_form" method="post">


			<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"
			  cellspacing="2">
			<tr>
			  <td colspan=2>
			  <center><font size=4><b>Student Registration Form</b></font></center>
			  </td>
			  </tr>
			<tr>
			 <td>Name</td>
			  <td><input type=text name="name" id="name" size="30" required></td>
			  </tr>
			<tr>
			  <td>Personal Address</td>
			  <td><input type="text" name="address" id="address" size="30" required></td>
			  </tr>
			  <tr>
			  <td>EmailId</td>
			  <td><input type="text" name="emailid" id="emailid" size="30"></td>
			  </tr>
			<tr>
			  <td>DOB</td>
			  <td><input type="text" name="dob" id="dob" size="30"></td>
			  </tr>
			<tr>
			  <td>MobileNo</td>
			  <td><input type="text" name="mobile" id="mobile" size="30"></td>
			  </tr>
			  <tr>
			  <td><input type="reset"></td>
			  <td colspan="2"><input type="submit" value="Submit Form" class="submit_detail"></td>
			  </tr>
			  </table>
			  </form> -->

	</div>



	<div class="show" style="display:none">

	<table >
      <tr>
        <td colspan=2>
        <center><font size=4><b>Student Detail</b></font></center>
        </td>
        </tr>
      <tr>
       <td>Name</td>
        <td><input type=text name="name" id="name" value="data['name']"></td>
        </tr>
      <tr>
        <td>Personal Address</td>
        <td><input type="text" name="address" id="address" value="data['emailid']"></td>
        </tr>
        <tr>
        <td>EmailId</td>
        <td><input type="text" name="emailid" id="emailid" value="data['mobile']"></td>
        </tr>
      <tr>
        <td>DOB</td>
        <td><input type="text" name="dob" id="dob" value="data['address']"></td>
        </tr>
      <tr>
        <td>MobileNo</td>
        <td><input type="text" name="mobile" id="mobile" value="data['dob']"></td>
        </tr>
        <tr>
        <td><input type="reset"></td>
        <td colspan="2"><input type="submit" value="Submit Form" class="submit_detail"></td>
        </tr>
        </table>
	</div>





	
</body>
</html>
