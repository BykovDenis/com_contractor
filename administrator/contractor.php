<?php

defined('_JEXEC') or die("Restricted access");

JLog::addLogger(
array('text_file' => 'com_contractor.php'),
JLog::ALL,
array('com_contractor')
);

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_contractor')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

if($controller = JRequest::getVar('controller')){

    require_once(JPATH_COMPONENT_ADMINISTRATOR."/controllers/".$controller.".php");
    $classnme = 'contractorController'.$controller;
    $controller = new $classname();
    
    
}
else {

    // Include dependencies
    jimport('joomla.application.component.controller');
    $controller = JControllerLegacy::getInstance('contractor');
    
}

$controller->execute(JRequest::getCmd('task'));
$controller->redirect();