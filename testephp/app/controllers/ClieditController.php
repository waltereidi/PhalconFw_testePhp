<?php
use Phalcon\Mvc\Model\Query;

class ClieditController extends ControllerBase
{

  public function indexAction()
    {


$model = new Cliente();
$id = $_POST["idedt"];
$this->view->query_edit = $model->query_edit($id);
$this->view->query_edit2 = $model->query_edit2($id);
    }

//##########################################
//##########################################

public function edit1Action()
    {
$cliente = new cliente();
           $success = $cliente->save(
                $this->request->getPost(),
                [   "cli_id",   
                    "cli_nome",
                    "cli_cpf",
                    "cli_data_nascimento",
                    "cli_telefone",
                    "cli_email",
                    "cli_senha",
                    "cli_data_cadastro", 
                     ]
            );
if ($success) {

header('Location: /index');


        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $cliente->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }


}

public function edit2Action(){

$cliente_endereco = new cliente_endereco();
           $success = $cliente_endereco->save(
                $this->request->getPost(),
                [      	"end_id",
						"end_titulo" ,
						"end_rua" ,
						"end_numero" ,
						"end_complemento" ,
						"end_bairro" ,
						"end_cidade" ,
						"end_estado" ,
						"end_id_cliente_fk" ,
						"end_data_cadastro" , 
                     ]
            );
if ($success) {
header('Location: /index');



        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $cliente_endereco->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }  

}

}

 ?>