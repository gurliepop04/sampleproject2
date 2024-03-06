<!-- HTML Document for Creating a New Account -->
<!DOCTYPE html>
<html>
	<head> 
		<title> Create New Account </title> <!-- Website Title -->
			<link rel = "icon" type = "image/x-icon" href = "logo.png"> <!-- Logo Icon -->
			<link rel = "stylesheet" href = "create_acc.css"> <!-- CSS Stylesheet -->
			<script src = "create_acc.js"> </script> <!-- JavaScript File -->
	</head>
	
	<body>
		
		 <!-- Logo Section on the left -->
		<div id = "logo_box">
			<img src = "logo.png" alt = "Doughven Pizza logo" width = "50%">
		</div>
		
		<!-- Main Content Section on the right-->
		<div id = "wrap">
			
			<!-- Create New Account Header -->
			<div id = "create_acc">
				<h1> Create New Account </h1>
			</div>
			
			<!-- Account Information Form -->
			<form name = "Create_Account" action = "new_account.php" method = "post">
				
				<!-- Account Information Header -->
				<div id = "acc_info">
					<h2> Account Information </h2>
				</div>
			
				<div id = "data">
					 <!-- Full Name -->
					<h6> First Name </h6>
						<input type = "text" name = "first_name" value = "">
					<h6> Last Name </h6>
						<input type = "text" name = "last_name" value = "">
						
					<h6> Username </h6>
						<input type = "text" name = "user1" value = "">
						<p> <i> *must be 8 characters with uppercase and lowercase characters only, and must start with a capital letter. </i> </p>
					<h6> Password </h6>
						<input type = "password" name = "password" value = "">
						<p> <i> *must be 8 characters with at least one uppercase, lowercase, numeric, and special characters. </i> </p>
					
					<h6> Confirm Password </h6>
						<input type = "password" name = "confirm_pass" value = "" placeholder = "Re-enter Password">
						
					<!-- Personal Details Header -->	
					<div id = "details">
						<h2> Personal Details </h2>
					</div>
						
					<h6> Email Address </h6>
						<input type = "text" name = "email" value = "">
						
					<div id = "date">
						<!-- Dropdowns for selecting month, day, and year --> 
						<h6> Date of Birth </h6>
						<select id="selected_month" name="selected_month">
					  	<option disabled selected> Month </option>
					  	<option value="January"> January </option>
					  	<option value="February"> February </option>
					    <option value="March"> March </option>
					   	<option value="April"> April </option>
					   	<option value="May"> May </option>
					  	<option value="June"> June </option>
					   	<option value="July"> July </option>
					   	<option value="August"> August </option>
					  	<option value="September"> September </option>
					 		<option value="October"> October </option>
					   	<option value="November"> November </option>
					   	<option value="December"> December </option>
						</select>

						<select id = "selected_day" name = "selected_day">
					    <option disabled selected> Day </option>
					    	<?php
					      	//Generate options for days (1-31)
					        for ($day = 1; $day <= 31; $day++) 
										{
					         	 echo '<option value="' . $day . '">' . $day . '</option>';
					         	}
					    	?>
					   </select>

					   <select id="selected_year" name="selected_year">
					     <option disabled selected>Year</option>
					       <?php
					        	// Generate options for years (current year to current year - 80)
					         	$currentYear = date('Y');
					          for ($year = $currentYear; $year >= $currentYear - 80; $year--) 
										{
					          	echo '<option value="' . $year . '">' . $year . '</option>';
					       	 	}
					 			?>
					  	</select>
						</div> 
						
						<div id = "gender">
							<!-- Dropdown for selecting gender --> 
							<h6> Gender: </h6>
					  	<select id="selected_gender" name="selected_gender">
					    	<option> Gender </option>
					      <option value="Female"> Female </option>
					      <option value="Male"> Male </option>
					   	</select>
						</div>
					
					<h6> Location </h6>
						<input type = "text" name = "address" value = "" placeholder = "City, Province, Country">
					
					<h6> Mobile Number </h6>
						<input type = "text" name = "mobile" value = "" placeholder = "0955-555-5555">
					
					<!-- Terms and Conditions Section -->
					<div id = "terms">
					 <button type = "button" id = "TermsButton" onclick="drop_down()"> Terms and Conditions: <span style="float: right; margin-right: 1%; font-size: 10px; padding-top: 5px;"> &#x25BC; </span> </button>
					  <!-- Detailed terms and conditions -->
						<p id = "terms_paragraph" style = "display: none;"> <i>
					1. <b> Acceptance of Terms </b> <br />
					By accessing or using the DOUGHVEN PIZZA website, you agree to comply with and be bound by these Terms and Conditions. 
					If you do not agree with any part of these terms, please do not use our website.
					<br /> <br />
					2. <b> Use of the Website </b> <br />
					You must be at least 18 years old or have the consent of a legal guardian to use this website.
					You agree to provide accurate and complete information when using or registering on our site.
					<br /> <br />
					3. <b> Privacy Policy </b> <br />
					Our Privacy Policy outlines how we collect, use, and disclose your personal information. 
					By using our website, you acknowledge that you have read and understand our Privacy Policy.
					<br /> <br />
					4. <b> Content </b> <br />
					All content on the DOUGHVEN PIZZA website, including text, images, and logos, is the property of DOUGHVEN PIZZA and is protected by intellectual property laws.
					You may not reproduce, distribute, or use our content without our written permission.
					<br /> <br />
					5. <b> Limitation of Liability </b> <br />
					DOUGHVEN PIZZA is not liable for any direct, indirect, incidental, consequential, or punitive damages arising from your use of the website.
					We do not guarantee the accuracy or completeness of the information on our site.
					<br /> <br />
					6. <b> Changes to Terms </b> <br />
					DOUGHVEN PIZZA reserves the right to update or modify these Terms and Conditions at any time without prior notice. 
					Your continued use of the website after changes are made constitutes acceptance of those changes.
					<br /> <br />
					7. <b> Termination </b> <br />
					DOUGHVEN PIZZA reserves the right to terminate or suspend your account and access to the website for any reason, including violation of these Terms and Conditions.
					
					</i> </p>
					</div>
				</div>
					<!-- Checkbox and Message Section -->
					<div id = "checkbox">
						<h5> <input type="checkbox" name = "agree_to_terms" value = "agree"> I agree to the Terms and Conditions </h5>
						<i> <p id = "message"> </p> </i>
					</div>
					
					<!-- Buttons Section -->
					<div id = "buttons">
						<input type="submit" value = "Create Account" onclick="return validateForm();">  
						<input type = "button" value = "Back to Login" onclick="window.location.href='index.html'">
				</div>
			</div>
		</form>
		
		 <!-- Copyright section -->
		<div id = "copyright">
			2023 &copy;  DOUGHVEN PIZZA. All rights reserved.
		</div>
		
		<!-- Disclaimer section -->
		<div id = "disclaimer">
		    <marquee behavior = "scroll" direction = "left">
		        Disclaimer: This website is created for school purposes only. &nbsp; All content, information, and data on this site are fictional and for educational use. &nbsp;
						None of the information presented here is real, and it should not be considered as such.
		    </marquee>
		</div>
		
	</body>
</html>