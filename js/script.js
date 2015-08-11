
/*-------------GOOGLE MAPS-----------------*/

/*function initialize() {

    var myLatlng = new google.maps.LatLng(59.934602, 30.334607);
    var mapOptions = {
        center: new google.maps.LatLng(59.934602, 30.334607),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Ditlogistic"
    });
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;
*/


$(function() {

    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });
});

jQuery(document).ready(function(){
    jQuery.easing.def = "easeInOutQuad";
    jQuery('li.sb-but a').click(function(e){
        var dropDown = jQuery(this).parent().next();
        jQuery('.dropdown').not(dropDown).slideUp('slow');
        dropDown.slideToggle('slow');
        e.preventDefault();
        if(jQuery(this).children("b").text() == '') {
            jQuery('li.sb-but a b').text('');
        }
        else {
            jQuery(this).children("b").text('');
        }


    })
});

$(".stats-select strong").click(function() {
    $(this).parent().children('ul').slideToggle(200);
    /*jQuery('li.sb-but a b').text('￬');*/
});
$(".stats-select li").click(function() {
    var $this = $(this),
        index = $this.index(),
        text = $this.html();
    $this.parents(".stats-select").children('strong').html(text);
    $this.parents("ul").slideUp(200);
    $this.parents(".stats-content-right").children(".stats-tab").removeClass('active');
    $this.parents(".stats-content-right").children(".stats-tab").eq(index).addClass('active');

});
$(document).click(function(e) {
    var clicked = $(e.target);
    if (! clicked.parents().hasClass("stats-select")) {
        $(".stats-select ul").slideUp(200);
    }
    else {
        $(".stats-select ul").not(clicked.parents(".stats-select").children('ul')).slideUp(200);
    }
});
