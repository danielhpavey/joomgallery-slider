var $jq = jQuery.noConflict();

$jq(window).bind("load", function() {

var theurl = $jq('.slides').data( 'path' );

$jq( '.slides li' ).not( '.fish' ).each( function(){
    $jq( this ).append( '<img src = "' + $jq( this ).data( 'image' ) + '" />' );
});


});

function homepageslider( direction ){
    var $current = $jq(".slides .current")
    $current.removeClass('current');

    if( direction == 'js_next' ){
        if ($current.next().length == 0){
            $current = $jq(".slides li:first-child");
            $current.addClass('current');
            } else {
            $current.next().addClass('current');
            }
    } else if ( direction == 'js_prev' ){
        if ($current.prev().length == 0){
            $current = $jq(".slides li:last-child");
            $current.addClass('current');
            } else {
            $current.prev().addClass('current');
            }
    }
}

$jq(function() {
var interval = $jq('.slides').data( 'interval' );
var auto = $jq('.slides').data( 'auto' );

if ( auto == 1 ){
timer = setInterval("homepageslider( 'js_next' )", interval);
}
});


$jq(document).ready(function() {

var controls = $jq('.slides').data( 'controls' );

if ( controls == 1 ){
    $jq( '.jg_slide_control').css('display', 'initial');
}

$jq( "#js_next, #js_prev" ).click( function(){
    clearInterval( timer );
    homepageslider( this.id );
});
});
