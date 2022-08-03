var target_div, target_link;

socialToggle = (currentEvent, x) => {
    if (x == 'c1') {
        target_div = document.getElementById('socialId1');
        target_link = document.getElementById('socialLink1');
    } else if (x == 'c2') {
        target_div = document.getElementById('socialId2');
        target_link = document.getElementById('socialLink2');
    } else if (x == 'c3') {
        target_div = document.getElementById('socialId3');
        target_link = document.getElementById('socialLink3');
    } else {
        target_div = document.getElementById('socialId4');
        target_link = document.getElementById('socialLink4');
    }

    if (currentEvent == 1) {
        target_div.style = "left:-117px; width:150px";

        if(x=='c1'){
            target_link.innerHTML = "Share on Facebook";
        }else if(x=='c2'){
            target_link.innerHTML = "Share on Instgram";
        }else if(x=='c3'){
            target_link.innerHTML = "Share on Gmail";
        }else{
            target_link.innerHTML = "Share on Pinterest";
        }

    } else if (currentEvent == 0) {
        target_div.style = "left:0px; width:32px";

        if(x=='c1'){
            target_link.innerHTML = "F";
        }else if(x=='c2'){
            target_link.innerHTML = "I";
        }else if(x=='c3'){
            target_link.innerHTML = "G";
        }else{
            target_link.innerHTML = "P";
        }
    }
}
