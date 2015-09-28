<?php
defined( '_JEXEC' ) or die;
?>
<ul class = "slides" data-interval="<?php echo $sliderspeed;?>" data-path="<?php echo JURI::base(); ?>" style = "width:<?php echo $sliderwidth; ?>; height:<?php echo $sliderheight; ?>">
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
