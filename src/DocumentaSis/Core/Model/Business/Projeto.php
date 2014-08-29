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

    #################################
    #ver!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    /**
     * variáveis de relacionamento com projeto e documentação
     * implementar quando tiver as classes criadas
     */
    ###########################
    
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
     * 
     * @return type
     */
    public function obterDescricao() {
        return $this->descricao;
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
     * @return \DocumentaSis\Core\Model\Business\Projeto
     * @throws \InvalidArgumentException
     */
    public function definirDataCriacao(\DateTime $dataCriacao)
    {
        if ($dataCriacao > (new \DateTime())) {
            throw new \InvalidArgumentException("A Data de Criação do Projeto não pode ser uma data futura!");
        }
        $this->dataCriacao = $dataCriacao;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function obterDataCriacao()
    {
        if (! $this->dataHoraCriacao instanceof \DateTime) {
            $this->dataHoraCriacao = new \DateTime();
        }
        return $this->$dataCriacao;
    }    

//   Anterior
//     public function obterColDocumentacao() {
//        return $this->colDocumentacao;
//    }
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
        
        if( $docTeste && $docTeste instanceof DocTeste ){
            $colDocumentacao[] = $docTeste ;
        }        
        if( $docSoftware && $docSoftware instanceof DocSoftware ){
            $colDocumentacao[] = $docSoftware ;
        }   
        return $colDocumentacao;
    }

    /**
     * 
     * @return type
     */
    public function obterDocumentacaoDeTeste() {
        return $this->documentacaoDeTeste;
    }
        
    /**
     * 
     * @param \DocumentaSis\Core\Model\Business\Teste $documentacaoDeTeste
     * @return \DocumentaSis\Core\Model\Business\Projeto
     */
    public function definirDocumentacaoDeTeste(DocumentacaoDeTeste $documentacaoDeTeste) {
        $this->documentacaoDeTeste = $documentacaoDeTeste;
        return $this;
    }
    
    /**
     * 
     * @return type
     */
    public function obterDocumentacaoDeSoftware() {
        return $this->documentacaoDeSoftware;
    }
    
    /**
     * 
     * @param \DocumentaSis\Core\Model\Business\Software $documentacaoDeSoftware
     * @return \DocumentaSis\Core\Model\Business\Projeto
     */
    public function definirDocumentacaoDeSoftware(DocumentacaoDeSoftware $documentacaoDeSoftware) {
        $this->documentacaoDeSoftware = $documentacaoDeSoftware;
        return $this;
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


}