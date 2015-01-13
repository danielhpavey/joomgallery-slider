<?php

include('helper.php');
// Add the javascript file
$document = JFactory::getDocument();
$document->addScript(JURI::base() . 'modules/mod_fullscreen_slideshow/js/homepageslider.js');
//Param eg
//$id = $params->get('id');

// Get the first image

$image = new images();
$images =  json_decode($image -> getFirstImage(), true) ;


//Layout eg
require JModuleHelper::getLayoutPath('mod_fullscreen_slideshow', $params->get('layout', 'default'));

