<?php

defined('_JEXEC') or die("Restricted access");


function ContractorBuildRoute(&$query){
    
    $segments = array();    

    if(isset($query['id'])){        
        $segments[] = 'default';
        $segments[] = $query['id'];
        unset($query['id']);        
    }
        
    return $segments;    
}

function ContractorParseRoute($segments){
    
    $vars = array();
    
    $vars['layout'] = 'default';        
    $vars['contractor_id'] = $segments[2];
        
    $session = JFactory::getSession();
    $session->set('contractor_id', $segments[2]);
    
    return $vars;
}