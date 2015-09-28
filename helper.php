<?php

class images
{

    public function __construct()
    {
        $file = JPATH_ROOT. '/components/com_joomgallery/interface.php';

        if(!file_exists($file)){

            JError::raiseError(500, 'JoomGallery seems not to be installed');

        } else {

            require_once $file;
            $this ->interface = new JoomInterface();
        }

    }


    public function getFirstImage()
    {

        $images = $this ->talkToJoomgallery();

        return $images[0];
	
    }

    public function getImages()
    {
        $images = $this ->talkToJoomgallery();

        return $images;
    }


    public function talkToJoomgallery()
    {

        
        $images = $this ->interface ->getPicsByCategory( $this ->categoryid );
        $imagepath = $this ->joomgalleryImagePath();


        $theimages = array();
        $c = 0;
        foreach ($images as $i){
            $theimages[$c]= JURI::base() . $imagepath . $i->catpath . '/' . $i->imgfilename;
        
            $c ++;
        }

        shuffle($theimages);
                    
        return $theimages;

    }


    private function joomgalleryImagePath()
    {
        
        return $this ->interface ->getJConfig( 'jg_pathoriginalimages' );

    }


    public function __set($property, $value){

    $this->$property = $value;

    }

}
