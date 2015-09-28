var $jq = jQuery.noConflict();

$jq(window).bind("load", function() {

var theurl = $jq('.slides').data( 'path' );

$jq( '.slides li' ).not( '.fish' ).each( function(){
    $jq( this ).append( '<img src = "' + $jq( this ).data( 'image' ) + '" />' );
});


});

function homepageslider(){
    var $current = $jq(".slides .current")
    $current.removeClass('current');
    
    if ($current.next().length == 0){
        $current = $jq(".slides li:first-child");
        $current.addClass('current');
    } else {
    $current.next().addClass('current');
    }
    
}
$jq(function() {
var interval = $jq('.slides').data( 'interval' );
setInterval("homepageslider()", interval);
});

