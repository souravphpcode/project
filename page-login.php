<!DOCTYPE html>
<html lang="en" dir="ltr">

<head> 
<link rel="icon" href="images/user.png">
</head> 
<head> 
<head>
    <meta charset="UTF-8">
    <title> Login and Registration  </title>
    <link rel="stylesheet" href="CSS/style_login.css" type='text/css'>
    <link rel="stylesheet" href="CSS/style_SIGNUP.css" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
</head>

<body>
    
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="images/frontImg.jpg" alt="">
                <div class="text">
                    <span class="text-1" style="color:black;">Every new friend is a <br> new adventure</span>
                    <span class="text-2" style="color:black;">Let's get connected</span>
                </div>
            </div>
        </div>
        <div class="cover1">
            <div class="back">
                <img src="images/ba.jpg" alt="">
                <div class="text">
                    <span class="text-1" style="color:white;">Complete miles of journey <br> with one step</span>
                    <span class="text-2" style="color:white;">Let's get started</span>
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
            <form action="conn.php" name="login_form" onsubmit="return validateForm()" method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="email" placeholder="Enter your email" >
                                <div id="email_txt"></div> 
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="pass" placeholder="Enter your password" >
                                <div id="password_txt"></div> 
                            </div>
                    
                            <div class="button input-box">
                                <input type="submit" value="Submit" name="Submit1"> 
                                <a class="btn btn-dark" href="home.php">Return Home Page</a>
                            </div>
                            <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
                        </div>
             </form>
                </div>
                <div class="signup-form">
                    <div class="title">Signup</div>
                    <form action="conn.php" name="signup_form" onsubmit="return validateForm1()" method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password"name="pass"placeholder="Enter your password" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="cpass"placeholder="Confirm your password" required>
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Submit" name="Submit">
                                &nbsp;
                                <!-- <input  type="button" value="BACK" name="btn1" onclick="history.back(-1)"><br> -->
                            </div>
                            <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
    function validateForm() {
    var emailid = document.forms["login_form"]["email"].value;
    var password = document.forms["login_form"]["pass"].value;
    if (emailid == null || emailid == "") {
        document.getElementById('email_txt').innerHTML = 
        " ";
        alert("Email can be blank....Please Enter your email id.....");
        return false;
    }
    else if (emailid.indexOf('@') <= 0) {
        document.getElementById('email_txt').innerHTML = " **<div class='error_color'>.Please Enter valid email-id....</div>";
        alert("please check email properly");
        return false;
    }
    else  if (password == null || password == "") {
        document.getElementById('password_txt').innerHTML = " **<div class='error_color'>Please Enter Password</div>";
        alert("please enter the password");
        return false;
    }
  
}
function validateForm1() {
    var namea = document.forms["signup_form"]["name"].value;
    var emailid = document.forms["signup_form"]["email"].value;
    var password = document.forms["signup_form"]["pass"].value;
    var secondpassword = document.forms["signup_form"]["cpass"].value;

    if (namea == null || namea == "" || namea < 2) {
        document.getElementById('username_txt').innerHTML = "<div class='error_color'> **Username must be filled out</div> ";
        alert("Enter the name");
        return false;
    }
    if (emailid == null || emailid == "") {
        document.getElementById('email_txt').innerHTML = 
        " **<div class='error_color'>Email can be blank....Please Enter your email id.....</div>";
        alert("Email can be blank....Please Enter your email id.....");


        return false;
    }
    else if (emailid.indexOf('@') <= 0) {
        document.getElementById('email_txt').innerHTML = " **<div class='error_color'>.Please Enter valid email-id....</div>";
        alert("please check email properly");
        return false;
    }
    else  if (password == null || password == "") {
        document.getElementById('password_txt').innerHTML = " **<div class='error_color'>Please Enter Password</div>";
        return false;
    }
    else  if(password.length < 8) {  
     document.getElementById('password_txt').innerHTML = "****<div class='error_color'>Password length must be atleast 8 characters</div>";
     alert("Password length must be atleast 8 characters")  ;
     return false;  
  }  
  
    if (secondpassword==null || secondpassword=="" ) {
    document.getElementById('password_txt').innerHTML = " **<div class='error_color'>Please Enter Re-password</div>";
    return false;
}
if( password!=secondpassword ){  
    document.getElementById('password_txt').innerHTML = " **<div class='error_color'>password must be same!</div>";
    alert("password can not be same");
    return false;  
}
    alert("Register Successfully!");
    // alert("please login using your Email id & Password");
 
	    return true;
           window.confirm("page-login.php");
       
}




</script>
</body>
</html>





