<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room</title>

    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/userOption.css">
    <link rel="stylesheet" href="../CSS/addRoom.css">
    <link rel="stylesheet" href="../CSS/serviceBox.css">
    <link rel="stylesheet" href="../CSS/extentedMenu.css">

    <link rel="icon" type="image/x-icon" href="../Assests/logo.png">
</head>

<body>
    <!-- common navbar -->
    <?php include 'navbarLandlord.php';?>

    <!-- room containeer -->
    <div id="addRoomContaineer">
        <!-- <form action="room_core.php" method="post" enctype="multipart/form-data" autocomplete="off"> -->
        <form action="" method="" enctype="multipart/form-data" autocomplete="off">
            <h3 id="formHeadingId">Add New Room</h3>
            <hr>

            <!-- room type selection section  -->
            <div id="romTypeSection">
                <div id="roomTypeLabel">
                    <p>Rooom type</p>
                </div>

                <div id="roomTypeOption">
                    <input type="radio" name="room_type" id="landlordId">
                    <label for="landlordId">Landlord</label>

                    <input type="radio" name="room_type" id="tenantId" style="margin-left: 20px;">
                    <label for="tenantId">Tenant</label>
                </div>
            </div>


            <!-- picture of a room -->
            <div id="roomFile">
                <label for="roomPhoto">Choose room photo</label>
                <input type="file" id="roomPhoto" name="files[]" accept=".jpg, .jpeg" multiple>
            </div>

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
                <option value="full furnished">Fully furnished</option>
                <option value="semi furnished">Semi furnished</option>
                <option value="not furnished">Not furnished</option>
            </select>

            <!-- location of room -->
            <input type="text" name="location" id="" placeholder="Location">

            <!-- services -->
            <!-- <input type="text" name="services" placeholder="Services"> -->
            <div id="dropCheckbox">
                <div id="optionIncluder">
                    <input type="text" name="services" placeholder="Services to provide" id="includerTextBox"
                        onclick="showOptions()" onkeypress="return false;">
                    <img src="../Assests/drop-down-arrow.png" alt="" id="optionDropdown" onclick="showOptions()">
                </div>

                <div id="options">
                    <div class="optionAtom">
                        <div class="optionCheck">
                            <input type="checkbox" name="" id="opt1" onchange="changeFinalText()">
                        </div>
                        <div class="optionTitle" id="optionTitle1" onclick="checkForChange(1)">
                            <label id="label1">Drinking Water</label>
                        </div>
                    </div>

                    <div class="optionAtom">
                        <div class="optionCheck">
                            <input type="checkbox" name="" id="opt2" onchange="changeFinalText()">
                        </div>
                        <div class="optionTitle" id="optionTitle2" onclick="checkForChange(2)">
                            <label id="label2">Security</label>
                        </div>
                    </div>

                    <div class="optionAtom">
                        <div class="optionCheck">
                            <input type="checkbox" name="" id="opt3" onchange="changeFinalText()">
                        </div>
                        <div class="optionTitle" id="optionTitle3" onclick="checkForChange(3)">
                            <label id="label3">Internet</label>
                        </div>
                    </div>

                    <div class="optionAtom">
                        <div class="optionCheck">
                            <input type="checkbox" name="" id="opt4" onchange="changeFinalText()">
                        </div>
                        <div class="optionTitle" id="optionTitle4" onclick="checkForChange(4)">
                            <label id="label4">Waste</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of service section -->

            <!-- rent amount -->
            <input type="number" name="price" id="" placeholder="Rent Amount">

            <!-- rent type : monthly or annual -->
            <select name="per" id="">
                <option value="" disabled selected hidden>Rent Type</option>
                <option value="month">Monthly</option>
                <option value="year">Annual</option>
            </select>

            <!-- price negotiable or not -->
            <select name="nego" id="">
                <option value="" disabled selected hidden>Negotiable/ Non-negotiable</option>
                <option name="per" value="yes">Negotiable</option>
                <option name="per" value="no">Non-negotaible</option>
            </select>

            <!-- additional note for room -->
            <textarea name="message" id="note" cols="30" rows="10"
                placeholder="Write Something about the room..."></textarea>

            <div id="buttonSection">
                <div class="buttonSectionAtom">
                    <input type="submit" value="Reset" name="reset" id="resetBtnId">
                </div>
                <div class="buttonSectionAtom">
                    <input type="submit" value="Add" name="add" id="addBtnId">
                </div>
            </div>
        </form>
    </div>

    <!-- user option menu -->
    <div class="userOptionMenu" id="userMenuBox">
        <ul>
            <a href="profileLandlord.php">
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

    <!-- scripts -->
    <script>
        var roomType = "flat";
        var ele1 = document.getElementById('roomTypeSlider');

        function roomTypeSlider() {
            if (roomType == "room") {
                ele1.style = "left:42.5px";
                roomType = "flat";
                // document.getElementById('roomBhk').style = "display:block";
            } else {
                ele1.style = "left:1px";
                roomType = "room";
                // document.getElementById('roomBhk').style = "display:none";
            }
        }

        function disableKeyPress() {
            alert("I'm here")
        }
    </script>

    <!-- linking js files -->
    <script src="../Javascript/commonJs.js"></script>
    <script src="../Javascript/serviceBox.js"></script>
</body>

</html>