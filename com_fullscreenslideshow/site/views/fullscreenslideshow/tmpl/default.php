<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
ob_start();
 
// Get the document object.
$document = JFactory::getDocument();
 
// Set the MIME type for JSON output.
$document->setMimeEncoding('application/json');
 
// Change the suggested filename.
JResponse::setHeader('Content-Disposition','attachment;filename="test.json"');
echo json_encode($this -> images, JSON_FORCE_OBJECT,  128);

ob_end_flush();
?>

