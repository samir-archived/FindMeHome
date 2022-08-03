<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover Password</title>

    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/passwordRecovery.css">

    <link rel="icon" type="image/x-icon" href="../Assests/logo.png">
</head>

<body>

    <div id="passwordRecoveryMainContaineer">
        <div class="websiteDetail">
            <h3>FindMe<span style="color:orange; font-family: Script Mt;">Home<span></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Obcaecati, quis.
            </p>
        </div>

        <div class="forgotPasswordContaineer" id="forgotPasswordContaineerId">
            <div id="forgotPasswordBox">
                <h2 class="recoveryHeading">Password Recovery</h2>
                <p id="recoveryAlert">Message Area</p>
                <hr>

                <div class="appImageClass">
                    <img src="../Assests/logo.png" alt="">
                </div>

                <form action="" method="" autocomplete="off">
                    <!-- room type selection section  -->
                    <div id="userTypeContaineer">
                        <div id="userTypeTitle">
                            <p>Select Role</p>
                        </div>

                        <div id="userTypeBox">
                            <div id="userTypeLabel">
                                <div id="userTypeLabel1">
                                    <p>Landlord</p>
                                </div>
                                <div id="userTypeLabel2">
                                    <p>Tenant</p>
                                </div>
                            </div>

                            <div id="userTypeSlider" onclick="userTypeSlider()"> </div>
                        </div>
                    </div>

                    <input type="email" placeholder="Email address" name="email">
                    <input type="number" placeholder="Phone number" name="phone">
                    <input type="date" name="dob">
                    <!-- <input type="submit" value="Send Pin Number" name="proceed" onclick="recoveryFunction(1)"> -->
                    <input type="button" value="Send Pin Number" name="proceed" onclick="recoveryFunction(1)">
                </form>

                <a href="signIn.php"> Back to sign in </a>
                    <!-- <p id="backToSignIn" style="text-align: left; line-height:12px"> Back to sign in </p> -->
            </div>

            <div class="pinContaineer" id="pinContaineerId">
                <form action="" method="" id="pinBox">
                    <h2 class="recoveryHeading">Enter the pin sent to your email address</h2>
                    <p id="recoveryAlert">Alert Message Section</p>
                    <hr>
                    <div class="appImageClass">
                        <img src="../Assests/logo.png" alt="">
                    </div>
                    <input type="number" name="" placeholder="Enter pin here">
                    <!-- <input type="submit" value="Verify Pin" onclick="recoveryFunction(2)"> -->
                    <input type="button" value="Verify Pin" onclick="recoveryFunction(2)">
                </form>
            </div>

            <div class="resetPasswordContaineer" id="resetPasswordContaineerId">
                <form action="" method="">
                    <h2 class="recoveryHeading">New Password</h2>
                    <p id="recoveryAlert">Message Section</p>
                    <hr>
                    <div class="appImageClass">
                        <img src="../Assests/logo.png" alt="">
                    </div>
                    <input type="password" name="" placeholder="Enter the password">
                    <input type="password" name="" placeholder="Enter password again for confirmation">
                    <!-- <input type="submit" value="Reset Password" onclick="recoveryFunction(3)"> -->
                    <input type="button" value="Reset Password" onclick="recoveryFunction(3)">
                </form>
            </div>
        </div>
    </div>

    <script>
        var step = 1;
        var containeer_1 = document.getElementById('forgotPasswordContaineerId');
        var containeer_2 = document.getElementById('pinContaineerId');
        var containeer_3 = document.getElementById('resetPasswordContaineerId');

        containeer_1.style = "visibility:visible;";
        containeer_2.style = "visibility:hidden;";
        containeer_3.style = "visibility:hidden";

        recoveryFunction = (step) => {
            if (step == 1) {
                containeer_1.style = "visibility:hidden";
                containeer_2.style = "visibility:visible";
                containeer_3.style = "visibility:hidden";
                step++;
            } else if (step == 2) {
                containeer_1.style = "visibility:hidden";
                containeer_2.style = "visibility:hidden";
                containeer_3.style = "visibility:visible";
                step++;
            } else {
                alert("Password Reset Successful")
            }
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