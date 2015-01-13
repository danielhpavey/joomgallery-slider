<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

class FullscreenslideshowViewfullscreenslideshow extends JViewLegacy
{
	// Overwriting JView display method
	function display($tpl = null)
	{

        $this -> images = $this->get('Image');
         
        parent::display($tpl);

	}
}
