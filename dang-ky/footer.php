<!-- poppup video trailer -->
<div class="modal fade" id="Modalbanner" tabindex="-1" role="dialog" 
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog-popup modal-dialog modal-dialog-banner modal-banner-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-banner-bg modal-popup-banner-bg">
                    <button type="button" class="close close-banner close-popup-banner" data-dismiss="modal" aria-label="Close">
                        <img src="/img/mobile/btn-close.png" alt="">

                    </button>
                    <div class="modal-banner-text">

                        <div class="modal-banner-content modal-popup-content">
                            <!-- content popup -->
                            <!-- <img src="https://www.youtube.com/watch?v=Cpmw25cSYow&ab_channel=WorldLifeHacks" alt=""> -->
                            <iframe src="https://www.youtube.com/embed/LHCob76kigA" title="" frameborder="0" allow="" allowfullscreen></iframe>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
</div>
<!-- end popup video trailer -->


<!-- loading screen -->
<div id="overlay" style="opacity: 0; display: none;">
    <div id="progstat"><img src="/img/loading-icon.png"> </div>
    <div id="progress">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>



<!-- popup userinfo -->
<div class="modal fade" id="popup_userinfo" tabindex="-1" role="dialog" 
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-popup modal-dialog modal-popup_userinfo modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-popup_userinfo-bg">
                    <button type="button" class="close-popup_userinfo" data-dismiss="modal" aria-label="Close">
                        <img src="/img/close.png" alt="">
                    </button>
                    <div class="modal-popup_userinfo-text">
                        <div class="modal-popup_userinfo-content modal-popup-content">
                            <!-- content popup -->
                            <form method="POST" id="promise_form" onsubmit="return;">
                                    
                                    <div class="form-group" style="margin-bottom:10px;">
                                        <div class="row">
                                            <!-- <div class="col-md-3"><label></label></div>     -->
                                            <div class="col-md-12"><input required class="form-control" type="email" id="email" name="email" placeholder="Nhập email của bạn ..."></div>
                                        </div>
                                    </div>

                                    <!-- <normal>Lưu ý: Bạn cần nhập chính xác thông tin của bạn để chúng tôi có căn cứ trao quà cho bạn. Mọi sai sót chúng tôi không chịu trách nhiệm. Xin cảm ơn.</normal> -->
                                
                                    <input type="submit" class="submit_promise" name="button" value="" onclick="insert()"> 
                                </form>
                            
                        </div>
                    </div>
                 </div>
            </div>
        </div>
</div>


<script src="/js/main.js"></script>
