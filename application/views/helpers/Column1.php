<?php
class Zend_View_Helper_Column1 extends Zend_View_Helper_Abstract
{
    public function column1(array $data)
    {
        $this->view->data = $data;
        return $this->view->render('column1.phtml');
    }
}