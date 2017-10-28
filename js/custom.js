    //Initialize
    $(document).ready(function(){

        //"Scroll to top" button behavior
        //TODO: This doesn't seem to be working.
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#scroll-top-btn').fadeIn("slow");
            } else {
                $('#scroll-top-btn').fadeOut("slow");
            }
        });

        //Listener: scroll body to 0px on click
        $('#scroll-top-btn').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        //Listener: hide mobile ad banner on click
        $('#hide-banner-btn').click(function () {
            $('#mobile-ad-banner').hide();
            $('#hide-banner-btn').hide();
        });

    });
