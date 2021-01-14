jQuery(document).ready(function($){
    // Mobile menu toggle
    $("#toggleMainNav").click(function(){
        $("#menu-main-menu").animate({
            height: "toggle",
            opacity: "toggle"
        }, 300);
        return false;
    });
    // Mobile side menu toggle
    $("#toggleSideNav").click(function(){
        $("#ib-side-nav").animate({
            height: "toggle",
            opacity: "toggle"
        }, 300);
        return false;
    });
    
    $(window).resize(function(){
        var w = $(window).width();
        if(w > 1000) {  
            $('#menu-main-menu').removeAttr('style');  
            $('#ib-side-nav').removeAttr('style');  
        }  
    });    
    //console.log('v5');
});