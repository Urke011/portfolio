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
    $(this).children('p').css("display","none");
    $(this).children('img').css("visibility","hidden");
    $(this).children().addClass("hover-text-style");
});

$(".edu-content").mouseleave(function () {
    $(this).children('p').css("display","block");
    $(this).children('img').css("visibility","visible");
    $(this).children().removeClass("hover-text-style");
});