$(document).ready(function () {
    showPopupWeb();
    getData();
    // getUser();

    $('input[type="file"]').change(function(e){
        fileName = e.target.files[0].name;
        console.log(fileName);
    });

});



// ---------nhận diện thiết bị
var userAgent = navigator.userAgent.toLowerCase();
if (userAgent.search("iphone") > -1) {
    //   <!--  document.querySelector(".apk-mb").style.display = 'none'; -->
    document.querySelector(".apk-full").style.display = 'none';
    document.querySelector(".apk-mini").style.display = 'none';

} else if (userAgent.search("android") > -1) {
    document.querySelector(".appstore-mb").style.display = 'none';
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
}

function showPopupWebWrapper() {
    $(".wrapper-popup-web").toggle("");
}



// submit form
var form = document.getElementById("promise_form");
function handleForm(event) { event.preventDefault(); }
form.addEventListener('submit', handleForm);


function insert() {
    var email = $("input[name=email]").val();
    console.log(email);
    if (email == '') { show_result({ title: "Thông báo !", msg: 'Vui lòng nhập email !' }); return false; }

    $.ajax({
        url: 'backend/function.php',
        type: "POST",
        data: {
            email: email,
            action: "insert"
        },
        success: function (res) {
            // console.log(res);
            // console.log(res.msg);
            // console.log(res.status);

            if (res == "failed") {
                show_result({ "title": "Thông báo !", "msg": 'Email đã tồn tại', "redirect": "/" });

            }

            else if (res == "err") {
                show_result({ "title": "Thông báo !", "msg": 'Vui lòng nhập đúng định dạng email !', "redirect": "/" });

            }
            else {
                show_result({ "title": "Thông báo !", "msg": 'Đăng ký email thành công !', "redirect": "/" });
                getData();
            }


        }
    })
}


//
function getData() {
    $.ajax({
        url: 'backend/getData.php',
        type: 'get',
        data: '',
        beforeSend: function () {

        },
        success: function (res) {
            // console.log(res);
            $('.soUserDangKy').html(`Số Nhẫn Giả Đã Đăng Ký: ${res}`);
        },
        complete: function () {
        }
    });
}



//function Hien thi thong bao
function show_result(response, callback) {
    var title_choose, title_arr;
    title_arr = ['Lỗi !', 'Chúc mừng !', 'Thông báo', 'Thông báo !'];

    title_choose = (typeof response.title == "undefined" ? title_arr[response.status] : response.title);
    let className = '', text = 'Ok', btn_ok_visible = true;

    if (response.status == 1) {
        // className='vq_notice';
        // title_choose='';
    } else {
        text = 'Ok';
        btn_ok_visible = true;
    }
    setTimeout(function () {
        var div = document.createElement("div");
        div.innerHTML = response.msg + "<a href='javascript:;' onclick='close_swal()' class=' close_popup'></a>";
        swal({
            title: title_choose,
            content: div,
            className: className,
            buttons: {
                confirm: {
                    text: text,//Đăng nhập
                    value: "confirm",
                    visible: btn_ok_visible,
                    className: "btn_ok",
                    closeModal: true
                }
            }
        }).then((willDelete) => {
            if (typeof response.reload != 'undefined') {
                //Lam moi lại trang
                console.log("ok reload");
                location.reload();
            }

            if (typeof response.redirect !== 'undefined') {
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
    }, 200);
}





//   <!-- HELP DESK -->

function showHelpDesk() {
    $(".helpdesk").slideToggle("slow");
}

var options, formname, subject, email, subject, description;

function submitForm(){
    options = $(".form-input-options").val();
    formname = $(".form-input-name").val();
    email = $(".form-input-email").val();
    subject = $(".form-input-Subject").val();
    description = $(".form-input-description").val();
    if (options == "--") {swal("Chưa nhập options", "", "warning"); return 0; }
    if (formname == "") { swal("Chưa nhập name", "", "warning"); return 0; }
    if (email == "") { swal("Chưa nhập email", "", "warning");  return 0; }
    if (subject == "") { swal("Chưa nhập subject", "", "warning"); return 0;  }
    if (description == "") { swal("Chưa nhập description", "", "warning"); return 0; }


    var fd = new FormData();
    var files = $('#file')[0].files;
    if(files.length > 0 ){
        //nếu có file

        uploadtext();
        uploadimg();

        show_result({title:'Thông báo', msg:'Phản hồi đã được gửi !', redirect:'/'}); return 0 ;

    }

    else {
        //nếu không co file
        uploadtext();
        show_result({title:'Thông báo', msg:'Phản hồi đã được gửi !', redirect:'/'}); return 0 ;

        
    }
}


var formfeedback = document.getElementById("formFeedBack");
function handleForm(event) { event.preventDefault(); }
formfeedback.addEventListener('submit', handleForm);


function uploadimg(){
    var fd = new FormData();
    var files = $('#file')[0].files;

    // Check file selected or not
    if(files.length > 0 ){
        fd.append('file',files[0]);
        // console.log(fd);
       $.ajax({
          url: 'backend/uploadImage.php',
          type: 'post',
          data: fd,
          dataType: 'JSON',
          contentType: false,
          processData: false,
          success: function(response){
            // console.log(response);
            // console.log(response.status);

            if(response.status == 'failed')
            show_result({title:'Thông báo', msg:`${response.msg}`, redirect:'/'});

          },
       });
    }else{
       alert("Please select a file.");
    }
};

function uploadtext(){

    $.ajax({
        url: 'backend/uploadtext.php',
        type: 'post',
       dataType: 'json',
        data: {
            type: options,
            yourname: formname,
            email: email,
            subject, subject,
            description, description
        },
        success: function(response){
           if(response.status == 'failed')
           show_result({title:'Thông báo', msg:`${response.msg}`, redirect:'/'});

            console.log(response);
        },
    });
};
























// <!--END HELP DESK -->









