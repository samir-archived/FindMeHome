<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Tenant</title>

    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/userOption.css">
    <link rel="stylesheet" href="../CSS/profile.css">

    <link rel="icon" type="image/x-icon" href="../Assests/logo.png">
</head>

<body>
    <!-- common nav bar -->
    <?php include 'navbarTenant.php';?>

    <!-- main body area -->
    <div class="containeer">
        <div class="userDetailImageClass">
            <img src="../Assests/salad.png" alt="" id="userImageId">
            <a href="" style="display: block; margin-left:10px"> Change Profile Picture</a>
        </div>
        <hr>
        
        <div class="userDetailMainClass">
            <div class="userDetailClass">
                <p class="userDetailTitle">Username</p>
                <p class="userDescriptionClass" id="username">xxx</p>
            </div>

            <div class="userDetailClass">
                <p class="userDetailTitle">Gender</p>
                <p class="userDescriptionClass" id="gender">xxx</p>
            </div>

            <div class="userDetailClass">
                <p class="userDetailTitle">Date of Birth</p>
                <p class="userDescriptionClass" id="dob">xxx</p>
            </div>
            
            <div class="userDetailClass">
                <p class="userDetailTitle">Marital Status</p>
                <p class="userDescriptionClass" id="maritalStatus">xxx</p>
            </div>

            <div class="userDetailClass">
                <p class="userDetailTitle">Address</p>
                <p class="userDescriptionClass" id="address">xxx</p>
            </div>
            
            <div class="userDetailClass">
                <p class="userDetailTitle">Contact</p>
                <p class="userDescriptionClass" id="contact">xxx</p>
            </div>
            
            <div class="userDetailClass">
                <p class="userDetailTitle">Email Address</p>
                <p class="userDescriptionClass" id="email">xxx</p>
            </div>

        </div>

        <div class="detailManipulationSection">
            <input type="submit" value="Edit Details" id="editProfileBtn">
            <a href="" id="accountDeletion" onclick="deleteAccountPermanently()">Permanently delete account</a>
        </div>
    </div>

    <!-- user option menu -->
    <div class="userOptionMenu" id="userMenuBox">
        <ul>
            <a href="profileTenant.html"> <li>My Profile </li> </a>
            <a href="signIn.html"> <li>Sign In/ Sign Out</li> </a>
        </ul>
    </div>

    <!-- extented user menu : common -->
    <?php include 'extentedMenuTenant.php';?>

    <!-- common social-share section -->
    <?php include 'commonsocialshare.php';?>

    <!-- common footer -->
    <?php include 'commonFooter.php';?>

    <!-- js section -->
    <script>
        function deleteAccountPermanently(){
            alert("Account Deletion Permanently");
        }
    </script>

    <!-- linking to external js file -->
    <script src="../Javascript/commonJs.js"></script>
</body>

</html>