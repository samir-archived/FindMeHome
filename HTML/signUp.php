<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up</title>

    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/signUp.css">

    <link rel="icon" type="image/x-icon" href="../Assests/logo.png">
</head>

<body>
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
                    <h3> Fill the details below to sign up </h3>
                </div>
                <!-- <form action="" method="post" enctype="multipart/form-data"> -->

                <form action="" method="" enctype="" autocomplete="off" id="signUpForm">
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
                        <option value="" disabled selected hidden> Marital Status </option>
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
                </form>

                <div>
                    <input type="submit" value="Sign Up" onclick="signUpFormSteps()">
                </div>

                <a href="signIn.php"> Already have a account? </a>
            </div>

            <!-- email verification step -->
            <div id="emailVerificationBox">
                <h3>Enter the pin number sent to your email address</h3>
                <img src="../Assests/logo.png" alt="">
                <p id="verificationAlert">Message Section</p>

                <form action="" method="">
                <input type="number" name="pin" id="" placeholder="Enter pin number here...">
                <input type="submit" value="Verify">
            </form>
            </div>
        </div>
    </div>

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
            }
            else {
                op[3].disabled = false;
                document.getElementById("note").removeAttribute('hidden');
                noteElement.style = "visibility:visible";
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
            document.getElementById('signUpBoxId').style = "visibility:hidden";
            document.getElementById('emailVerificationBox').style = "visibility:visible";
        }


        var userType = "Tenant";
        var ele1 = document.getElementById('userTypeSlider');

        function userTypeSlider() {
            if (userType == "Tenant") {
                ele1.style = "left:77.5px; width:70px";
                userType = "Landlord";
            } else {
                ele1.style = "left:3px; width:80px";
                userType = "Tenant";
            }
        }
    </script>
</body>

</html>