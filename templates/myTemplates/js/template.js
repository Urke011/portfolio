

let hideAboutText = $("#hide-about-text");

    $(".read-more-portfolio").click(function() {
     if(hideAboutText.css("display") == "none"){
         hideAboutText.css("display","block");
         $(".read-more-portfolio").text("Read less");
     }else{
         hideAboutText.css("display","none");
         $(".read-more-portfolio").text("Read more...");
     }
});

