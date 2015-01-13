<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelitem library
jimport('joomla.application.component.modelitem');

class FullscreenSlideshowModelFullscreenslideshow extends JModelItem
{

    public function getImage()
    {
        $this -> images = $this -> talkToJoomgallery();    

        return $this -> images;
        
    }

    private function talkToJoomgallery()
    {

        $file = JPATH_ROOT. '/components/com_joomgallery/interface.php';
        if(!file_exists($file)){
        JError::raiseError(500, 'JoomGallery seems not to be installed');
        } else {
        require_once $file;
        $interface = new JoomInterface();
        }
        
         $images = $interface -> getPicsByCategory(2);

        $theimages = array();
        $c = 0;
        foreach ($images as $i){
            $theimages[$c]= JURI::base() . '/images/joomgallery/originals/' . $i->catpath . '/' . $i->imgfilename;
        
            $c ++;
        }
            
        return $theimages;

    }
}

