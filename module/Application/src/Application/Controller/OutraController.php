<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class OutraController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function outraAction()
    {
    	
    }
}
