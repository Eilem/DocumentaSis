<?php

/**
 * @package DocumentaSis\Core\Model\Business
 */
namespace DocumentaSis\Core\Model\Business;

class Projeto{
 
    /**
     * Identificação do Projeto
     * @var int
     */
    public $id;

    /**
     * Nome do Projeto
     * @var string
     */
    public $nome;
    
    /**
     * Descrição do Projeto
     * @var string
     */
    public $descricao;
    
    /**
     * Data de criação do Projeto
     * @var \DateTime
     */
    public $dataCriacao;


    /**
     * variáveis de relacionamento com projeto e documentação
     * implementar quando tiver as classes criadas
     */
    
    /**
     * coleção de documentações que o Projeto possui
     * @var TIPO È DOCUMENTAÇÂO
     */
    public $colDocumentacao;
    
    /**
     *
     * @var TIPO È DOCUMNETAÇÂO DE TESTE
     */
    public $documentacaoDeTeste;
    
    /**
     * Documentação de Software que pertence ao projeto
     * @var Documentação de Software 
     */
    public $documentacaoDeSoftware;
    
    
    public function obterId() {
        return $this->id;
    }

    public function obterNome() {
        return $this->nome;
    }

    /**
     * 
     * @return type
     */
    public function obterDescricao() {
        return $this->descricao;
    }
    
    /**
     * 
     * @return \DateTime
     */
    public function obterDataCriacao() {
        return $this->dataCriacao;
    }
    
    /**
     * 
     * @return type
     */
    public function obterColDocumentacao() {
        return $this->colDocumentacao;
    }

    /**
     * 
     * @return type
     */
    public function obterDocumentacaoTeste() {
        return $this->documentacaoTeste;
    }

    /**
     * 
     * @return type
     */
    public function obterDocumentacaoSoftware() {
        return $this->documentacaoSoftware;
    }

    /**
     * 
     * @param type $nome
     * @return \DocumentaSis\Core\Model\Business\Projeto
     */
    public function definirNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    /**
     * 
     * @param type $descricao
     * @return \DocumentaSis\Core\Model\Business\Projeto
     */
    public function definirDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * 
     * @param \DateTime $dataCriacao
     */
    public function definirDataCriacao(\DateTime $dataCriacao) {
        $this->dataCriacao = $dataCriacao;
    }

    /**
     * 
     * @param type $colDocumentacao
     * @return \DocumentaSis\Core\Model\Business\Projeto
     */
    public function definirColDocumentacao($colDocumentacao) {
        $this->colDocumentacao = $colDocumentacao;
        return $this;
    }

    /**
     * 
     * @param type $documentacaoTeste
     * @return \DocumentaSis\Core\Model\Business\Projeto
     */
    public function definirDocumentacaoTeste($documentacaoTeste) {
        $this->documentacaoTeste = $documentacaoTeste;
        return $this;
    }

    /**
     * 
     * @param type $documentacaoSoftware
     * @return \DocumentaSis\Core\Model\Business\Projeto
     */
    public function definirDocumentacaoSoftware($documentacaoSoftware) {
        $this->documentacaoSoftware = $documentacaoSoftware;
        return $this;
    }

    
}