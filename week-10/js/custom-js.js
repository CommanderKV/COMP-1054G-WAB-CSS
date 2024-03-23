$(window).on("scroll", function(){
    if($(this).scrollTop() > 100){
        $("header").addClass("scrolledHeader");
    }else{
        $("header").removeClass("scrolledHeader");
    }
});