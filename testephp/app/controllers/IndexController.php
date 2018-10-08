<?php
use Phalcon\Mvc\Model\Query;
class IndexController extends ControllerBase
{

    public function indexAction()
    {

$model = new Cliente();


$this->view->clistart = $model->query_inicio();
// print_r($cars);

//print_r($cars);



    }


    public function clientedelAction(){

$cliente = new cliente();
$id = $_POST["iddel"];
          $cliente->deleta($id);



    }


}