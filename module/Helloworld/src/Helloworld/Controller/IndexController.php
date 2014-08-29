<?php
/**
 * Created by: Daniel
 * Date: 29-8-14
 */

namespace Helloworld\Controller;

use Zend\Mvc\Controller\AbstractActionCOntroller;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionCOntroller{
    public function indexAction(){
        return new ViewModel(array('greeting' => 'hello, world!'));
    }
} 