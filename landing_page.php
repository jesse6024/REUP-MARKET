<?php


//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome...</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="password-strength-indicator.css">
</head>
<body>
<div class="container" style="    position: absolute;
    margin-top: -836px;
    width: 100%;">
        <h1>REUP MARKET</h1>

    </div>
    <div class="container" style="margin-left: -30px;
    margin-top: -193px;
    height: 57%;
    width: 102%;">
     

     <header></header>
     <form style="">
     
        
<!--<div class="form">-->
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
</br>
<a href="dashboard.php">Dashboard</a>
<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}




?>
<p><a href="login.php">Logout</a></p>



</div>
</div>
</form>
</body>
</html>