/**
*
* -----------------------------------------------------------------------------
*
* Template : bStart - One Page Corporate HTML5 Template 
* Author : rs-theme
* Author URI : http://www.rstheme.com/
*
* -----------------------------------------------------------------------------
*
**/

// gmap init
function initialize() {
    var mapCanvas = document.getElementById('g-map');
    var myCenter = new google.maps.LatLng(5.359952,-4.008256);
    var mapOptions = {center: myCenter, zoom: 12, scrollwheel: false, mapTypeId: google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);