let hideAboutText = $("#hide-about-text");

$(".read-more-portfolio").click(function () {
    if (hideAboutText.css("display") == "none") {
        hideAboutText.css("display", "block");
        $(".read-more-portfolio").text("Read less");
    } else {
        hideAboutText.css("display", "none");
        $(".read-more-portfolio").text("Read more...");
    }

});
$(".edu-content").on("mouseover", function () {
    $(this).children('p').css("display", "none");
    $(this).children('img').css("visibility", "hidden");
    $(this).children().addClass("hover-text-style");
});

$(".edu-content").mouseleave(function () {
    $(this).children('p').css("display", "block");
    $(this).children('img').css("visibility", "visible");
    $(this).children().removeClass("hover-text-style");
});
/* Slider */
$(".click-icon").hover(function () {
    $(this).css('cursor', 'pointer');

});
$(".plus-minus").click(function () {
    let parentClass = $(this).parent().parent().parent().get(0);
    let src = $(this).attr('src').split('/');
    let file = src[src.length - 1];
    $(this).attr('src');
    if (file == 'plus.png') {
        $(parentClass).find(".hidden-block").slideDown();
        let src = $(this).attr('src').replace("plus.png", "minus.png");
        $(this).attr('src', src);
        $(this).attr('src', src).css({
            'filter': 'invert(11%) sepia(81%) saturate(6280%) hue-rotate(348deg) brightness(100%) contrast(89%)'
        });
    }
    if (file == 'minus.png') {
        $(parentClass).find(".hidden-block").slideUp();
        let src = $(this).attr('src').replace("minus.png", "plus.png");
        $(this).attr('src', src);
        $(this).attr('src', src).css({
            'filter': 'invert(0%) sepia(4%) saturate(16%) hue-rotate(279deg) brightness(109%) contrast(101%)'
        });
    }

});
