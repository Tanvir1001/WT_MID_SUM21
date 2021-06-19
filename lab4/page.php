<?php
	
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
    $con_password="";
	$err_con_password="";
    $email="";
	$err_email="";
	$phone_no = "";
	$phone_code = "";
	$err_phone = "";
	$address_street = "";
	$address_city = "";
	$address_state ="";
	$address_zip ="";
	$err_address ="";
	$birth_day ="";
	$birth_month ="";
	$birth_year ="";
	$err_birth_date ="";
	$gender="";
	$err_gender="";
	$hears=[];
	$err_hears="";
	$bio="";
	$err_bio="";
	$hasError = false;
	
    function hearExist($h){
		global $hears;
		foreach($hears as $hear){
			if ($h == $hear) return true;
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Name
		if(empty($_POST["name"])){
			$err_name=" *Name Required";
			$hasError = true;
		}
        elseif (strlen($_POST["name"]) < 6){
			$hasError = true;
			$err_name = "*Name must be greater than 6 characters long";
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}

        //UserName
		if(empty($_POST["username"])){
			$err_username=" *Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
        //Password
		if(empty($_POST["password"])){
		$err_password=" *Password required";
		$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 8){
		$err_password=" *Password must be 8 characters long";
		$hasError = true;
		}
		else{
		$password=$_POST["password"];
		}
        //Confram Password
        if(empty($_POST["con_password"])){
            $err_con_password=" *Confram Password required";
            $hasError = true;
            }
            elseif(strlen($_POST["con_password"]) < 8){
            $err_con_password=" *Confram Password must be 8 characters long";
            $hasError = true;
            }
            else{
            $con_password=$_POST["con_password"];
            }
        //Email
        if(empty($_POST["email"])){
            $err_email=" *Email required";
            $hasError = true;
            }
            
            else{
            $email=$_POST["email"];
            }
        //Phone
	    if(empty($_POST["code"]))
		{
		$err_phone = " *Code and Number required ";
		}
		else if(!is_numeric($_POST["code"]))
		{
		$err_phone = " *Numeric charecter required";
		}
		else{ $phone_code = htmlspecialchars($_POST["code"]);}
		
		if(empty($_POST["number"]))
		{
		$err_phone = " *Code and Number required ";
		}
		else if(!is_numeric($_POST["number"]))
		{
		$err_phone = " *Numeric charecter required ";
		}
		else{ $phone_no = htmlspecialchars($_POST["number"]);}
        //Address
		if(empty($_POST["street"]))
		{
			$err_address = " *Street, city, state and zip code required";
		}
		else{ $address_street = htmlspecialchars($_POST["street"]);}
		
		if(empty($_POST["city"]))
		{
			$err_address = " *Street, city state and zip code required";
		}
		else{ $address_city = htmlspecialchars($_POST["city"]);}
		
		if(empty($_POST["state"]))
		{
			$err_address = " *Street, city state and zip code required";
		}
		else{ $address_state = htmlspecialchars($_POST["state"]);}
		
		if(empty($_POST["zip"]))
		{
			$err_address = " *Street, city state and zip code required";
		}
		else{ $address_zip = htmlspecialchars($_POST["zip"]);}
		
		if(isset($_POST["day"]))
		{
			$birth_day = $_POST["day"];
		}
		else{$err_birth_date = " *Day, Month, Year required";}
		
		if(isset($_POST["month"]))
		{
			$birth_month = $_POST["month"];
		}
		else{$err_birth_date = " *Day, Month, Year required";}
		
		if(isset($_POST["year"]))
		{
			$birth_year = $_POST["year"];
		}
		else{$err_birth_date = " *Day, Month, Year required";}

        //Gender
		if(!isset($_POST["gender"])){
			$err_gender="  *Gender Required";
			$haserror = true;
		}
		else{
			$gender = $_POST["gender"];
		}
        //Hears
		if(!isset($_POST["hears"])){
			$err_hears = " *At least select 1 option";
			$hasError = true;
		}
		else{
			$hears=$_POST["hears"];
		}
		if(!empty($_POST["bio"]))
		{
			$bio = htmlspecialchars($_POST["bio"]);
		}
		else{$err_bio = " *Bio required";}
		
	
        if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
            echo $_POST["con_password"]."<br>";
            echo $_POST["email"]."<br>";
			echo $_POST["gender"]."<br>";
			$arr = $_POST["hears"];
			echo $_POST["bio"]."<br>";

			foreach($arr as $e){
				echo "$e<br>";
			}
        }
			
		
	}
	
?>

<html>
	<head>
		<title>Club Member Registration</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<legend>Club Member Registration</legend>
				<table>
                    <tr>
                        <td align="right">Name:</td>
                        <td><input name="name" value="<?php echo $name;?>" type="text"">
                        <span><?php echo $err_name;?></span></td>
                    </tr>
					<tr>
                        <td align="right">Username:</td>
                        <td><input name="username" value="<?php echo $username;?>" type="text">
                        <span><?php echo $err_username;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input name="password" value="<?php echo $password;?>" type="password">
                        <span><?php echo $err_password;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Confram Password:</td>
                        <td><input name="con_password" value="<?php echo $con_password;?>" type="password">
                        <span><?php echo $err_con_password;?></span></td>
                    </tr>
                    <tr>
						<td align="right">Email:</td>
						<td><input name="email" type="email"  value="<?php echo $email;?>">
                        <span><?php echo $err_email;?></span></td></td>
					</tr>
					<tr>
						<td align="right">Phone:</td>
						<td>
							<input name="code"type="text" placeholder="code" size="3"  value="<?php echo $phone_code;?>"> -
							<input name="number" type="text" placeholder="Number" size="9"  value="<?php echo $phone_no;?>">
							<span><?php echo $err_phone; ?></span>
						</td>
					</tr>
                    <tr>
						<td align="right">Address:</td>
						<td><input name="street" type="text" placeholder="Street Address"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input name="city" type="text" placeholder="City" size="10"> -
							<input name="state" type="text" placeholder="State" size="10">
							<span><?php echo $err_address; ?></span>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input name="zip" type="text" placeholder="Postal/Zip Code">
						</td>
					</tr>
                    <tr>
						<td align="right">Birth Date:</td>
						<td>
							<select name="day">
								<option disabled selected>Day</option>
								<?php
									for ($i=1; $i<=31 ; $i++) { 
										echo "<option>$i</option>";
									}
								?>					
							</select>
							<select name="month" >
							<option disabled selected value="month" >Month</option>
								<?php
									$arr = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "July","Aug","Sep","Oct","Nov","Dec");
									foreach ($arr as $a) {
									 	echo "<option>$a</option>";
									 }
								?>						
							</select>
							<select name="year">
								<option disabled selected value="year">Year</option>
									<?php
										for ($i = 2020; $i >= 1970; $i--) {
										
											echo "<option>$i</option>";
										}
									?>							
							</select><span><?php echo $err_birth_date; ?></span>
						</td>
					</tr>
                    <tr>
					<td align="right">Gender:</td>
                        <td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male 
                            <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female
                            <span><?php echo $err_gender;?></span></td>
                    </tr>
                    <tr>
					<td align="right">Where did you hear <br> about us?</td>
					<td>
						<input type="checkbox" value="Friend"<?php if(hearExist("Friend")) echo "checked";?>  name="hears[]">A friend or Colleague  <br>
						<input type="checkbox" value="Google"<?php if(hearExist("Google")) echo "checked";?>  name="hears[]" >Google<br>
						<input type="checkbox" value="Blog"<?php if(hearExist("Blog")) echo "checked";?>  name="hears[]">Blog Post <br> 
						<input type="checkbox" value="News"<?php if(hearExist("News")) echo "checked";?>  name="hears[]">News Article
					</td>
				</tr>
                <tr>
					<td align="right">Bio:</td>
					<td><textarea name="bio"><?php echo $bio;?></textarea>
						<br><span><?php echo $err_bio;?></span>
					</td>
					
				</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>