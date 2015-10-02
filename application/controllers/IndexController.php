<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $form = new Application_Form_Search();
        
        $request = $this->getRequest();
        if ($request->isPost()) {
            if ($form->isValid($_POST)) {
                
                $parser = new My_Parser();
                $contents = $parser->buddyschoolFirstProfile('English Language-Business, Grammar, Test Prep, Conversation, Slang');
                
                $dir = APPLICATION_PATH.'/../profiles/';
                if (!is_dir($dir)) mkdir($dir);
                
                file_put_contents($dir.'profil.txt', $contents);
                
                
                //$this->_helper->redirector->gotoSimple('index');
            }
        }
        
        $this->view->form = $form;
    }
}

