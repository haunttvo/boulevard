<?php
/* short code base url */
function base_url(){
    return site_url();
}
add_shortcode('site_url', 'base_url');

/* can ho dien hinh */
function canhodienhinh(){
    ob_start();
    $list = new WP_Query([
        'post_type' => 'canhodienhinh',
        'post_per_page' => 4,
        'post_status' => 'publish'
    ]);
    $list = $list->posts;
    ?>
    <div class="row text-center canhodienhinh">
        <?php
            foreach ($list as $key => $value){ ?>
                <div class="col-md-3 item" data-toggle="modal" data-target="#detailt_canho">
                    <img class="img_thumbnail" src="<?php echo get_the_post_thumbnail_url($value->ID) ?>" alt="">
                    <div class="info">
                        <span class="type" ><?php echo $value->post_title; ?></span>
                        <span class="dt"><?php echo get_field('dientich', $value->ID) ?></span>
                    </div>
                    <input type="hidden" value="<?php echo count(acf_photo_gallery('gallery_image', $value->ID) ) ?>" name="num" id="">
                    <?php
                        $arrValueGallery = [];
                        foreach ( acf_photo_gallery('gallery_image', $value->ID) as $k => $value){
                            array_push($arrValueGallery, $value['full_image_url']);
                        }
                    ?>
                    <input type="hidden" name="imgGallery" value='<?php echo json_encode( array_values($arrValueGallery) ) ?>'>
                </div>
            <?php
            }
        ?>
<!--        modal popup-->
        <div class="modal" id="detailt_canho">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0">
                        <h2 class="type"></h2>
                        <a class="close" data-dismiss="modal">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="slidedetailcanho">
                        </div>
                        <div class="dots_tvo dots">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php $content = ob_get_contents();
    ob_clean();
    return $content;

}
add_shortcode('canhodienhinh', 'canhodienhinh');