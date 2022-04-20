
$('.owl-carousel').owlCarousel({
    loop: true,
    nav: false,
    margin: 10,
    items: 1,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
   }); 

function loadSelect() {
    $('.loader').addClass('top-loader')
}
function removeLoadSelect() {
    $('.loader').remove()
} 
setTimeout(function() {
    loadSelect()
}, 1500);
setTimeout(function() {
    removeLoadSelect()
}, 2000);

$('.cpl-mobile-menu-button').on('click tap', function(){
    $('.cpl-overlay-menu-content').addClass('top-mobile')
})
$('.cpl-overlay-menu-close, .cpl-main-menu-right-button, .menu-item').on('click tap', function(){
    $('.cpl-overlay-menu-content').removeClass('top-mobile')
})

