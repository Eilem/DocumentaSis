<?php

/**
 * @package DocumentaSis\Core\Model\Business
 */
namespace DocumentaSis\Core\Model\Business;

abstract class Documentacao{
    
    public $id;
     
    public $projeto;
    
    public $nome;
    
    /**
     * Obtém a Identificação da Documentação 
     * @return int
     */
    public function obterId() {
        return $this->id;
    }
    
    /**
     *  Obtem o Nome da Documentação
     * @return string
     */
    public function obterNome() {
        return $this->nome;
    }

    /**
     * Define o Nome da Documentação
     * @param string $nome
     * @return \DocumentaSis\Core\Model\Business\Documentacao
     */
    public function definirNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    
}