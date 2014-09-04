<?php

/**
 * @package Teste\BusinessTeste
 */
namespace Teste\BusinessTeste;

class TesteTest extends \PHPUnit_Framework_TestCase{
    
    protected $object;

    public function setUp() {
        $this->object = new \DocumentaSis\Core\Model\Business\Teste();
    }
    
        
    public function testExistenciaDoMetodoDefinirNome(){
        $this->assertTrue(
                method_exists( $this->object , 'definirNome' ),
                'Método definirNome não localizado ou inexistente na Classe'
        );
    }
    
    /**
     * @depends testExistenciaDoMetodoDefinirNome
     */
    public function testDefinirNome(){
        $nome = 'Documentação de Teste X';
        $retorno = $this->object->definirNome( $nome );
        
        $this->assertSame($this->object,
                          $retorno,
                          'Objeto Teste retornado não é o mesmo q o esperadp.'
        );
        
        $this->assertEquals(
                        $nome,
                        $retorno->obterNome(),
                        'O conteúdo do atributo nome não é igual ao esperado'
        );
        
        $this->assertInternalType(
                            'string',
                            $nome,
                            'Atributo Nome não contém o valor string!'
        );
    }
    
    public function testExistenciaDoMetodoObterNome(){
        $this->assertTrue(
                method_exists($this->object, 'obterNome'),
                'Método obterNome não localizado ou inexistente na Classe'
        );
    }
    
    /**
     * @depends testExistenciaDoMetodoObterNome
     * @depends testExistenciaDoMetodoDefinirNome
     */
    public function testObterNome( $nome, $objeto ){
        
        $nome = 'Documentação de Teste X';
        $retorno = $this->object->definirNome($nome);
        
        $this->assertEquals(
                        $nome,
                        $retorno->obterNome(),
                        'O conteúdo do atributo nome não é igual ao esperado'
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