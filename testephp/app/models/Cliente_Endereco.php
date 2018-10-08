<?php

class Cliente_Endereco extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $end_id;

    /**
     *
     * @var integer
     */
    public $end_id_cliente_fk;

    /**
     *
     * @var string
     */
    public $end_titulo;

    /**
     *
     * @var string
     */
    public $end_rua;

    /**
     *
     * @var string
     */
    public $end_numero;

    /**
     *
     * @var string
     */
    public $end_complemento;

    /**
     *
     * @var string
     */
    public $end_bairro;

    /**
     *
     * @var string
     */
    public $end_cidade;

    /**
     *
     * @var string
     */
    public $end_estado;

    /**
     *
     * @var string
     */
    public $end_data_cadastro;

    /**
     *
     * @var integer
     */
    public $end_ordem;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("onclickphptest");
        $this->setSource("cliente_endereco");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cliente_endereco';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ClienteEndereco[]|ClienteEndereco|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ClienteEndereco|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }


    public function pos_insert_cli(){

return $this->modelsManager->executeQuery(
'SELECT MAX(cli_id) AS cli_id FROM Cliente') ; 

    }




}
