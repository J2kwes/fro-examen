$(document).ready(function() {
    var time = 8000;
    var timeout;
    var timeout2;
    $('#scroll1').hover(
        function() {
            timeout = setTimeout(function() {
                console.log('click');
                $('html, body').animate({
                    scrollTop: $("#scroll-to1").offset().top
                }, 2000);
                setTimeout(function() {
                    $('#date').html('11 juni')
                    $('#event').html('Carentan word door de amerikanen ingenomen waardoor alle stranden zijn verbonden. Ondertussen lopen de britten in het oosten vast tegen de zware duitse verdedegingen.')
                    $('html, body').animate({
                        scrollTop: $("#scroll-to2").offset().top
                    }, 2000);
                    setTimeout(function() {
                        $('#date').html('30 juni')
                        $('#event').html('De amerikanen veroveren de haven stad Cherbourg. Ondanks de snelle opmars van de amerikanen hebben de duitsers een groot deel van de haven weten te vernietigen')
                        $('html, body').animate({
                            scrollTop: $("#scroll-to3").offset().top
                        }, 2000);
                        setTimeout(function() {
                            $('#date').html('27 juli')
                            $('#event').html('Na anderhalve maand weten de britten eindelijk de stad Caen te veroveren. Ondertussen hebben de amerikanen ook de stad st.lo ingenomen hierdoor leiden de duitsers grote verliezen op en dreigen zij omsingeld te worden.')
                            $('html, body').animate({
                                scrollTop: $("#scroll-to4").offset().top
                            }, 2000);
                            setTimeout(function() {
                                $('#date').html('31 juli')
                                $('#event').html('In het westen hebben de gealieerden het duitse verzet bijna voledig vernietigd. Een snelle opruk naar het zuiden en oosten van het gebied zorgt voor een kans om de duitsers volledig uit Normandie te slaan')
                                $('html, body').animate({
                                    scrollTop: $("#scroll-to5").offset().top
                                }, 2000);
                                setTimeout(function() {
                                    $('#date').html('19 augustus')
                                    $('#event').html('De duitsers zijn volledig de regio uit geslagen ALle overgebleven divisies proberen via de weg bij falaise te evacueren. De slag on Normandie is eindelijk voorbij. 6 dagen later zou parijs bevrijd worden.')
                                    $('html, body').animate({
                                        scrollTop: $("#scroll-to6").offset().top
                                    }, 2000);
                                    setTimeout(function() {
                                        $('#to-home').css('display', 'block')
                                        $('html, body').animate({
                                            scrollTop: $("#scroll-to-top").offset().top
                                        }, 5000);
                                    }, time);
                                }, time);
                            }, time);
                        }, time);
                    }, time);
                }, time);
            }, 1500);
        },
        function() {
            clearTimeout(timeout);
        }
    );
    $('#to-home').hover(
        function() {
            timeout2 = setTimeout(function() {
                window.location.href = "/index.php";
            }, 2000)
        },
        function() {
            clearTimeout(timeout2);
        });
});


$('.contact-card').click(function() {
    $('html, body').animate({
        scrollTop: $(".wrapper-contact").offset().top
    }, 2000);
});

$('.tickets-card').click(function() {
    window.location.href = "tickets.php";
});

$('.normandy-card').click(function() {
    window.location.href = "map.php";
});

$('button').click(function() {
    alert("Kaart is aan winkelmand toegevoegd!");
});



var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('in-view');
        } else {
            $element.removeClass('in-view');
        }
    });
}



$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');


var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 50;

function moveBackground() {
    x += (lFollowX - x) * friction;
    y += (lFollowY - y) * friction;

    translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

    $('.layer2').css({
        '-webit-transform': translate,
        '-moz-transform': translate,
        'transform': translate
    });

    window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

    var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
    var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
    lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
    lFollowY = (10 * lMouseY) / 100;

});

moveBackground();

$('.mob-menu-toggle').click(function() {
    $(this).addClass('opened');
    $('.navbar').animate({ 'marginTop': '0' }, 500);
    $('.closebtn').css('display', 'block');
})

$('.closebtn').click(function() {
    $(this).css('display', 'none');
    $('.mob-menu-toggle').removeClass('opened');
    $('.navbar').animate({ 'marginTop': '-20vh' }, 400);
});

$('.slider').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true
});