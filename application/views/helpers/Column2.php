<?php
class Zend_View_Helper_Column2 extends Zend_View_Helper_Abstract
{
    public function column2(array $data)
    {
        $this->view->data = $data;
        return $this->view->render('column2.phtml');
    }
}