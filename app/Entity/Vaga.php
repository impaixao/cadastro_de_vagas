<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Vaga{

    /**
     * Identificador único da vaga
     * @var integer
     */
    public $id;

    /**
     * Titulo da vaga
     * @var string
     */
    public $titulo;

    /**
     * Descrição da vaga (pode conter html)
     * @var string
     */
    public $descricao;

    /**
     * Define se a vaga está ativa
     * @var string(s/n)
     */
    public $ativo;

    /**
     * Data de publicação da vaga
     * @var string
     */
    public $data;

    /**
     * Método responsável por cadastrar uma nova vaga no banco
     * @return boolean
     */
    public function cadastrar()
    {
        //Definir a data
        $this->data = date('Y-m-d H:i:s');

        //inserir a vaga no banco
        $objDatabase = new Database('vagas');
        $this->id = $objDatabase->insert([
                                            'titulo' => $this->titulo,
                                            'descricao' => $this->descricao,
                                            'ativo' => $this->ativo,
                                            'data' => $this->data
                                        ]);

        //retornar sucesso
        return true;

    }

    /**
     * Método responsável por obter as vagas do banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array 
     */
    public static function getVagas($where = null, $order = null, $limit = null)
    {
        return (new Database('vagas'))->select($where,$order,$limit)
                                    ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

}