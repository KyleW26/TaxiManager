<html>
<head>
<link rel="stylesheet" href="{URL}/template/{TPL}/assets/css/registerStyle.css">
<link rel="stylesheet" href="{URL}/template/{TPL}/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="{URL}/template/{TPL}/assets/css/fontawesome-all.css">
<title> {SITE_NAME} | Register </title>
<link rel="icon" href="{URL}/img/cab.png">
</head>

<body>
<nav>
</nav>

<!-- Beginning of the form -->
<div class="mainContainer">
<form action="">
    <center><h1>Sign Up to TaxiManager!</h1>
    <p>Please fill in this form to create an account</p></center>

    <hr>

    <label for="log_username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="reg_username" required><br>

    <label for="log_password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="reg_password" required><br>

    <label for="first_name"><b>Enter Forename</b></label>
    <input type="text" placeholder="Enter Forename" name="reg_first_name" required><br>

    <label for="last_name"><b>Enter Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="reg_last_name" required><br>

    <div class="clearfix">
      <a href="index.php"><center><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn">Sign Up</button></center>
    </div>
  </div>
</form>
</body>
