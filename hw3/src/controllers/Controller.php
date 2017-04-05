<?php
/*
 * Only controller classes directly handle request/form data.
 * Controllers use this information to invoke model methods that make database calls to get/set/update info in the database
 * then choose a view, instantiate it, and call its render() method to display a web page back to the requesting browser.
 * BASE_URL/index.php?c=name_of_controller&m=name_of_method&arg1=value_for_arg1& ...&argn=value_for_argn
 */
namespace controllers;

require_once(ROOT.'/src/models/listModel.php');
require_once(ROOT.'/src/models/noteModel.php');
require_once(ROOT . '/src/views/landingView.php');

abstract class Controller{
    private $view;

    public function __construct($data){
        $this->view = new \views\landingView("landingLayout");
        $this->view->display($data);
    }
}