var wishlist_event_dummy = 1;
var mini_menu_status = 0;

showUserMenu = () => {
    document.getElementById('extentedUserMenu').style = "visibility:hidden";
    if (mini_menu_status == 0) {
        userMenuBox.style = "visibility:visible";
        mini_menu_status = 1;
    } else {
        userMenuBox.style = "visibility:hidden";

        mini_menu_status = 0;
    }
}


// password toggler : single case
passwordVisibilityToggler = (whose) => {
    if (whose.type == "password") {
        whose.type = "text";
    } else {
        whose.type = "password";
    }
}

// password toggler : dual case
changePwVisibility = (whose1, whose2) => {
    if (whose1.type == "password") {
        whose1.type = "text";
        whose2.type = "text";
    } else {
        whose1.type = "password";
        whose2.type = "password";
    }
}

// function to add/remove room to/from wishlist
function toggleWishlist(wishlist_event, addToWishlistButton) {
    if (wishlist_event_dummy == 1) {
        wishlist_event_dummy = 2;
        addToWishlistButton.src = "../Assests/wishlist2.png";
    } else {
        wishlist_event_dummy = 1;
        addToWishlistButton.src = "../Assests/wishlist1.png";
    }
}