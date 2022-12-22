// show popup web

$(document).ready(function() {
    showPopupWeb();
    console.log("test by Quan");
});



// ---------nhận diện thiết bị
var userAgent = navigator.userAgent.toLowerCase();
if (userAgent.search("iphone") > -1) {
    document.querySelector(".apk-mb").style.display = 'none';
    document.querySelector(".gg-play-mb").style.display = 'none';

} else if (userAgent.search("android") > -1) {
    document.querySelector(".appstore-mb").style.display = 'none';
} else if (userAgent.search("ipad") > -1) {
    document.querySelector(".apk").style.display = 'none';
    document.querySelector(".gg-play").style.display = 'none';
}



//------- responsive mobile
var jsVer = 15;
var phoneWidth = parseInt(window.screen.width);
console.log(phoneWidth);
var phoneScale = phoneWidth / 640;

if (phoneWidth < 768) {
    var ua = navigator.userAgent;
    if (/Android (\d+\.\d+)/.test(ua)) {
        var version = parseFloat(RegExp.$1);
        // andriod 2.3
        if (version > 2.3) {
            document.write('<meta name="viewport" content="width=640, minimum-scale = ' + phoneScale + ', maximum-scale = ' + phoneScale + ', target-densitydpi=device-dpi">');
        } else {
            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
        }

    } else {
        console.log(phoneWidth);
        document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
    }

} else {
    document.write('<meta name="viewport" content="width=768, minimum-scale =1, maximum-scale = 1, target-densitydpi=device-dpi">');
}


// show popup đăng ký ngay
function showPopup() {
    $(".content-modal").toggle("slow");
    $("#myModal").toggle();

}

//  show popup web
function showPopupWeb() {
    $(".popup-web").toggle("slow");
    // $(".wrapper-popup-web").toggle("slow");
}

function showPopupWebWrapper() {
    $(".wrapper-popup-web").toggle("");
    // $(".wrapper-popup-web").toggle("slow");
}












