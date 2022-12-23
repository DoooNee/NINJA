// show popup web

$(document).ready(function() {
    showPopupWeb();

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
    $(".wrapper-modal-mb").toggle("");



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

function showPopupMb() {

    // $(".wrapper-popup-web").toggle("slow");
}


// submit form
var form = document.getElementById("promise_form");
function handleForm (event) {event.preventDefault();}
form.addEventListener('submit', handleForm);


function insert(){
    var email = $("input[name=email]").val();

    if( email == '' ){show_result({ title: "Thông báo !", msg: 'Vui lòng nhập email !' });return false;}


    $.ajax({
        url: 'backend/function.php',
        type: "POST",
        data:{
            email: email,
            action: "insert"
        },
        success: function(res){
            // console.log(res);
            // console.log(res.msg);
            // console.log(res.status);

            if(res == "failed"){
                show_result({"title":"Thông báo !","msg":`Email đã tồn tại`,"redirect":"/"});

            }
            else {
                show_result({"title":"Thông báo !","msg":`Đăng ký email thành công !`,"redirect":"/"});
            }
        }

    })

}



//function Hien thi thong bao
function show_result(response, callback){
    var title_choose, title_arr;
    title_arr = ['Lỗi !', 'Chúc mừng !','Thông báo', 'Thông báo !'];

    title_choose = ( typeof response.title == "undefined" ? title_arr[response.status] : response.title );
    let className='',text='Ok',btn_ok_visible=true;

    if(response.status==1){
        // className='vq_notice';
        // title_choose='';
    }else{
         text='Ok';
         btn_ok_visible=true; 
    }

    setTimeout(function(){
        var div = document.createElement("div");
        div.innerHTML = response.msg + "<a href='javascript:;' onclick='close_swal()' class=' close_popup'></a>";
        swal({
            title: title_choose,
            content:div,
            className: className,
            buttons:{
                confirm:{
                    text: text,//Đăng nhập
                    value: "confirm",
                    visible: btn_ok_visible,
                    className: "btn_ok",
                    closeModal: true
                }
            }
        }).then((willDelete) => {
            if( typeof response.reload != 'undefined' ){
                //Lam moi lại trang
                console.log("ok reload");
                location.reload();
            }
            
            if( typeof response.redirect !== 'undefined' ){
                //Chuyen huong trang
                console.log("ok redirect");
                window.location.href = response.redirect;
            }
            if (typeof callback !== 'undefined') {
                //Callback function other
                console.log("ok callback");

                callback();
                return;
            }
        });
    },200);

}










