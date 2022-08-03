<?php
    //Session Started
    session_start();
    //Connect Database
    $conn = mysqli_connect('localhost', 'root', '', 'fmh');
    //Define Links
    // define('RESTORE', 'http://localhost/process/html/restoredata.php');
    define('HOME', 'http://localhost/findmehome/html/homeLandlord.php');
    define('SIGNUP', 'http://localhost/findmehome/html/signup.php');
    define('ROOM', 'http://localhost/findmehome/html/addRoom.php');
    define('FORGOT', 'http://localhost/findmehome/html/forgot_pw.php');
    define('SIGNIN', 'http://localhost/findmehome/html/signin.php');
    define('TENANT1', 'http://localhost/findmehome/html/homeTenant1.php');
    define('WISHLIST', 'http://localhost/findmehome/html/wishlist.php');
    define('RECOVER', 'http://localhost/findmehome/html/passwordRecovery.php');
?>
 