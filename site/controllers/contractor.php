<?php

defined('_JEXEC') or die("Restricted access");

jimport('joomla.application.component.controlleradmin');


class ContractorControllerContractor extends JControllerAdmin {
    
       
    public function getModel($name = 'Contractor', $prefix = 'ContractorModel', $config = array('ignore_request'=> true)) {
        
        $model = parent::getModel($name, $prefix, $config);        
        return $model;
        
    }
    
}

