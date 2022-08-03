<?php include('include.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <title>Sign Up</title>

    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/signUp.css">
    

    <link rel="icon" type="image/x-icon" href="../Assests/logo.png">
    <style>
        .comment{
            text-align: center;
            font-size: 17px;
            font-weight: bold;
            border-bottom: 2px solid black;
        }
    </style>

    
</head>

<body onload="update(1)">
    <div id="signUpMainContaineer">
        <div class="websiteDetail">
            <h3>FindMe<span style="color:orange; font-family: Script Mt;">Home<span></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Obcaecati, quis.
            </p>
        </div>

        <div id="signUpContaineer">
            <div id="signUpBoxId">
                <div id="signUpHeadingId">
                    <h3 style="border: none; margin-bottom: -11px;"> Fill the details below to sign up </h3>
                    <span style="border: none; font-size: bold;">
                        <?php
                            if(isset($_SESSION['cook'])){
                                echo $_SESSION['cook'];
                                unset($_SESSION['cook']);
                            }                
                        ?>
                    </span>
                    <hr>
                    
                </div>
                <!-- <form action="" method="post" enctype="multipart/form-data"> -->

                <form action="signUpCore.php" method="post" enctype="multipart/form-data" autocomplete="off" id="signUpForm">
                     <!-- room type selection section  -->
                     <div id="userTypeContaineer">
                        <div id="userTypeTitle">
                            <p>Sign up as</p>
                        </div>

                        <div id="userTypeBox">
                            <div id="userTypeLabel">
                                <div id="userTypeLabel1">
                                    <p id="d1">Landlord</p>
                                </div>

                                <div id="userTypeLabel2">
                                    <p id="d2">Tenant</p>
                                </div>
                            </div>

                            <div id="userTypeSlider" onclick="userTypeSlider()"> </div>
                            <input type="hidden" name="role" id="role" value="tenant">
                        </div>
                    </div>

                    <input type="text" name="name" placeholder="Enter name" id="username">
                    <input type="date" id="dob" name="dob" value="" min="1923-01-01" max="2018-12-31"><br />

                    <select name="gender" id="gender">
                        <option value="" disabled selected hidden>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select> <br />

                    <select name="marital_status" id="maritalStatus">
                        <option value="" disabled selected hidden> Your Marital Status </option>
                        <option value="married" disabled="true"> Married </option>
                        <option value="unmarried" disabled="true"> Unmarried </option>
                        <option value="dc" disabled="true">Don't Care</option>
                    </select> <br />

                    <input type="text" name="address" placeholder="Enter permanent address" id="useraddress"><br />

                    <input type="number" name="phone" placeholder="Enter phone number" id="usercontact"><br />

                    <input type="email" name="email" placeholder="Enter email address" id="useremail"><br />

                    <!-- password area -->
                    <div>
                        <div class="firstPasswordClass">
                            <input type="password" name="password" placeholder="Enter password"
                                style="margin-right: 10px;" id="signUpPassword">

                            <abbr title="Show/hide password">
                                <input type="checkbox" name="" id="showHidePasswordCheckbox" 
                                    onclick="changePwVisibility(signUpPassword, signUpPasswordConfirm)">
                            </abbr>
                        </div>

                        <!-- input password for confirmation -->
                        <input type="password" name="passwordConfirm" placeholder="Enter password for confirmation"
                            id="signUpPasswordConfirm" style="margin-top:20px;">
                    </div>

                    <!-- profile picture -->
                    <div class="fileUploadClass">
                        <div class="fileUploadLabel">
                            <p>Upload your photo</p>
                        </div>
                        <div class="fileUploadChoose">
                            <!-- <input type="file" name="profilePic" id="userprofilepic"> -->
                            <input type="file" name="file" id="userprofilepic">
                        </div>
                    </div>

                    <!-- Citizenship id -->
                    <div class="fileUploadClass">
                        <div class="fileUploadLabel">
                            <p>Upload citizenship card photo</p>
                        </div>
                        <div class="fileUploadChoose">
                            <!-- <input type="file" name="citizenshipPic" id="useridpic"> -->
                            <input type="file" name="gfile" id="useridpic">
                        </div>
                    </div>

                    <!-- Text area for adding notes for owner -->
                    <textarea name="note" id="note" placeholder="Enter any note here ..." maxlength="20" hidden
                        style="margin-top: 5px;"></textarea><br>
                

                <div>
                    <input type="submit" name="btn" value="Sign Up">
                </div>
                </form>
                <a href="signIn.php"> Already have a account? </a>
            </div>

            <!-- email verification step -->
            <div id="emailVerificationBox">
                <h3>Enter the pin number sent to your email address</h3>
                <img src="../Assests/logo.png" alt="">
                <p class="comment" id="verificationAlert">
                    <?php
                        if(isset($_SESSION['comment2'])){
                            echo $_SESSION['comment2'];
                            unset($_SESSION['comment2']);
                        }                
                    ?>
                </p>

                <form action="signUpCore.php" method="post">
                    <input type="number" name="pin" id="" placeholder="Enter pin number here..." maxlength="4">
                    <input type="submit" value="Verify" name="verify">
                </form>
            </div>
        </div>
    </div>

    <!-- PHP FOR OWNER TABLE -->
    <?php
        // $ran;
        if((isset($_POST['btn'])) && (($_POST['email']) == "" || ($_POST['role']) == "" || ($_POST['name']) == "" || ($_POST['address']) == "" || ($_POST['dob']) == "" || ($_POST['gender']) == "" || ($_POST['phone']) == "" || ($_POST['password']) == "" || ($_POST['passwordConfirm']) == "" || ($_POST['marital_status']) == "")){
            $_SESSION['cook'] = "<span class='fail'><center><b>Please fill up all boxes first</b></center></span>";              
            header('location:'.SIGNUP);
            return false;
        }
        elseif(isset($_POST['btn'])){
            if($_POST['password'] == $_POST['passwordConfirm']){
                $password = md5($_POST['password']);
            }
            else{
                $_SESSION['cook']="<span class='fail'><center><b>Passwords are distinct</b></center></span>";
                header('location:'.SIGNUP);
                return false;
            }
            $email = strtolower($_POST['email']);
            $role = ucfirst($_POST['role']);
            $name = ucwords($_POST['name']);
            $address = ucwords($_POST['address']);
            $date = ($_POST['dob']);
            $gender = ucfirst($_POST['gender']);
            $phone = ($_POST['phone']);        
            $marital_status = ucfirst($_POST['marital_status']);
            $note = ucfirst($_POST['note']);
            // $note = str_ireplace(str_split('"\''), '\'', $note);
            $note = str_ireplace('"', '\"', $note);
            $note = str_ireplace("'", "\'", $note);

            
            // Checking email
            // $conn = mysqli_connect('localhost','root','','fmh');
            $sql2 = "SELECT * FROM `tbl_to`";

            $res = mysqli_query($conn, $sql2);

            if($res == true){
                $trigger = false;
                while($rows = mysqli_fetch_assoc($res)){
                    // echo $rows['email']."->".$email."<br>";
                    if($rows['email'] == $email && $rows['role'] == $role){
                        // echo "In ";
                        $trigger = true;
                        break;
                    }                    
                }
                if($trigger){                        
                    $_SESSION['cook'] = "<span class='fail'><center><b>".$role." with this email already exists in database</b></center></span>";
                    header('location:'.SIGNUP);
                    return false;                
                    // echo "end";
                }
                else{
                    // For file Image
                    // 1. Fetching the file[image]
                    $files = ($_FILES['file']);
                    // File Attached Datas
                    $file_name = $files['name'];
                    $file_error = $files['error'];
                    $file_tmp = $files['tmp_name'];
                    $file_typ = $files['type'];
                    // 2. Filtering out the image
                    //Breaks $filename into two parts
                    $file_ext = explode('.', $file_name);
                    $file_check = strtolower(end($file_ext));
                    //Stroing valid extensions in array
                    $file_ext_stor = array('png', 'jpg', 'jepg');
                    //Comparing given image extension with valid extension
                            
                    // For Gov_id Image
                    // 1. Fetching the file[image]
                    $gfiles = ($_FILES['gfile']);
                    // File Attached Datas
                    $gfile_name = $gfiles['name'];
                    $gfile_error = $gfiles['error'];
                    $gfile_tmp = $gfiles['tmp_name'];
                    $gfile_typ = $gfiles['type'];
                    // 2. Filtering out the image
                    //Breaks $filename into two parts
                    $gfile_ext = explode('.', $gfile_name);
                    $gfile_check = strtolower(end($gfile_ext));
                    //Stroing valid extensions in array
                    $gfile_ext_stor = array('png', 'jpg', 'jepg');

                    //Comparing given image extension with valid extension
                    if(!in_array($file_check, $file_ext_stor)){
                        $_SESSION['cook'] = "<span class='fail'><center><b>Image Extension is not matching.[png, jpg, jpeg]</b></center></span>";
                        header('location:'.SIGNUP);  
                        return false;                  
                    }
                    elseif(!in_array($gfile_check, $gfile_ext_stor)){
                        $_SESSION['cook'] = "<span class='fail'><center><b>Citezenship Extension is not matching.[png, jpg, jpeg]</b></center></span>";
                        header('location:'.SIGNUP);
                        return false;               
                    }


                    else{
                        $ran = rand(1000,100000);
                        $_SESSION['email'] = $email;
                        $_SESSION['role'] = $role;
                        $_SESSION['name'] = $name;
                        $_SESSION['address'] = $address;
                        $_SESSION['dob'] = $date;
                        $_SESSION['gender'] = $gender;
                        $_SESSION['phone'] = $phone;
                        $_SESSION['password'] = $password;
                        $_SESSION['marital_status'] =$marital_status;
                        $_SESSION['note'] = $note;
                        $_SESSION['file'] = $file_name;
                        $_SESSION['gfile'] = $gfile_name;
                        $_SESSION['count'] = 0;
                        $_SESSION['ran'] = $ran;
                        // distroyCookie();
                        // setcookie("email", $email, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("role", $role, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("name", $name, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("address", $address, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("dob", $date, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("gender", $gender, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("phone", $phone, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("password", $password, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("marital_status", $marital_status, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("note", $note, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;                    
                        // setcookie("file", $file_name, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("gfile", $gfile_name, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // setcookie("count", "0", time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;
                        // Query Successfull Executed                        
                        // $row = mysqli_fetch_assoc($res);
                        // while($row['email'])
                        // $to_email = $_POST['em'];
                        // setcookie('ran', $ran, time() + (120), 'signup_core.php');
                        $_SESSION['comment2'] = "<span class='success'><center><b>$ran</b></center></span>";//. mysqli_error();
                        ?> <script>signUpFormSteps();</script><?php

                        // $subject = "Email via FindMeHome";
                        // $body = "Hi, This is your verification code : $ran";
                        // $headers = "From: samirshrestha@kcc.edu.np";
                    
                        // if (mail($email, $subject, $body, $headers)) {
                        //     $_SESSION['cook'] = "<span class='success'><center>Verification code has been sent to '$email'</center></span>";//. mysqli_error();
                        //     mysqli_close($conn);
                        //     header('location:'.SIGNUP);
                        
                        // } 
                        // else {
                        //     $_SESSION['cook'] = "<span class='fail'><center>Verification code cannot be sent to '$email'</center></span>";//. mysqli_error();
                        //     mysqli_close($conn);
                        //     header('location:'.SIGNUP);
                        
                        // }                                                            
                    }                    
                }
            }           
        }
        elseif(isset($_POST['verify'])){        
            if(($_SESSION['ran']) == ($_POST['pin'])){           
                $email = strtolower($_SESSION['email']);//Email         
                $role = ucfirst($_SESSION['role']);//Role
                $name = ucwords($_SESSION['name']);//Name
                $address = ucwords($_SESSION['address']);//Address
                $date = ($_SESSION['dob']);//Date_Of_Birth
                $gender = ucfirst($_SESSION['gender']);//Gender
                $phone = ($_SESSION['phone']);//Phone
                $password = md5($_SESSION['password']);//Password
                $marital_status = ucfirst($_SESSION['marital_status']);//Maritial_Status
                $note = ucfirst($_SESSION['note']);//Note
                $file_name = ($_SESSION['file']);//DP_Image
                $gfile_name = ($_SESSION['gfile']);//Gov_Id
                // $note = str_ireplace(str_split('"\''), '\'', $note);
                // $note = str_ireplace('"', '\"', $note);
                // $note = str_ireplace("'", "\'", $note);

                // 3. Store gov_id in destination           
                $gdes_file = 'uploads/'.$gfile_name;
                move_uploaded_file($gfile_tmp, $gdes_file);
                // 3. Store dp in destination            
                $des_file = 'uploads/'.$file_name;
                move_uploaded_file($file_tmp, $des_file);
                                                            
                $sql = "INSERT INTO `fmh`.`tbl_to`(`role`, `dp`, `name`, `address`, `dob`, `gender`, `phone`, `email`, `password`, `marital_status`, `note`, `gov_id`) 
                VALUES ('$role', '$des_file', '$name', '$address','$date', '$gender', '$phone', '$email', '$password', '$marital_status', '$note', '$gdes_file')";

                $res = mysqli_query($conn, $sql);// or die(mysqli_error());
                // $conn->query($sql);                    
                if($res == true){                
                    $_SESSION['cook'] = "<span class='success'><center><b>Email Verified Successfully</b></center></span>"; 
                    destroyCookie();
                    header('location:'.SIGNUP);
                }
                else{
                    //Query could not executed successfully                
                    $_SESSION['cook'] = "<span class='fail'><center><b>Error while interacting with database</b></center></span>";//. mysqli_error();
                    // mysqli_close($conn);
                    header('location:'.SIGNUP);
                }
                return false;
            }
            else{            
                if($_SESSION['count'] == 3){            
                    if (isset($_SERVER['HTTP_COOKIE'])) {
                        // keeps all cookies in a array $cookies=>[0: "name=Samir"]
                        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                        // receives single array at a time as string $cookie=>["name=Samir"]
                        foreach($cookies as $cookie) {
                            // searches "=" in string and breaks it into multiple string keeping them in another array 
                            // $C_parts=>[0: "name", 1: "Samir"]
                            $C_parts = explode('=', $cookie);
                            // stores the name in $C_name
                            $C_name = trim($C_parts[0]);
                            setcookie($C_name, '', time()-1000);
                            setcookie($C_name, '', time()-1000, '/');
                        }
                    }
                    $_SESSION['cook'] = "<span class='success'><center><b>You've Entered lots of invalid codes<br>Cookies has been deleted</b></center></span>" ;//. mysqli_error();
                    header('location:'.SIGNUP);
                }
                else{
                    $count = $_SESSION['count'] ;
                    $count = $count + 1 ;
                    setcookie("count", $count, time() + (10 * 365 * 24 * 60 * 60), "signup.php") ;           
                }
                $_SESSION['comment2'] = "<span class='fail'><center><b>Verification code did not matched</b></center></span>";
                ?><script>
                    signUpFormSteps();
                </script>
                <?php
                return false;
            }        
        }

        function destroyCookie(){
            // unset cookies
            if (isset($_SERVER['HTTP_COOKIE'])) {
                $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                foreach($cookies as $cookie) {
                    $C_parts = explode('=', $cookie);
                    $C_name = trim($C_parts[0]);
                    setcookie($C_name, '', time()-1000);
                    setcookie($C_name, '', time()-1000, '/');
                }
            }   
        }
    ?>

    <script>
        function update(a) {
            var op = document.getElementById('maritalStatus');
            var noteElement = document.getElementById('note');

            for (var i = 1; i < (op.length - 1); i++) {
                op[i].disabled = false;
            }
            if (a == 1) {
                op[3].disabled = true;
                document.getElementById("note").setAttribute('hidden', 'hidden');
                noteElement.style = "visibility:hidden";
                document.getElementById("maritalStatus").childNodes[1].innerHTML = "Your Marital Status";
            }
            else {
                op[3].disabled = false;
                document.getElementById("note").removeAttribute('hidden');
                noteElement.style = "visibility:visible";
                document.getElementById("maritalStatus").childNodes[1].innerHTML = "Preferred Marital Status";
            }
        }

        // for changing the visibility of password && password confirmation
        changePwVisibility = (whose1, whose2) => {
            if (whose1.type == "password") {
                whose1.type = "text";
                whose2.type = "text";
            } else {
                whose1.type = "password";
                whose2.type = "password";
            }
        }

        signUpFormSteps = () => {
            console.log('a');
            // document.getElementById('signUpBoxId').style = "visibility:hidden";
            // document.getElementById('emailVerificationBox').style = "visibility:visible";
        }


        var userType = "Tenant";
        var ele1 = document.getElementById('userTypeSlider');

        function userTypeSlider() {
            if (userType == "Tenant") {
                ele1.style = "left:77.5px; width:70px";
                userType = "Landlord";
                update(2);
                document.getElementById("role").value = "owner";
            } else {
                ele1.style = "left:3px; width:80px";
                userType = "Tenant";
                update(1);
                document.getElementById("role").value = "tenant";
            }
        }
    </script>

    
</body>

</html>


