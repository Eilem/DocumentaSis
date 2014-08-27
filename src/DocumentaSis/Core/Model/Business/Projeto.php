<?php

/**
 * @package DocumentaSis\Core\MOdel\Business
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
    public $documentacaoTeste;
    
    /**
     * Documentação de Software que pertence ao projeto
     * @var Documentação de Software 
     */
    public $documentacaoSoftware;
    
    
    public function obterId() {
        return $this->id;
    }

    public function obterNome() {
        return $this->nome;
    }

    public function obterDescricao() {
        return $this->descricao;
    }

    public function obterColDocumentacao() {
        return $this->colDocumentacao;
    }

    public function obterDocumentacaoTeste() {
        return $this->documentacaoTeste;
    }

    public function obterDocumentacaoSoftware() {
        return $this->documentacaoSoftware;
    }

    public function definirNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function definirDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    public function definirColDocumentacao($colDocumentacao) {
        $this->colDocumentacao = $colDocumentacao;
        return $this;
    }

    public function definirDocumentacaoTeste($documentacaoTeste) {
        $this->documentacaoTeste = $documentacaoTeste;
        return $this;
    }

    public function definirDocumentacaoSoftware($documentacaoSoftware) {
        $this->documentacaoSoftware = $documentacaoSoftware;
        return $this;
    }
    
    
}