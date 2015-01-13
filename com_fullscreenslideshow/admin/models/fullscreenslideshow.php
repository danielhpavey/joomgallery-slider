<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * HelloWorldList Model
 */
class FullscreenSlideshowModelFullscreenSlideshow extends JModelList
{
    /**
     * Method to build an SQL query to load the list data.
     *
     * @return      string  An SQL query
     */
    protected function getListQuery()
    {
        // Create a new query object.
        $db    = JFactory::getDBO();
        $query = $db->getQuery(true);
        // $query->select('category_id,name as category_name');
        // $query->from('#__mijoshop_category_description');
        // $query->where('category_id in (select category_id from #__mijoshop_category where parent_id = 0)');
        // $query->order('category_id');

        $query -> select( '*' );
        $query -> from( '#__winesearcher' );


        return $query;
    }
}
