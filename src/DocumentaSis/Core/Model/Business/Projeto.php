<?php

/**
 * @package DocumentaSis\Core\Model\Business
 */
namespace DocumentaSis\Core\Model\Business;

use DocumentaSis\Core\Model\Business\Software as DocumentacaoDeSoftware,
    DocumentaSis\Core\Model\Business\Teste as DocumentacaoDeTeste;

/**
 * Classe que representa a entidade Projeto
 */
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
     * Coleção de documentações que o Projeto possui
     * @var \DocumentaSis\Core\Model\Business\Software
     */
    public $colDocumentacao;
    
    /**
     * Documentação de Teste que pertence ao projeto
     * @var \DocumentaSis\Core\Model\Business\Teste
     */
    public $documentacaoDeTeste;
    
    /**
     * Documentação de Software que pertence ao projeto
     * @var \DocumentaSis\Core\Model\Business\Teste
     */
    public $documentacaoDeSoftware;        
    
    /**
     * 
     * @return type
     */
    public function obterId() {
        return $this->id;
    }

    /**
     * 
     * @return type
     */
    public function obterNome() {
        return $this->nome;
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
     * Obtém a Descrição do Projeto
     * @return type
     */
    public function obterDescricao() {
        return $this->descricao;
    }
    
    /**
     * Define a descrição do Projeto
     * @param type $descricao
     * @return \DocumentaSis\Core\Model\Business\Projeto
     */
    public function definirDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }
    
    /**
     * Define a data de criação do Projeto
     * @param \DateTime $dataCriacao
     * @return \DocumentaSis\Core\Model\Business\Projeto
     * @throws \InvalidArgumentException
     */
    public function definirDataCriacao(\DateTime $dataCriacao){
        if( $dataCriacao > ( new \DateTime() ) ) {
            throw new \InvalidArgumentException("A Data de Criação do Projeto não pode ser maior que a data atual!");
        }
        $this->dataCriacao = $dataCriacao;
        return $this;
    }

    /**
     * Obtém a Data de Criação do Projeto
     * @return \DateTime
     */
    public function obterDataCriacao(){
        if( ! $this->dataCriacao instanceof \DateTime ){
            $this->dataCriacao = new \DateTime();
        }
        return $this->dataCriacao;
    }

    /**
     * Obtém a documentação de Teste que pertence ao Projeto
     * @return \DocumentaSis\Core\Model\Business\Teste
     */
    public function obterDocumentacaoDeTeste(){
        return $this->documentacaoDeTeste;
    }
        
    /**
     * Define a Documentação de Teste do projeto
     * @param \DocumentaSis\Core\Model\Business\Teste $documentacaoDeTeste
     * @return \DocumentaSis\Core\Model\Business\Projeto
     * 
     * @todo relacionamento na classe de dependência
     */
    public function definirDocumentacaoDeTeste(DocumentacaoDeTeste $documentacaoDeTeste) {
        $this->documentacaoDeTeste = $documentacaoDeTeste;
        return $this;
    }
    
    /**
     * Obtém a documentação de Teste que pertence ao Projeto
     * @return \DocumentaSis\Core\Model\Business\Software
     */
    public function obterDocumentacaoDeSoftware() {
        return $this->documentacaoDeSoftware;
    }
    
    /**
     * Define a Documentação de Software do Projeto
     * @param \DocumentaSis\Core\Model\Business\Software $documentacaoDeSoftware
     * @return \DocumentaSis\Core\Model\Business\Projeto
     * 
     * @todo relacionamento na classe de dependencia
     */
    public function definirDocumentacaoDeSoftware(DocumentacaoDeSoftware $documentacaoDeSoftware) {
        $this->documentacaoDeSoftware = $documentacaoDeSoftware;
        return $this;
    }

    /**
     * Obtem a coleção de documentação que o projeto possui
     * @return array
     *  
     * @todo fazer verificação se só possui uma doc de cada tipo
     */
    public function obterColDocumentacao(){
        $colDocumentacao = array();            
        
        $docSoftware = $this->obterDocumentacaoDeSoftware();
        $docTeste = $this->obterDocumentacaoDeTeste();
        
        if( $docTeste && $docTeste instanceof DocumentacaoDeTeste ){
            $colDocumentacao[] = $docTeste ;
        }        
        if( $docSoftware && $docSoftware instanceof DocumentacaoDeSoftware ){
            $colDocumentacao[] = $docSoftware ;
        }
        return $colDocumentacao; 
    }

}