$(document).ready(function() {
    var time = 7000;
    var timeout;
    $('#scroll1').hover(
        function() {
            timeout = setTimeout(function() {
                console.log('click');
                $('html, body').animate({
                    scrollTop: $("#scroll-to1").offset().top
                }, 2000);
                setTimeout(function() {
                    $('#date').html('11 juni')
                    $('html, body').animate({
                        scrollTop: $("#scroll-to2").offset().top
                    }, 2000);
                    setTimeout(function() {
                        $('#date').html('30 juni')
                        $('html, body').animate({
                            scrollTop: $("#scroll-to3").offset().top
                        }, 2000);
                        setTimeout(function() {
                            $('#date').html('30 juni')
                            $('html, body').animate({
                                scrollTop: $("#scroll-to3").offset().top
                            }, 2000);
                            setTimeout(function() {
                                $('#date').html('27 juli')
                                $('html, body').animate({
                                    scrollTop: $("#scroll-to4").offset().top
                                }, 2000);
                                setTimeout(function() {
                                    $('#date').html('31 juli')
                                    $('html, body').animate({
                                        scrollTop: $("#scroll-to5").offset().top
                                    }, 2000);
                                }, time);
                            }, 5000);
                        }, time);
                    }, time);
                }, time);
            }, 1500);
        },
        function() {
            clearTimeout(timeout);
        }
    );
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