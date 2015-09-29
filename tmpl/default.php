<?php
defined( '_JEXEC' ) or die;
?>
<div class = "slidescontainer">
<ul class = "slides" 
    data-interval="<?php echo $sliderspeed;?>" 
    data-path="<?php echo JURI::base(); ?>" 
    data-auto="<?php echo $autoslide; ?>"
    data-controls="<?php echo $controls; ?>"
    style = "width:<?php echo $sliderwidth; ?>; height:<?php echo $sliderheight; ?>">
<?php
    $c = 0;
    foreach ( $allimages as $i ){
        if ( $c == 0){
            echo '<li  class = "current fish">
                <img src = "' . $i . '" />
             </li>';

        } else {
        
        echo '<li data-image = "' . $i . '"></li>';
        }
        $c++;
    }
?>
</ul>
<a href = "#" class = "jg_slide_control" style = "display:none;"  id = "js_prev">Previous</a>
<a href = "#" class = "jg_slide_control" style = "display:none;" id = "js_next">Next</a>
<div>

