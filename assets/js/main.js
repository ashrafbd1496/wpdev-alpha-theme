
; (function($){
    $(document).ready(function(){

        //post image popup
        $('.popup').each(function(){
            var image = $(this).find('img').attr('src');
            $(this).attr('href',image);
        });

        //tiny slider
        var slider = tns({
            container: '.slider',
            speed:300,
            autoplayTimeout:3000,
            items: 1,
            autoplay: true,
            autoHeight:true,
            controls:false,
            nav:false,
            autoplayButtonOutput:false
        });
    });
})(jQuery);