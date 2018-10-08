<?php

class Cliente extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $cli_id;

    /**
     *
     * @var string
     */
    public $cli_nome;

    /**
     *
     * @var string
     */
    public $cli_cpf;

    /**
     *
     * @var string
     */
    public $cli_data_nascimento;

    /**
     *
     * @var string
     */
    public $cli_telefone;

    /**
     *
     * @var string
     */
    public $cli_email;

    /**
     *
     * @var string
     */
    public $cli_senha;

    /**
     *
     * @var string
     */
    public $cli_data_cadastro;





    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("onclickphptest");
        $this->setSource("cliente");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cliente';
    }


    public function query_inicio(){

return $this->modelsManager->executeQuery(
'SELECT * FROM Cliente     
LEFT JOIN Cliente_Endereco  ON cli_id = end_id_cliente_fk GROUP BY cli_id') ; 


/*
    'SELECT * FROM Cliente WHERE cli_id = :cli_id:',
    [
        'cli_id' => '16',
    ]
);
*/

    }

    public function deleta($id){
$sql = 'DELETE Cliente.*,Cliente_Endereco.* FROM Cliente     
LEFT JOIN Cliente_Endereco  ON cli_id = end_id_cliente_fk 
WHERE cli_id ='.$id;
        $this->getWriteConnection()->execute($sql); 
header('Location: /index');
    }

 public function query_edit($id){

$sql='SELECT * FROM Cliente WHERE cli_id ='.$id;


return $this->modelsManager->executeQuery($sql) ; 


    }

public function query_edit2($id){

$sql='SELECT * FROM Cliente_Endereco WHERE end_id_cliente_fk ='.$id;


return $this->modelsManager->executeQuery($sql) ; 


    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cliente[]|Cliente|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cliente|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
