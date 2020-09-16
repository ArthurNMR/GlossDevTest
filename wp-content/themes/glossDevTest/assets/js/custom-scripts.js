jQuery(document).ready(function($){

    //STICKY NAVIGATION
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        var $wpAdminBar = $('#wpadminbar');
        if ($wpAdminBar.length) {
            $('#navigation').css('top','34px');
        }else{
            $('#navigation').css('top','0');
        }

    } else {
        $('#navigation').css('top','-131px');
    }
    prevScrollpos = currentScrollPos;
    }

    //MOBILE NAVIGATION

    $('#burger_menu #times_menu').hide();
    function toggleSidebar(){
        var $wpAdminBar = $('#wpadminbar');
        if ($wpAdminBar.length) {
            $('#side_bar_menu').css('top','34px');
        }
        $("#side_bar_menu").toggleClass("active");
        $('#burger_menu #times_menu').toggle(100);
        $('#burger_menu #bars_menu').toggle(100)
        
    }

    $("#burger_menu").on("click tap", function() {
        toggleSidebar();
    });

});
