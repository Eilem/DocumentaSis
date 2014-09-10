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
    
    
    public function testAdicionarCasoDeUso(){
        
        $outroCSU = new \DocumentaSis\Core\Model\Business\CasoDeUso();
        
        $retorno = $this->object->definirColCasoDeUso($this->colecaoCSU);
        
        $docSoftware = $this->object->adicionarCasoDeUso($outroCSU);
        
        $this->assertSame(
                        $docSoftware,
                        $retorno,
                        'Objetos de documentação de software não é o mesmo que o esperado'
        );
        
        $this->assertEquals(
                        sizeof( $docSoftware->obterColCasoDeUso() ), 
                        sizeof( $this->colecaoCSU + 1 ), //4 +1 = 5
                        'Coleção de CSu diferente do esperado!'
        );
        
        return $colCSU; 
    }

    
    public function testObterColecaoCasoDeUso() {
                
        $retorno = $this->object->definirColCasoDeUso($this->colecaoCSU);
        
        $this->assertEquals(
                            $this->colecaoCSU,
                            $retorno->obterColCasoDeUso(),
                            'Coleção obtida é diferente da esperada'
        );
    }
    
    /**
     * @depends testDefinirColecaoCasoDeUso
     */
    public function testRemoverCasoDeUso() {
        
        $remover = $this->colecaoCSU['csu2'];
        
        $retorno = $this->object->definirColCasoDeUso($this->colecaoCSU);
        
        $docSoftware = $this->object->removerCasoDeUso($remover);
        
        $this->assertSame(
                        $docSoftware,
                        $retorno,
                        'Objetos de documentação de software não é o mesmo que o esperado'
        );
        
        $this->assertEquals(
                        sizeof( $docSoftware->obterColCasoDeUso() ), 
                        sizeof( $this->colecaoCSU - 1 ), //4 +1 = 5
                        'Coleção de CSu diferente do esperado!'
        );
        
        
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