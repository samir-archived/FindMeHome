<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Home : Tenant 2 </title>

    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/roomTenant.css">
    <link rel="stylesheet" href="../CSS/pageNumber.css">
    <link rel="stylesheet" href="../CSS/userOption.css">
    <link rel="stylesheet" href="../CSS/homeTenant2.css">

    <link rel="icon" type="image/x-icon" href="../Assests/logo.png">
</head>

<body>
    <!-- navigation bar -->
    <?php include 'navbarLandlord.php';?>

    <!-- Google map -->
    <div class="mapContaineerClass">
        <div class="mapAreaClass">
            <img src="../Assests/Sample map.png" alt="">
        </div>

        <div class="mapFilterClass">
            <p>Pin on the location you desire to be around
                in and enter the distance in kilometer in
                order to filter out the nearest houses
                available houses for rent.
            </p>

            <img src="../Assests/google map.png" alt="map-pin" style="display: block;">

            <input type="number" placeholder="Location range in kilometer" id="rangeBoxId">

            <input type="submit" value="Check">

            <a href="homeTenant1.php"> Use normal filter </a>
        </div>
    </div>

    <!-- main body area : room details appear here -->
    <div class="article">
        <h3>Available Room Details</h3>

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
                        <img src="../Assests/favorite.png" alt="Remove room" id="removeRoomIcon"
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

    <!-- see more section -->
    <!-- background -->
    <div class="seeMoreDarkBackground" id="seeMoreDarkBackground"> </div>

    <!-- showing room details using See More -->
    <div class="seeMoreDetailsClass" id="seeMoreDetailsId">
        <abbr title="close">
            <p id="closeSeeMore" onclick="closeSeeMoreFunction()">&times;</p>
        </abbr>

        <div class="seeMoreBasicSection">
            <div class="seeMoreImageSection">
                <img src="../Assests/Image/Architecture (1).jpg" alt="">
            </div>

            <!-- <div class="basicDetailSection">
                <div class="seeMoreDetail">
                    <p class="seeMoreTitle"> Landlord Name</p>
                    <p class="seeMoreDescription">xxxxx xxxxxx xxxxxx</p>
                </div>

                <div class="seeMoreDetail">
                    <p class="seeMoreTitle">Contact</p>
                    <p class="seeMoreDescription">xxxxxxxxxx</p>
                </div>
            </div> -->
        </div>

        <div class="seeMoreDetailSection">
            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Room Type</p>
                <p class="seeMoreDescription">Flat</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">BHK</p>
                <p class="seeMoreDescription">2</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Room Size</p>
                <p class="seeMoreDescription">Large</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Floor</p>
                <p class="seeMoreDescription">5</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Furnishing</p>
                <p class="seeMoreDescription">Fully Furnished</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Address</p>
                <p class="seeMoreDescription">Anamnagar, Kathmandu</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Services</p>
                <p class="seeMoreDescription">Internet, TV, Drinking Water</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Price</p>
                <p class="seeMoreDescription">Rs. 59,000</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Rent Type</p>
                <p class="seeMoreDescription">Monthly</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">3.5</p>
                <p class="seeMoreDescription">Flat</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Required Marital Status</p>
                <p class="seeMoreDescription">Married</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle"> Landlord Name</p>
                <p class="seeMoreDescription">xxxxx xxxxxx xxxxxx</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Contact</p>
                <p class="seeMoreDescription">xxxxxxxxxx</p>
            </div>

            <div class="seeMoreDetail">
                <p class="seeMoreTitle">Additional Note</p>
                <p class="seeMoreDescription">Additional notes about the room..</p>
            </div>
            <hr style="margin-top: 7px;">

            <div class="ratingSection">
                <div class="ratingLabelSection">
                    <p>Rate this room</p>
                </div>

                <div class="ratingSelect">
                    <select name="" id="" id="rating">
                        <option value="" selected hidden>Rate the room</option>
                        <option value="0"> 0 </option>
                        <option value="0.5"> 0.5 </option>
                        <option value="1"> 1 </option>
                        <option value="1.5"> 1.5 </option>
                        <option value="2"> 2 </option>
                        <option value="2.5"> 2.5 </option>
                        <option value="3"> 3 </option>
                        <option value="3.5"> 3.5 </option>
                        <option value="4"> 4 </option>
                        <option value="4.5"> 4.5 </option>
                        <option value="5"> 5 </option>
                    </select>
                </div>
            </div>

            <input type="submit" value="Submit Rating">

            <div class="wishlistSection">
                <abbr title="Add To Wishlist" id="abbr_wishlist">
                    <img src="../Assests/Wishlist1.png" alt="" id="addToWishlistIcon"
                        onclick="toggleWishlist('add', addToWishlistIcon)">
                </abbr>
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

    <!-- javascript section -->
    <script>
        closeSeeMoreFunction = () => {
            document.getElementById('seeMoreDarkBackground').style = "visibility:hidden";
            document.getElementById('seeMoreDetailsId').style = "visibility:hidden";
        }

        openSeeMoreFunction = () => {
            document.getElementById('seeMoreDarkBackground').style = "visibility:visible";
            document.getElementById('seeMoreDetailsId').style = "visibility:visible";
        }
    </script>

    <!-- linking javascript files -->
    <script src="../Javascript/commonJs.js"></script>
</body>

</html>