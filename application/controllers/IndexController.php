<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->_helper->getHelper('Layout')->assign(
            'aside',
            $this->view->column1(array('Jan Kowalski', 'Ewa Nowak'))
        );
    }

    public function otherAction()
    {
        $this->_helper->getHelper('Layout')->assign(
            'aside',
            $this->view->column2(array('Artykuł 1', 'Artytuł 2', 'Artykuł 3'))
        );
    }


}



