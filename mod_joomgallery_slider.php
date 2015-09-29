<?php
include('helper.php');
// Add the javascript files
$document = JFactory::getDocument();
// Inlcude jQuery if required
if ( $params ->get( 'include-jquery' ) == 1 ){
JHtml::_('jquery.framework', false);
}
$document->addScript(JURI::base() . 'modules/mod_joomgallery_slider/js/homepageslider.js');
// Include CSS file if required
if ( $params ->get( 'include-css' ) == 1 ){
$document->addStylesheet(JURI::base() . 'modules/mod_joomgallery_slider/css/sliderstyles.css');
}

// Get the images
$image = new images();
$image ->categoryid = $params ->get( 'joomgallery-category' );
$allimages = $image ->getImages();

// Get slider width & height from settings
$sliderwidth = $params ->get( 'width' );
$sliderheight = $params ->get( 'height' );
$sliderspeed = $params ->get( 'slideshowinterval' );
$autoslide = $params ->get( 'autoslide' );
$controls = $params ->get( 'controls' );


// Load the template
require JModuleHelper::getLayoutPath('mod_joomgallery_slider', $params->get('layout', 'default'));

