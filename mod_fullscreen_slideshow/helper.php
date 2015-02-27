<?php

class images
{

    public function __construct()
    {

    }


    public function getFirstImage()
    {

	$imagelink  = new FullscreenSlideshowModelFullscreenslideshow();
	$images = $imagelink -> talkToJoomgallery();

	return $images[0];
	
    }










}
