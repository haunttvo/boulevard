<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a class="">
                <?php
                    if(has_custom_logo()){ ?>
                        <img width="225" class="logo_footer" src="<?php echo esc_url(logosrc); ?>" class="img-responsive">
                    <?php }
                ?>

            </a>
        </div>
        <div class="col-md-9 bottom_ft">
            <div class="info">
                <div class="row pb-md-4">
                    <div class="item mb-sm-2">
                        <img src="<?php echo site_url() . '/wp-content/uploads/2019/05/icon_location.png' ?>" class="img-responsive">
                        <span><b>VPKD:</b> 27 Đinh Bộ Lĩnh, Phường 24, Quận Bình Thạnh, TP.HCM</span>
                    </div>
                </div>
                <div class="row">
                    <div class="item mr-4 mb-sm-2 w-xs-100">
                        <img src="<?php echo site_url() . '/wp-content/uploads/2019/05/icon__web.png' ?>" class="img-responsive">
                        <span><b>Website Chính thức</b> <a href="http://opal-boulevard.vn">http://opal-boulevard.vn</a></span>
                    </div>
                    <div class="item mb-sm-2">
                        <img src="<?php echo site_url() . '/wp-content/uploads/2019/05/icon_call.png' ?>" class="img-responsive">
                        <span><b>Hotline:</b> 0903 763 335</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-fixed-scrrol">
            <a class="call hidden-md hidden-lg" data-html="true" href="tel:0903 763 335" data-placement="left" data-toggle="tooltip" title="HOTLINE <br /> 0903 763 335">
                <img src="<?php echo site_url().'/wp-content/uploads/2019/05/icon_hotline_2.png' ?>" class="img-responsive">
            </a>
            <a class="bt_contact" href="#contact">
                <img src="<?php echo site_url().'/wp-content/uploads/2019/05/icon_lienhe.png' ?>" class="img-responsive">
            </a>
            <a class="bt_contact" >
                <img src="<?php echo site_url().'/wp-content/uploads/2019/05/icon_top.png' ?>" class="img-responsive">
            </a>
    </div>
</div>