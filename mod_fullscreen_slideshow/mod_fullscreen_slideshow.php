<?php
error_reporting(E_ALL);
ini_set( 'display_errors','1');

include('helper.php');
// Include the component class
include_once ( JPATH_BASE . '/components/com_fullscreenslideshow/models/fullscreenslideshow.php' );
// Add the javascript file
$document = JFactory::getDocument();
$document->addScript(JURI::base() . 'modules/mod_fullscreen_slideshow/js/homepageslider.js');
//Param eg
//$id = $params->get('id');

// Get the first image

$image = new images();
$images =  $image -> getFirstImage();

//Layout eg
require JModuleHelper::getLayoutPath('mod_fullscreen_slideshow', $params->get('layout', 'default'));

