var $jq = jQuery.noConflict();

$jq(window).bind("load", function() {

$jq.getJSON( "http://localhost/countrycovers.co.uk/index.php?option=com_fullscreenslideshow&category_id=2&tmpl=component" , function( data ) {
    var items = [];
     $jq.each( data, function( key, val ) {
    var current = key == 0 ? "class=current" : "";
    items.push( "<li style = 'background-image:url(" + val + ")'" + current +  " > </li>" );
  });
  $jq( ".slides" ).html( items );
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
    
   
    /* 
    if ($current.length ==0) $current = $(".slides li:last-child") ;
    var $next = $current.next().length ? $current.next() : $('.slides li:first');
    $current.addClass('last-current')
    $next.css({opacity:0.0})
    .addClass('current')
    .animate({opacity:1.0}, 1000, function() {
    $current.removeClass('current last-current');
    });     
    */
}
$jq(function() {
setInterval("homepageslider()", 8000);
});

