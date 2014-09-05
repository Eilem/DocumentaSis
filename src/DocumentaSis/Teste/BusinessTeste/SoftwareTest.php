<?php

/**
 * @package Teste\BusinessTeste
 */
namespace Teste\BusinessTeste;

use \DocumentaSis\Core\Model\Business\CasoDeUso,
    \DocumentaSis\Core\Model\Business\Software; 

class SoftwareTest extends DocumentacaoTest{    
       
    protected $object;
    protected $colecaoCSU;
    
    /**
     * "Pré-condições" para realização do Teste
     */
    public function setUp() {
        $this->object = new Software( new \DocumentaSis\Core\Model\Business\Projeto() );
        $this->colecaoCSU = array(
                            'csu1' => new CasoDeUso(),
                            'csu2' => new CasoDeUso(),
                            'csu3' => new CasoDeUso(),
                            'csu4' => new CasoDeUso()
        );
    }
    
    public function dataProviderDocumentacao() {
        return array(
          array( new \DocumentaSis\Core\Model\Business\Software( new \DocumentaSis\Core\Model\Business\Projeto() ) )
        );
    }
    
    public function dataProviderDados(){
        $colCSU =  array(
            array ( new CasoDeUso() ),
            array ( new CasoDeUso() ),
            array ( new CasoDeUso() ),
        );
        return $colCSU;
    }
    
    /**
     * @dataProvider dataProviderDados
     */
    public function testDefinirColecaoCasoDeUso(){
        
        $retorno = $this->object->definirColCasoDeUso( $this->colecaoCSU );

        var_dump($this->colecaoCSU);
        var_dump($retorno);
        die;
    }    
    
    /**
     * @dataProvider dataProviderDados
     */
    public function testAdicionarCasoDeUso($dados){
        
        var_dump($dados);
        
        $x = $this->object->adicionarCasoDeUso($dados);
        
        var_dump($x);
        
        die;
        
        return $colCSU;
    }

    
    public function testObterColecaoCasoDeUso() {
                
    }
    
    /**
     * @depends testDefinirColecaoCasoDeUso
     */
    public function testRemoverCasoDeUso() {
        
    }
    
    /**
     * "Destrói" as pré condições definidas em SetUp
     * utilizado para "limpar" a memória para evitar erros em outras classes de 
     * testes que se utilizem de instãncias da mesma classe, porem com valores diferentes
     */
    public function tearDown() {
        $this->object = NULL;
    }
    
}