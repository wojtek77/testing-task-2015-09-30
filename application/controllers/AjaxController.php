<?php

class AjaxController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    /**
     * Get profile from "buddychool.com" and save it on the disk
     */
    public function buddyschoolFirstProfileAction()
    {
        $search = $this->getRequest()->getParam('search');
        
        /* get contents */
        $parser = new My_Parser();
        $contents = $parser->buddyschoolFirstProfile($search);
        
        /* save contenst to disk */
        $file = 'profiles/profil.txt';
        $dir = APPLICATION_PATH.'/../'.dirname($file);
        if (!is_dir($dir)) mkdir($dir);
        file_put_contents($file, $contents);
        
        $response = $file;
        
        $this->_helper->json($response);
    }
}
