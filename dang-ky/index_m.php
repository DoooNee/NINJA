<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="/img/favicon.jpg" rel="shortcut icon" type="image/png">
    <title>Truyền Thuyết Dũng Sĩ Rồng - Legend of Dragon Heroes | Game nhập vai MMORPG màn hình ngang hay nhất 2022</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script type="text/javascript" src="/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/style_m.css">

    <script type="text/javascript">
        var jsVer = 15;
        var phoneWidth = parseInt(window.screen.width);
        console.log(phoneWidth);
        var phoneScale = phoneWidth/640;

        if(phoneWidth < 768){
            var ua = navigator.userAgent;
            if (/Android (\d+\.\d+)/.test(ua)){
                var version = parseFloat(RegExp.$1);
                // andriod 2.3
                if(version>2.3){
                    document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
                }else{
                document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
                }

            } else {
                console.log( phoneWidth );
                document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
            }   

        }else{
            document.write('<meta name="viewport" content="width=768, minimum-scale =1, maximum-scale = 1, target-densitydpi=device-dpi">');
        }
    
    </script>
    <?php 
        // require 'config.php';
     ?>
 
</head>
<body>
<?php 
    include __DIR__ . '/preload_page.php'; 

?>



<div class="wrapper wrapper-mob">
    <div class="container-fluid">
        <div class="btn-menu">
            <a href="javascript:showMenu();" >
                <img src="/img/mobile/btn-menu.png" alt="">
            </a>
        </div>


        <div class="main-container">
            <div class="btn-trangchu">
                <a href="https://wiki.dungsirong.vn/"><img src="/img/pc/btn-home-off.png" alt=""></a>
            </div>

            <div class="btn-download">
                <a href="https://apps.apple.com/app/id1619232058"><img src="/img/pc/btn-ios-off.png" alt=""></a>
                <a href="https://play.google.com/store/apps/details?id=com.teamae.dsr"><img src="/img/pc/btn-android-off.png" alt=""></a>
                <a href="https://cdn.dungsirong.com/DungSiRong.apk"><img src="/img/pc/btn-apk-off.png" alt=""></a>
            </div>

            <div class="btn-nap">
                <a href="https://pay.acegame.vn/game/ttdsr"><img src="/img/pc/btn-nt-off.png" alt=""></a>
            </div>
        </div>

        <div class="footer">
            <p>GAME ĐƯỢC BỘ THÔNG TIN VÀ TRUYỀN THÔNG CẤP PHÉP NỘI DUNG SỐ 1358/QĐ-BTTTT NGÀY 07/07/2022</p>
            <p>CHƠI QUÁ 180 PHÚT MỘT NGÀY SẼ ẢNH HƯỞNG XẤU ĐẾN SỨC KHỎE</p>
            <p>HÃY CHƠI GAME ĐIỀU ĐỘ - GIỮ GÌN SỨC KHỎE - KHÔNG NẠP LẬU</p>

            <div class="footer-btn">
                <a href="https://wiki.dungsirong.vn/" class="btn-hotro">HỖ TRỢ</a>|
                <a href="https://dungsirong.vn/" class="btn-caidat" >CÀI ĐẶT</a>|
                <a href="https://dungsirong.vn/dieu-khoan/" class="btn-dieukhoan">ĐIỀU KHOẢN</a>
            </div>
        </div>


        
    </div>
</div>



<?php 
    include __DIR__ . '/footer.php'; 

?>

</body>
</html>

