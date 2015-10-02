<?php

class Application_Form_Search extends Zend_Form
{
    public function init()
    {
        //$this->setMethod('post');
        
        $this->setAttrib('class', 'search');
        
        $field = new Zend_Form_Element_Text('search', [
            'label' => 'Search',
            'required' => true,
            'filters' => ['StringTrim'],
            'attribs' => ['placeholder' => 'write any text...', 'size' => 100],
            'value' => 'English Language-Business, Grammar, Test Prep, Conversation, Slang',
        ]);
        $this->addElement($field);
        
        $this->addElement('submit', 'zapisz', [
            'required' => false,
            'ignore' => true,
            'label'    => 'Search',
        ]);
    }
}
