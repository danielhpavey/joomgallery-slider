<?php

class images
{

    public function __construct()
    {
        $this -> imagesurl = JURI::base() . 'index.php?option=com_fullscreenslideshow&category_id=2&tmpl=component';

    }


    public function getFirstImage()
    {
        $cc = curl_init();
        
        curl_setopt($cc, CURLOPT_URL, $this -> imagesurl);
        curl_setopt($cc, CURLOPT_RETURNTRANSFER , true);
        $headers = array("Content-type: application/json");
        curl_setopt($cc, CURLOPT_HTTPHEADER , $headers );
     
        return curl_exec( $cc );
    }










}
