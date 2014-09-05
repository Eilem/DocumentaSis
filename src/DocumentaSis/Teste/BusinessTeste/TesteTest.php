<?php

/**
 * @package Teste\BusinessTeste
 */
namespace Teste\BusinessTeste;

class TesteTest extends DocumentacaoTest{
    
    protected $object;
    protected $projeto;
    
    public function setUp() {
        $this->object = new \DocumentaSis\Core\Model\Business\Teste();
    }
            
    public function dataProviderDocumentacao() {
        return array(
          array( new \DocumentaSis\Core\Model\Business\Teste( new \DocumentaSis\Core\Model\Business\Projeto() ) )
        );
    }
    
    public function testObterPlanoDeTeste(){
        
    }
    
    public function testDefinirPlanoDeTeste() {
        
    }    
    
    public function testDefinirColecaoTesteDeValidacao() {
        
    }    
    
    public function testRemoverColecaoTesteDeValidacao() {
        
    }
        
    public function testAdicionarTesteDeValidacao() {
        
    }
    
    public function testRemoverTesteDeValidacao() {
        
    }
    
    public function testDefinirColecaoCasoDeTeste() {
        
    }
    
    public function testRemoverColecaoCasoDeTeste() {
        
    }
    
    public function testAdicionarCasoDeTeste() {
        
    }
    
    public function testRemoverCasoDeTeste() {
        
    }    

    public function tearDown() {
        $this->object = NULL;
    }
    
}