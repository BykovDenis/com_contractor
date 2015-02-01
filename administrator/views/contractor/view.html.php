<?php

defined('_JEXEC') or die("Restricted access");

// Подключаем библиотеку представления Joomla.
jimport('joomla.application.component.view');

class ContractorViewContractor extends JViewLegacy{
    
    protected $items; 
    protected $pagination;

    function display($tpl = null) {
        
        $this->items = $this->get("Items");
        $this->pagination = $this->get("Pagination");
        JToolBarHelper::title("Component Справочная система аптек: Справочная система аптек ", "generic.png");
        JToolBarHelper::addNew("contractor.add");
        JToolBarHelper::editList("contractor.edit");
        JToolBarHelper::divider();
        JToolBarHelper::deleteList('','contractor.remove');
        
        parent::display($tpl); // незабыть вызывать этот метод для отображения шаблона
    }
    
}
