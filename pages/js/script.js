
$(document).ready(function () {
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
//        $('html, body').animate({
//            scrollTop: $(hash).offset().top
//        }, 900, function () {
//
//            // Add hash (#) to URL when done scrolling (default click behavior)
//            window.location.hash = hash;
//        });
    });

    // Slide in elements on scroll
    $(window).scroll(function () {
        $(".slideanim").each(function () {
            var pos = $(this).offset().top;
            var winTop = $(window).scrollTop();
            
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });

    
    
    $("#statia_1").on("click", function () {
        hideand(1);
        event.preventDefault();
    });

    $("#statia_2").on("click", function () {
        hideand(2);
        event.preventDefault();

    });
    $("#btnBack").on("click", function () {
        window.location.href = "test.html";
    });

    $("#btnAll").on("click", function () {

    });

});

$("li.off").on('click', function () {
    $.alert("to do");
});





function hideand(id) {
    $("#contact").hide("slow");
    $("#pricing").hide("slow");
    $("#services").hide("slow");
    $("#portfolio").hide("slide");
    $("#stat_" + id).show("slow");
    
    var p = $("#stat_"+id+" > p");
    var nbsp = "&nbsp;&nbsp;&nbsp;&nbsp;";
    for (var i = 0; i < p.length; i++) {
        p[i].innerHTML = nbsp + p[i].innerText;
    }
    
        // Store hash
        var hash = "#myPage";

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = "#myPage";
        });
}

function scrollToAnchor() {
    var aTag = $(".w3-image");
    $('html,body').animate({scrollTop: aTag.offset().top}, 'slow');
}

       