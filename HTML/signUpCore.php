<!-- PHP FOR OWNER TABLE -->
<?php
    include('include.php');
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
                    ?><script>
                        document.getElementById('signUpBoxId').style = "visibility:hidden";
                        document.getElementById('emailVerificationBox').style = "visibility:visible";
                    </script>
                    <?php

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
        if(($_COOKIE['ran']) == ($_POST['pin'])){           
            $email = strtolower($_COOKIE['email']);//Email         
            $role = ucfirst($_COOKIE['role']);//Role
            $name = ucwords($_COOKIE['name']);//Name
            $address = ucwords($_COOKIE['address']);//Address
            $date = ($_COOKIE['dob']);//Date_Of_Birth
            $gender = ucfirst($_COOKIE['gender']);//Gender
            $phone = ($_COOKIE['phone']);//Phone
            $password = md5($_COOKIE['password']);//Password
            $marital_status = ucfirst($_COOKIE['marital_status']);//Maritial_Status
            $note = ucfirst($_COOKIE['note']);//Note
            $file_name = ($_COOKIE['file']);//DP_Image
            $gfile_name = ($_COOKIE['gfile']);//Gov_Id
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
                distroyCookie();
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
            if($_COOKIE['count'] == 3){            
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
                $count = $_COOKIE['count'] ;
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

    function distroyCookie(){
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