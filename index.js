var allowedUserName = "AlbErTos";
var allowedPassword = "OrEopZ@3";
var attempts = 3;

/*I am making a login credential that can only be accepted when the conditions are met or if the default credentials are inputted*/

function login_attempt(form) { /*Login Form*/
	var username = document.getElementById('user1').value;  /*Username input*/
    var password = document.getElementById('password').value;  /*Password input*/
	var message = document.getElementById('notif');  /*Output if Login is successful or not*/
	
	if (username === allowedUserName && password === allowedPassword) {  /*Checking of Login credentials*/
		message.innerHTML = '<font color=#2e8b57>Login successful! Please wait...';
		setTimeout(function() {  /*This delays the code for 2 seconds*/
			window.location.href = 'welcome.php'; /*This will proceed to the next file*/
		}, 4000);
    } 
	else {
		attempts--;

		if (attempts > 0) {
			message.innerHTML = '<font color=red>Incorrect username or password. ' + attempts + '<font color=red> attempts remaining.';
			event.preventDefault(); // Prevent the form from being submitted
		}
		else {
			message.innerHTML = '<font color=red>Maximum attempts exceeded. Try Again...';
			event.preventDefault(); // Prevent the form from being submitted when the credentials are wrong
			form.user1.disabled=true;
			form.password.disabled=true;
		}
    }
}


/* 	if (username === allowedUserName || username.length === 8)
	{
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

    var hasUpperCase = false;
    var hasLowerCase = false;
    var hasNumeric = false;
    var hasSpecialChar = false;
		var specialSymbols = ['!', '@', '#', '$', '%', '*', '?', '&', '.', ',', '/', '<', '>', ':', ';', '[', ']', '{', '}', '|', '`', '~', '(', ')', '-', '_', '+', '=', '^'];

// Check if password is 8 characters with at least one uppercase, lowercase, numeric, and special characters
if (password === allowedPassword || password.length === 8) 
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

*/