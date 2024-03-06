// Function to toggle the visibility of the terms and conditions
function drop_down() {
	var termsParagraph = document.getElementById("terms_paragraph");
						
	if (termsParagraph.style.display === "none")
		{
			termsParagraph.style.display = "block";
		} 
						
	else 
		{
			termsParagraph.style.display = "none";
		}
}

// Function to validate the form data before submission
function validateForm() {
	 // Retrieving form data
	var firstName = document.forms["Create_Account"]["first_name"].value;
	var lastName = document.forms["Create_Account"]["last_name"].value;
	var username = document.forms["Create_Account"]["user1"].value;
	var password = document.forms["Create_Account"]["password"].value;
	var confirmPassword = document.forms["Create_Account"]["confirm_pass"].value;
	var emailAddress = document.forms["Create_Account"]["email"].value;
	var locAddress = document.forms["Create_Account"]["address"].value;
	var mobileNumber = document.forms["Create_Account"]["mobile"].value;
	var selectedMonth = document.getElementById("selected_month").value;
	var selectedDay = document.getElementById("selected_day").value;
	var selectedYear = document.getElementById("selected_year").value;
	var selectedGender = document.getElementById("selected_gender").value;
	var agreeToTerms = document.forms["Create_Account"]["agree_to_terms"].checked;
	
			// Checking if any field is empty
		  if (firstName === "" || lastName === "" || username === "" || password === "" || confirmPassword === "" || emailAddress === "" || locAddress === "" || mobileNumber === "" || selectedMonth === "Month" || selectedDay === "Day" || selectedYear === "Year" || selectedGender === "Gender") {
		         displayErrorMessage("All fields must be filled");
		         return false;
			}
			
			// Check username format
	    if (!isValidUsername(username)) {
	        displayErrorMessage("Invalid username format. Must be 8 characters with uppercase and lowercase only, and must start with a capital letter.");
	        return false;
	    }

	    // Check password format
	    if (!isValidPassword(password)) {
	        displayErrorMessage("Invalid password format. Must be 8 characters with at least one uppercase, lowercase, numeric, and special characters.");
	        return false;
	    }

	    // Check if passwords match
	    if (password !== confirmPassword) {
	        displayErrorMessage("Passwords do not match");
	        return false;
	    }

	    // Check if user agreed to terms
	    if (!agreeToTerms) {
	        displayErrorMessage("Please agree to the Terms and Conditions");
	        return false;
	    }

			// If all checks pass, form is valid
	    return true;
	}

// Function to check if the username is valid
function isValidUsername(username) {
	    // Check if username is 8 characters with uppercase and lowercase only, and starts with a capital letter

	    var specialSymbols = ['!', '@', '#', '$', '%', '*', '?', '&', '.', ',', '/', '<', '>', ':', ';', '[', ']', '{', '}', '|', '`', '~', '(', ')', '-', '_', '+', '=', '^'];

	    if (username.length === 8) {
	        if (username[0] >= 'A' && username[0] <= 'Z') {
	            for (var i = 0; i < username.length; i++) {
	                if (specialSymbols.includes(username[i]) || (username[i] >= '0' && username[i] <= '9')) {
	                    return false;
	                }
	            }
	            return true;
	        } else {
	            return false; // Username doesn't start with a capital letter
	        }
	    } else {
	        return false; // Username length is not 8
	    }
	}
	
// Function to check if the password is valid
function isValidPassword(password) {
        var hasUpperCase = false;
        var hasLowerCase = false;
        var hasNumeric = false;
        var hasSpecialChar = false;
				var specialSymbols = ['!', '@', '#', '$', '%', '*', '?', '&', '.', ',', '/', '<', '>', ':', ';', '[', ']', '{', '}', '|', '`', '~', '(', ')', '-', '_', '+', '=', '^'];
		
		// Check if password is 8 characters with at least one uppercase, lowercase, numeric, and special characters
		if (password.length === 8) 
		{
		for (var i = 0; i < password.length; i++) 
		{
		 	if (password[i] >= 'A' && password[i] <= 'Z') 
			{
				hasUpperCase = true;
			}
			else if (password[i] >= 'a' && password[i] <= 'z') 
			{
		    hasLowerCase = true;
			}
			else if (password[i] >= '0' && password[i] <= '9') 
			{
	    	hasNumeric = true;
			}              
			else if (specialSymbols.includes(password[i])) 
			{
			  hasSpecialChar = true;
			}
		}

		return hasUpperCase && hasLowerCase && hasNumeric && hasSpecialChar;
		} 
		else 
		{
			return false; // Password length is not 8
		}
}

	// Function to display error messages			
	function displayErrorMessage(message) {
	    // Display error message
	    document.getElementById("message").innerText = message;
			document.getElementById("message").style.color = 'red';
	}
					