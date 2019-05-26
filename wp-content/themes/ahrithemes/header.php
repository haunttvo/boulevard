<nav class="navbar navbar-expand-lg navbar-light navbar-ahri">
    <a class="navbar-brand pb-0" href="#">
        <?php
        if(has_custom_logo()){ ?>
            <img width="160" src="<?php echo esc_url(logosrc); ?>" alt="">
        <?php }
        ?>
    </a>
    <img data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" class="nav-mobile" src="<?php echo site_url().'/wp-content/uploads/2019/05/menu-wap.png' ?>" alt="">
    <div class="social-mobile">
        <a href="https://www.facebook.com/opalboulevard.com.vn/" target="_blank">
            <img src="<?php echo site_url().'/wp-content/uploads/2019/05/icon_fb_wap.png' ?>" class="img-responsive hidden-md hidden-lg">
        </a>
        <a href="###" target="_blank">
            <img src="<?php echo site_url().'/wp-content/uploads/2019/05/icon_youtube_wap.png' ?>" class="img-responsive hidden-md hidden-lg">
        </a>
        <a href="tel:0934 32 33 88" class="call-wap hidden-md hidden-lg">
            <img src="<?php echo site_url().'/wp-content/uploads/2019/05/call-wap.png' ?>" class="img-responsive">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations['main_menu'];
        $main_menu = wp_get_nav_menu_items($menuID);
        ?>
        <ul class="navbar-nav ml-auto main-menu">
            <?php
            if(!empty($main_menu)){
                foreach ($main_menu as $key => $value){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $value->url; ?>"><?php echo $value->post_title; ?></a>
                    </li>
                <?php }
            }
            ?>
        </ul>
        <div class="contact-box form-inline my-2 my-lg-0">
            <div class="call-box">
                <img src="http://opal-boulevard.vn/wp-content/themes/sky/assets/templates/frontend/home/images/icon_hotline_2.png" class="img-responsive">
            </div>
            <span class="num">0903 763 335</span>
            <div class="social">
                <a href="https://www.facebook.com/opalboulevard.com.vn/" target="_blank">
                    <img src="http://opal-boulevard.vn/wp-content/themes/sky/assets/templates/frontend/home/images/icon-fb.png" class="img-responsive hidden-sm hidden-xs">
                </a>
                <a href="###" target="_blank">
                    <img src="http://opal-boulevard.vn/wp-content/themes/sky/assets/templates/frontend/home/images/icon-gg.png" class="img-responsive hidden-sm hidden-xs">
                </a>
            </div>
        </div>
    </div>
</nav>