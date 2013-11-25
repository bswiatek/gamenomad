<?php

class AboutController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	$layout = $this->_helper->layout();
    	$layout->setLayout('three-column');
    }

    public function indexAction()
    {
        // action body
        $this->view->pageTitle = "About Bartek page";
        $console = $this->_request->getParam('console');
        $page = $this->_request->getParam('page');
    }

    public function contactAction()
    {
        // action body
        //$this->view->setScriptPath('/application/view/scripts/about/');
        //$this->view->render('index.phtml');
        //$this->_helper->viewRenderer->setNoRender(true);
        
    }


}



