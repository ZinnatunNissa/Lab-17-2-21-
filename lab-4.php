<?php
     $uname="";
	 $err_uname="";
	 $pass="";
	 $err_pass="";
	 $gender="";
	 $err_gender="";
	 $hobbies="";
	 $err_hobbies="";
	 $profession="";
	 $err_profession="";
	 $bio="";
	 $err_bio="";
	 
     if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
			 if(empty($_POST["uname"])){
				 $err_uname="Username Required";
			 }
			 elseif(strlen($_POST["uname"])<6){
				 $err_uname="Username Must Be 6 characters Long";
			 }
			 elseif(strpos($_POST["uname"],"")){
				 $err_uname="Username Should Not Contain White Space";
			 }
			 else{
				 $uname=$_POST["uname"];
			 }
			 if(empty($_POST["pass"])){
				 $err_pass="Password Required";
			 }
			 elseif(strlen($_POST["pass"])<8){
				 $err_pass="Password Must Be 8 Charachter Long";
			 }
			 else{
				 $pass=$_POST["pass"];
			 }
			 if(empty($_POST["gender"])){
				 $err_gender="Chose Your Gender";
			 }
			 else{
				 $gender=$_POST["gender"];
			 }
			  if(empty($_POST["hobbies"])){
				 $err_hobbies="Select Your Hobbies";
			 }
			 else{
				 $hobbies=$_POST["hobbies"];
			 }
			  if(empty($_POST["profession"])){
				 $err_profession="Confirm Your Profession";
			 }
			 else{
				 $profession=$_POST["profession"];
			 }
			 if(empty($_POST["bio"])){
				 $err_bio="Bio Required";
			 }
			 else{
				 $bio=$_POST["bio"];
			 }
		 } 
?>

<html>
     <head></head>
	 <body>
	      <h1>User Registration</h1>
		  <form action="" method="post">
		      <table>
			        <tr>
					    <td><span>Username</span></td>
						<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
					    <td><span>Password</span></td>
						<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
						<span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
					    <td><span>Gender</span></td>
						<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
						<input type="radio" name="gender" value="Female">Female<br>
						<span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
					    <td><span>Hobbies</span></td>
						<td>:
						<input type="checkbox" value="Movies" name="hobbies[]">Movies
						<input type="checkbox" value="Music" name="hobbies[]">Music
						<input type="checkbox" value="Games" name="hobbies[]">Games
						<input type="checkbox" value="Garden" name="hobbies[]">Garden<br>
						<span><?php echo $err_hobbies;?></span></td></td>
					</tr>
					<tr>
					    <td><span>Profession</span></td>
						<td>
						    :<select name="profession">
							     <option disabled selected>Chose One</option>
						         <option>Teaching</option>
								 <option>Student</option>
								 <option>Business</option>
							</select>
							<span><?php echo $err_profession;?></span></td>
						</td>
					</tr>
					<tr>
					    <td><span>Bio</span></td>
						<td>:<textarea name="bio"><?php echo $bio;?></textarea>
						<span><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
			  </table>
		</form>