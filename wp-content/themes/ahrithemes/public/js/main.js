var slideIndex = 1;
function showDivs(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
jQuery(document).ready(function($){
    $('[data-toggle="tooltip"]').tooltip();
    $(document).on('click', '.dots_tvo .dot', function(){
        showDivs(slideIndex = (parseInt($(this).attr('idex')) + 1)  );
    });
    $('.canhodienhinh .item').click(function(){
        $('.dots_tvo.dots').html('');
        $('.slidedetailcanho').html('');
        $('#detailt_canho .modal-header h2.type').html($(this).find('.info .type').text());
        let arrImg = JSON.parse($(this).find('input[name="imgGallery"]').val());
        if(arrImg.length > 0){
            arrImg.forEach(function(value){
                $('.slidedetailcanho').append('<img class="mySlides" src="'+value+'" alt="">')
            });
            for (let i = 0; i < $(this).find('input[name="num"]').val(); i++){
                let active = (i === 0) ? 'active' : '';
                $('.dots_tvo.dots').append('<span idex="'+i+'" class="dot '+active+'" ></span>');
            }
            showDivs(slideIndex = 1);
        }
    });
    $('.main-menu li a').click(function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 70
        }, 1000)
    });
    $('a.bt_contact').click(function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#topbar_section').offset().top - 70
        }, 1000)
    });

});