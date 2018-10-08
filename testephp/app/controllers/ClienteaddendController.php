<?php
use Phalcon\Mvc\Model\Query;
class clienteaddendController extends ControllerBase
{

    public function indexAction()
    { 
    	
    	$cliente = new cliente();
           $success = $cliente->save(
                $this->request->getPost(),
                [      
                    "cli_nome",
                    "cli_cpf",
                    "cli_data_nascimento",
                    "cli_telefone",
                    "cli_email",
                    "cli_senha",  ]
            );
if ($success) {

$this->view->pick('clienteaddend/index');


        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $cliente->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }
	$model = new Cliente_endereco();
$this->view->last_id = $model->pos_insert_cli();

    }



 public function addendcadAction(){



$cliente_endereco = new cliente_endereco();
           $success = $cliente_endereco->save(
                $this->request->getPost(),
                [      
						"end_titulo" ,
						"end_rua" ,
						"end_numero" ,
						"end_complemento" ,
						"end_bairro" ,
						"end_cidade" ,
						"end_estado" ,
						"end_id_cliente_fk" ,
                     ]
            );
if ($success) {

	$model = new Cliente_endereco();
$this->view->last_id = $model->pos_insert_cli();
  		echo '<button class="btn btn-primary" > <a style="color:white;" href="/clienteaddend"> Adicionar Mais Endereços </a></button><br><br> ';
  	


        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $cliente->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }  



    }













}