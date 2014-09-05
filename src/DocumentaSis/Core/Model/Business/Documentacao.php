<?php

/**
 * @package DocumentaSis\Core\Model\Business
 */
namespace DocumentaSis\Core\Model\Business;

use DocumentaSis\Core\Model\Business\Projeto;

abstract class Documentacao{

    public $id;
     
    public $projeto;
    
    public $nome;
    
    /**
     * Data de criação do Projeto
     * @var \DateTime
     */
    public $dataCriacao;
        
    /***
     * 
     */
    public function __construct( Projeto $projeto ){
        $this->definirProjeto( $projeto );
    }
    
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
    
    /**
     * 
     * @return DocumentaSis\Core\Model\Business
     */
    public function obterProjeto() {
        return $this->projeto;
    }
    
    /**
     * 
     * @param \DocumentaSis\Core\Model\Business\Projeto $projeto
     * @return \DocumentaSis\Core\Model\Business\Documentacao
     */
    public function definirProjeto(Projeto $projeto) {
        $this->projeto = $projeto;
        return $this;
    }
    
    /**
     * Define a data de criação da Documentação
     * @param \DateTime $dataCriacao
     * @return \DocumentaSis\Core\Model\Business\Documentacao
     * @throws \InvalidArgumentException
     */
    public function definirDataCriacao(\DateTime $dataCriacao){
        if( $dataCriacao > ( new \DateTime() ) ) {
            throw new \InvalidArgumentException("A Data de Criação da Documentação não pode ser maior que a data atual!");
        }
        $this->dataCriacao = $dataCriacao;
        return $this;
    }

    /**
     * Obtém a Data de Criação da Documentação
     * @return \DateTime
     */
    public function obterDataCriacao(){
        if( ! $this->dataCriacao instanceof \DateTime ){
            $this->dataCriacao = new \DateTime();
        }
        return $this->dataCriacao;
    }
    
}