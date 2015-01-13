<?php
// No direct access to this file
defined('_JEXEC') or die;

// import the list field type
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

/**
 * HelloWorld Form Field class for the HelloWorld component
 */
class JFormFieldWineSearcher extends JFormFieldList
{
    /**
     * The field type.
     *
     * @var         string
     */
    protected $type = 'WineSearcher';

    /**
     * Method to get a list of options for a list input.
     *
     * @return      array           An array of JHtml options.
     */
    protected function getOptions()
    {
        $db    = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('category_id,name');
        $query->from('#__mijoshop_category_description');
        $query->where('category_id in (select category_id from #__mijoshop_category where parent_id = 0)');
        $query->order('category_id');
        $db->setQuery((string) $query);
        $categories = $db->loadObjectList();
        $options  = array();
        if ($categories)
        {
            foreach ($categories as $category)
            {
                $options[] = JHtml::_('select.option', $category->category_id, $category->category_id . ' ' . $category->name);
            }
        }
        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}
