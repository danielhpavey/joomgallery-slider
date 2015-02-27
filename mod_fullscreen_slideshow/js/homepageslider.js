var $jq = jQuery.noConflict();

$jq(window).bind("load", function() {

var theurl = $jq('.slides').data( 'path' );


$jq.getJSON( theurl + 'index.php?option=com_fullscreenslideshow&category_id=2&tmpl=component',    function( data ) {
    var items = '';
     $jq.each( data, function( key, val ) {
    var current = key == 0 ? "class=current" : "";
    items += ( '<li style = "background-image:url(' + val + ')" > </li>' );
  });
  $jq( ".slides" ).append( items );
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
setInterval("homepageslider()", 9000);
});

