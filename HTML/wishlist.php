<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>

    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/pageNumber.css">
    <link rel="stylesheet" href="../CSS/roomTenant.css">
    <link rel="stylesheet" href="../CSS/userOption.css">
    <link rel="stylesheet" href="../CSS/wishlist.css">

    <link rel="icon" type="image/x-icon" href="../Assests/logo.png">
</head>

<body>
    <!-- common nav bar -->
    <?php include 'navbarTenant.php'?>

    <!-- main body area -->
    <div class="article">
        <h3>Rooms from your wishlist</h3>

        <div id="roomContaineer">
            <div class="roomBox">
                <div class="roomImage">
                    <img src="../Assests/room (1).jpg" alt="room image">
                </div>

                <div class="roomInfo">
                    <div class="roomDetail">
                        <div class="roomDetailAtom">
                            <div class="roomTitles">
                                <p class="roomTitle">BHK</p>
                            </div>
                            <div class="roomDescriptions">
                                <p class="roomDescription">1</p>
                            </div>
                        </div>

                        <div class="roomDetailAtom">
                            <div class="roomTitles">
                                <p class="roomTitle">Floor</p>
                            </div>
                            <div class="roomDescriptions">
                                <p class="roomDescription">8</p>
                            </div>
                        </div>

                        <div class="roomDetailAtom">
                            <div class="roomTitles">
                                <p class="roomTitle">Price</p>
                            </div>
                            <div class="roomDescriptions">
                                <p class="roomDescription">Rs. 47,000</p>
                            </div>
                        </div>

                        <div class="roomDetailAtom">
                            <div class="roomTitles">
                                <p class="roomTitle">Rating</p>
                            </div>
                            <div class="roomDescriptions">
                                <p class="roomDescription">4.5</p>
                            </div>
                        </div>

                        <div class="roomDetailAtom">
                            <div class="roomTitles">
                                <p class="roomTitle">Location</p>
                            </div>
                            <div class="roomDescriptions">
                                <p class="roomDescription">Anamnagar-3</p>
                            </div>
                        </div>
                    </div>

                    <div class="roomButton">
                        <div class="roomButtonB">
                            <input type="submit" value="More" id="seeMore" onclick="openSeeMoreFunction()">
                        </div>
                    </div>
                </div>

                <div id="removeRoomBox">
                    <abbr title="Remove room">
                        <img src="../Assests/remove.png" alt="Remove room" id="removeRoomIcon"
                            onclick="alert('Remove This Room!')">
                    </abbr>
                </div>
            </div>

            <div class="roomBox"></div>
            <div class="roomBox"></div>
            <div class="roomBox"></div>
            <div class="roomBox"></div>
            <div class="roomBox"></div>
            <div class="roomBox"></div>
            <div class="roomBox"></div>
        </div>

        <!-- page changer -->
        <div id="pageChanger">
            <div class="pageAlternators" id="previousPage">
                <abbr title="Load previous"> <img src="../Assests/previous.png" alt="previous.png"> </abbr>
            </div>

            <!-- can contain multiple ids -->
            <div id="pageNumberContaineer">
                <div class="pageNumber" id="currentPageNumber">
                    <p>01</p>
                </div>

                <!-- duplicated sections -->
                <div class="pageNumber">
                    <p>02</p>
                </div>

                <div class="pageNumber">
                    <p>03</p>
                </div>
            </div>

            <div class="pageAlternators" id="nextPage">
                <abbr title="Load next"> <img src="../Assests/next.png" alt="next.png"> </abbr>
            </div>
        </div>
    </div>

    <!-- user option menu -->
    <div class="userOptionMenu" id="userMenuBox">
        <ul>
            <a href="profileTenant.php">
                <li>My Profile </li>
            </a>
            <a href="signIn.php">
                <li>Sign In/ Sign Out</li>
            </a>
        </ul>
    </div>

    <!-- extented user menu : common -->
    <?php include 'extentedMenuLandlord.php';?>

    <!-- common social-share section -->
    <?php include 'commonsocialshare.php';?>

    <!-- common footer -->
    <?php include 'commonFooter.php';?>

    <!-- linking javascript files -->
    <script src="../Javascript/commonJs.js"></script>
</body>

</html>