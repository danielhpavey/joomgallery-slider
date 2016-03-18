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
                <img src = "' . $i['imgpath'] . '" />';
                echo imageText( $i, $params );
            echo' </li>';

        } else {
        
            echo '<li data-image = "' . $i['imgpath'] . '">';
            echo imageText( $i, $params );
            echo '</li>';
        }
        $c++;
    }
?>
</ul>
<?php if( $controls == 1 ){ ?>
<a href = "#" class = "jg_slide_control" id = "js_prev">Previous</a>
<a href = "#" class = "jg_slide_control" id = "js_next">Next</a>
<?php } ?>
</div>



<?php 
    // Litle Function to display or not display image title and description
    function imageText( $i, $params )
    {
        $title = $params ->get( 'show-title' );
        $description = $params ->get( 'show-description' );
        $r = '';
        if( $title == 1 ){
            $r .= '<span class = "jg_slide_title">' . $i["imgtitle"] . '</span>';
        }
        if( $description  == 1 ){
            $r .='<span class = "jg_slide_description">' . $i["imgtext"] . '</span>';
        }

        return $r;
    }
?>

