$(document).ready(function () {

    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar , footer a[href='#myPage']").on('click', function (event) {

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
// Menu click
    $("a").on('click', function () {
        var id = $(this).attr('data-id');

        if (id !== 'enter'&&id!=='exit'&&id!=='registration') {
            $("html, body").animate({scrollTop: $("#" + id).offset().top
            }, 850);
        }
        if (id === 'enter') {
            $("#first_page_container").hide();
            $(".mcontainer").show();
        }
        if(id==="registration"){
          window.location.href="register.php";
        }
        if(id==="exit"){
            window.location.href="logout.php";
        }
    });
    /* Login with check ajax */
    $("#login").on('click', function () {
        document.getElementById("login_error").innerHTML = "";
        var email = document.getElementById("email").value;
        var pass = document.getElementById("password").value;
        var error = document.getElementById("login_error");
        
        if ( !validateEmail(email)) {
            error.innerHTML = "Невалиден email адрес!";
            return;
        }
        
        if (pass==undefined||pass.length < 1) {
            error.innerHTML = "Невалидна парола!";
            return;
        }
                var d = {
                    action:'login',
                    email:email,
                    password:pass
                }
              
        $.post('ajax.php',d).done(function(data){
              console.log(data);return;
           var obj = JSON.parse(data);
           error.innerHTML=obj.error;
        })
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

    var p = $("#stat_" + id + " > p");
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
    $('html,body').animate({
        scrollTop: aTag.offset().top
    }, 'slow');
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
  var $result = $("#result");
  var email = $("#email").val();
  $result.text("");

  if (validateEmail(email)) {
    $result.text(email + " is valid :)");
    $result.css("color", "green");
  } else {
    $result.text(email + " is not valid :(");
    $result.css("color", "red");
  }
  return false;
}