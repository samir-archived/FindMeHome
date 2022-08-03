<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/signIn.css">

    <link rel="icon" type="image/x-icon" href="../Assests/logo.png">
</head>

<body>
    <!-- <div class="close-log-in">&times;</div> -->
    <div id="signInMainContaineer">
        <div class="websiteDetail">
            <h3>FindMe<span style="color:orange; font-family: Script Mt;">Home<span></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Obcaecati, quis.
            </p>
        </div>

        <div id="signInContaineer">
            <div id="signInBox">
                <div id="headingId">
                    <h2>Fill the details below to sign in</h2>
                    <p id="signInUserMsg">Message Area</p>
                </div>

                <div id="appImageClass">
                    <img src="../Assests/logo.png" alt="">
                </div>


                <div id="signInForm">
                    <form action="" method="" autocomplete="off">
                        <!-- room type selection section  -->
                        <div id="userTypeContaineer">
                            <div id="userTypeTitle">
                                <p>Sign In as</p>
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

                        <input type="email" name="" id="signInEmailId" placeholder="Email address">

                        <div id="passwordBox">
                            <input type="password" name="" id="signInPasswordId" placeholder="Password">
                            <input type="checkbox" name="" id="passwordVisibilityToggle"
                                onclick="passwordVisibilityToggler(signInPasswordId)">
                        </div>

                        <input type="submit" value="Sign In" id="signInButtonId" onclick="signInValidation()">
                    </form>
                </div>

                <a href="passwordRecovery.php"> Forgot Password </a>
                <a href="signUp.php"> Don't have account? </a>
            </div>
        </div>
    </div>

    <script>
        var userType = "Tenant";
        var ele1 = document.getElementById('userTypeSlider');

        signInValidation = () => {
            // success or fail determination

            // document.getElementById('signInUserMsg').innerHTML = "Success";
            document.getElementById('signInUserMsg').style = "display:block; color:green";

            // document.getElementById('signInUserMsg').innerHTML = "fail";
            document.getElementById('signInUserMsg').style = "display:block; color:red";
        }

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
    <script src="../Javascript/commonJs.js"></script>
</body>

</html>