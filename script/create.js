var x = document.getElementById("login");
var y = document.getElementById("register");

function login() {
  x.style.left = "4px";
  y.style.right = "-520px";
  x.style.opacity = 1;
  y.style.opacity = 0;
}

function register() {
  x.style.left = "-510px";
  y.style.right = "5px";
  x.style.opacity = 0;
  y.style.opacity = 1;
}

function validateForm() {
  var fname = document.forms["registrationForm"]["fname"].value;
  var lname = document.forms["registrationForm"]["lname"].value;
  var email = document.forms["registrationForm"]["cust_email"].value;
  var password = document.forms["registrationForm"]["cust_pass"].value;
  var rememberMe = document.getElementById("register-check").checked;

  // Check if any of the required fields are empty
  if (fname === "" || lname === "" || email === "" || password === "") {
    alert("Please fill in all the fields.");
    return false;
  }

  // Validate email format
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!email.match(emailRegex)) {
    alert("Please enter a valid email address.");
    return false;
  }

  // Validate password complexity
  var passwordRegex =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/;
  if (!password.match(passwordRegex)) {
    alert(
      "Password must be between 8 and 16 characters and contain at least one uppercase letter, one lowercase letter, one number, and one special character."
    );
    return false;
  }

  // Validate the checkbox (I agree to terms and conditions)
  if (!rememberMe) {
    alert("Please check the Remember Me box.");
    return false;
  }

  return true;

  // Validate login form
  var loginUsername =
    document.forms["registrationFormm"]["login_username"].value;
  var loginPassword =
    document.forms["registrationFormm"]["login_password"].value;

  if (loginUsername === "" || loginPassword === "") {
    alert("Please fill in both Username/Email and Password fields for login.");
    return false;
  }

  return true;
}
