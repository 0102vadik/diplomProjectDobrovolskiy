$(".show-more").click(function(){
    $(this).toggleClass("active");
    $(".filter-more").toggleClass("active");

    if($(".show-more").hasClass("active")){
        $(".show-more-text").text("Показать меньше");
    }
    else{
        $(".show-more-text").text("Показать больше");
    }
});
