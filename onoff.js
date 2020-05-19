$(function() {

    $(".sect-city > ul > li").on("click", function() {

        $(".sect-city > ul > li").each(function (index, element) {
            if ($(this).find(".area > ul").hasClass("on")){
                
                $(this).find(".area > ul").removeClass("on");
            }
        });

        $(this).find(".area > ul").addClass("on");
    });

});


