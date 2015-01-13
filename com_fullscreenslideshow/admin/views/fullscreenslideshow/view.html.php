<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');


class  FullscreenSlideshowViewFullscreenSlideshow extends JViewLegacy
{
	
    public function display($tpl = null)
	{

        $params = JComponentHelper::getParams('com_fullscreenslideshow');
        $this -> category_id = $params->get('category_id');
		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);

        // Set the document
        $this->setDocument();
	}

	/**
	 * Setting the toolbar
	 */
	protected function addToolBar()
	{
		JToolBarHelper::title(JText::_('Full Screen Slideshow'));
        JToolBarHelper::preferences('com_fullscreenslideshow');
	}

    protected function setDocument() 
    {
        $document = JFactory::getDocument();
    }
}
