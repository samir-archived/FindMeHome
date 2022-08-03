<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home : Landlord</title>

    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/pageNumber.css">
    <link rel="stylesheet" href="../CSS/userOption.css">
    <link rel="stylesheet" href="../CSS/roomLandlord.css">
    <link rel="stylesheet" href="../CSS/seeMoreLandlord.css">
    <link rel="stylesheet" href="../CSS/homeLandlord.css">
    <link rel="stylesheet" href="../CSS/editRoomLandlord.css">

    <link rel="icon" type="image/x-icon" href="../Assests/logo.png">
</head>

<body>
    <!-- common navbar -->
    <?php include 'navbarLandlord.php';?>

    <!-- room details appear here -->
    <div id="articleHomeLandlord">
        <h3>Your Room Details</h3>
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
                        <div class="roomButtonA">
                            <input type="submit" value="Edit" id="editRoom" onclick="showEditSection()">
                        </div>

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
            <div class="roomBox"></div>
        </div>

        <!-- page changer section -->
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

                <div class="pageNumber">
                    <p>04</p>
                </div>
            </div>

            <div class="pageAlternators" id="nextPage">
                <abbr title="Load next"> <img src="../Assests/next.png" alt="next.png"> </abbr>
            </div>
        </div>
    </div>

    <!-- Update room room section -->
    <div class="updateRoomContaineer" id="updateRoomContaineerId">
        <!-- left section : [image & google map], occupied, change image -->
        <div class="updateLeftSection">
            <!-- room picture -->
            <div class="updateLeftSectionImage">
                <div class="updateImage">
                    <img src="../Assests/room (1).jpg" alt="Room image">
                </div>

                <!-- new picture selection -->
                <div class="newRoomPicture">
                    <label for="roomPhoto">Choose room photo</label>
                    <input type="file" id="roomPhoto" name="file[]" accept=".jpg, jpeg" multiple>
                </div>
            </div>

            <!-- google map will appear here -->
            <div class="updateLocation">
                <img src="../Assests/Sample map.png" alt="Room image">
            </div>
        </div>

        <!-- right section : all other details -->
        <div class="updateRightSection">
            <p id="closeEditRoomButton" onclick="hideEditSection()">&times;</p>
            <h3>Only change the desired ones!</h3>
            <p>Message area</p>
            <hr>

            <!-- <form action="core.php" method="post" enctype="multipart/form-data"></form> -->
            <form action="" method="" autocomplete="off" id="updateRoomForm">
                <!-- room occupied/ unoccupied -->
                <select name="occupy" id="">
                    <option value="" selected hidden>Room occupied/ unoccupied</option>
                    <option value="occupied">Occupied</option>
                    <option value="unoccupied">Unoccupied</option>
                </select>

                <!-- room type -->
                <select name="type" id="">
                    <option value="" selected hidden>Room type</option>
                    <option value="room">Room</option>
                    <option value="flat">Flat</option>
                </select>

                <!-- if room type = flat -->
                <input type="number" name="bhk" id="roomBhk" placeholder="BHK">

                <select name="room_size" id="room_size">
                    <option value="" disabled selected hidden>Room Size [FT.+(AREA)]</option>
                    <option value="large">Large [22*28 (616)]</option>
                    <option value="medium">Medium [16*20 (320)]</option>
                    <option value="small">Small [12*18 (216)]</option>
                    <option value="verysmall">Very Small [10*12 (120)]</option>
                </select>

                <!-- floor of a room -->
                <input type="number" name="floor" id="" placeholder="Floor" pattern="/^-?\d+\.?\d*$/"
                    onKeyPress="if(this.value.length==1) return false;">

                <!-- is room furnished or not -->
                <select name="furnished" id="furnished">
                    <option value="" disabled selected hidden>Furnishing</option>
                    <option value="full">Fully furnished</option>
                    <option value="semi">Semi furnished</option>
                    <option value="not">Not furnished</option>
                </select>

                <!-- location of room -->
                <input type="text" name="location" placeholder="Location" id="locationTrigger">

                <!-- services -->
                <input type="text" name="services" placeholder="Services">

                <!-- rent amount -->
                <input type="number" name="price" placeholder="Rent Amount">

                <!-- rent type : monthly or annual -->
                <select name="rentType">
                    <option value="" disabled selected hidden>Rent Type</option>
                    <option value="month">Monthly</option>
                    <option value="year">Annual</option>
                </select>

                <!-- price negotiable or not -->
                <select name="negotiable" id="">
                    <option value="" disabled selected hidden>Negotiable/ Non-negotiable</option>
                    <option name="per" value="yes">Negotiable</option>
                    <option name="per" value="no">Non-negotaible</option>
                </select>

                <!-- additional note for room -->
                <textarea name="note" id="" placeholder="Write Something about the room..."
                    style="height:90px; resize:none"></textarea>
            </form>

            <div class="updateButtonSection">
                <div class="updateButtonSectionA">
                    <input type="submit" value="Reset" name="reset" id="updateResetButton">
                </div>

                <div class="updateButtonSectionB">
                    <input type="submit" value="Update" name="update" id="updateUpdateButton">
                </div>
            </div>
        </div>
    </div>


    <!-- Viewing room details on clicking [See More] -->
    <div class="seeMoreDarkBackground" id="seeMoreDarkBackgroundId"> </div>

    <!-- showing room details using See More -->
    <div class="seeMoreLandlordContaineer" id="seeMoreLandlordContaineerId">
        <abbr title="close">
            <p id="closeSeeMore" onclick="closeSeeMoreFunction()">&times;</p>
        </abbr>

        <div class="seeMoreImageSection">
            <img src="../Assests/Image/Architecture (1).jpg" alt="Room image">
        </div>

        <div id="detailContaineer">
            <div id="detailSection">
                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Room Type</p>
                    <p class="seeMoreDescription">Flat</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">BHK</p>
                    <p class="seeMoreDescription">2</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Room Size</p>
                    <p class="seeMoreDescription">Large</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Floor</p>
                    <p class="seeMoreDescription">5</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Furnishing</p>
                    <p class="seeMoreDescription">Fully Furnished</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Address</p>
                    <p class="seeMoreDescription">Anamnagar, Kathmandu</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Services</p>
                    <p class="seeMoreDescription">Internet, TV, Drinking Water</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Price</p>
                    <p class="seeMoreDescription">Rs. 59,000</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Rent Type</p>
                    <p class="seeMoreDescription">Monthly</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Rating</p>
                    <p class="seeMoreDescription">3.8</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Required Marital Status</p>
                    <p class="seeMoreDescription">Married</p>
                </div>

                <div class="detailSectionAtom">
                    <p class="seeMoreTitle">Additional Note</p>
                    <p class="seeMoreDescription" style="height:100px; overflow:hidden">Additional notes about the
                        room..
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit possimus a vel accusamus,
                        explicabo error nihil et natus omnis libero assumenda, rerum dolorum odio placeat velit fuga
                        quod delectus quis?
                    </p>
                </div>
            </div>

            <div id="buttonSection">
                <input type="submit" value="Remove Room" id="removeMyRoom">
            </div>
        </div>
    </div>

    <!-- user option menu -->
    <div class="userOptionMenu" id="userMenuBox">
        <ul>
            <a href="profileLandlord.html">
                <li>My Profile </li>
            </a>
            <a href="signIn.html">
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

    <!-- scrips -->
    <script>
        // for showing details on clicking see more
        closeSeeMoreFunction = () => {
            document.getElementById('seeMoreDarkBackgroundId').style = "visibility:hidden";
            document.getElementById('seeMoreLandlordContaineerId').style = "visibility:hidden";
        }

        openSeeMoreFunction = () => {
            document.getElementById('seeMoreDarkBackgroundId').style = "visibility:visible";
            document.getElementById('seeMoreLandlordContaineerId').style = "visibility:visible";
        }

        // edit section
        hideEditSection = () => {
            document.getElementById('updateRoomContaineerId').style = "visibility:hidden";
            document.getElementById('seeMoreDarkBackgroundId').style = "visibility:hidden";
        }

        showEditSection = () => {
            document.getElementById('updateRoomContaineerId').style = "visibility:visible";
            document.getElementById('seeMoreDarkBackgroundId').style = "visibility:visible";
        }

        // editing details
        roomTypeFunction = (roomType) => {
            if (roomType == 'flat') {
                document.getElementById('roomBhk').style = "visibility:visible; display:block";
            } else {
                document.getElementById('roomBhk').style = "visibility:hidden; display:none";
            }
        }

        var left_div;
        var location_trigger = document.getElementById('locationTrigger');

        location_trigger.addEventListener("focus",function(){
            left_div = document.getElementsByClassName('updateLocation')[0];
            left_div.style = "visibility:visible";
        });

        location_trigger.addEventListener("blur",function(){
            left_div = document.getElementsByClassName('updateLocation')[0];
            left_div.style = "visibility:hidden";
        });
    </script>

    <!-- linking js files -->
    <script src="../Javascript/commonJs.js"></script>
</body>

</html>