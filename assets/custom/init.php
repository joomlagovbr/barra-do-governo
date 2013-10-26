<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

$head     = $params->get("head_custom", "");
$html     = $params->get("html_custom", "");
$document =& JFactory::getDocument();

if($head != '')
	$document->addCustomTag($head);
?>