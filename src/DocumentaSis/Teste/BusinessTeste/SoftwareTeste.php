<?php

/**
 * @package Teste\BusinessTeste
 */
namespace Teste\BusinessTeste;

use \DocumentaSis\Core\Model\Business\CasoDeUso,
    \DocumentaSis\Core\Model\Business\Software; 


class SoftwareTeste extends \PHPUnit_Framework_TestCase{    
       
    protected $object;
    
    /**
     * "Pré-condições" para realização do Teste
     */
    public function setUp() {
        $this->object = new Software();
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
        $nome = 'Documentação de Software';
        $retorno = $this->object->definirNome( $nome );
        
        $this->assertSame($this->object,
                          $retorno,
                          'Objeto Teste retornado não é o mesmo que o esperado.'
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
    public function testObterNome(){
        
        $nome = 'Documentação de Software ';
        $retorno = $this->object->definirNome($nome);
        
        $this->assertEquals(
                        $nome,
                        $retorno->obterNome(),
                        'O conteúdo do atributo nome não é igual ao esperado'
        );
    }    
    
    public function dataProviderDados(){
        $dados =  array(
            array ( new CasoDeUso() ),
            array ( new CasoDeUso() ),
            array ( new CasoDeUso() ),
        );
        
        return $dados;
    }    
    
        public function testExistenciaDoMetodoAdicionarCasoDeUso(){
        $this->assertTrue(
                method_exists($this->object, 'adicionarCasoDeUso'),
                'Método adicionarCasoDeUso não localizado ou inexistente na Classe'
        );
    } 
    
    /**
     * @dataProvider dataProviderDados
     * @depends testExistenciaDoMetodoAdicionarCasoDeUso
     */
    public function testAdicionarCasoDeUso($dados){
        
        var_dump($dados);
        
        $x = $this->object->adicionarCasoDeUso($dados);
        
        var_dump($x);
        die;
    }    
    
    public function testExistenciaDoMetodoDefinirColecaoCasoDeUso(){
        $this->assertTrue(
                method_exists($this->object, 'definirColecaoCasoDeUso'),
                'Método DefinirColecaoCasoDeUso não localizado ou inexistente na Classe'
        );
    }
    
    /**
     * @dataProvider dataProviderDados
     */
    public function testDefinirColecaoCasoDeUso( ) {

        $this->object;
        
        
    }    
        

    
    public function testExistenciaDoMetodoRemoverCasoDeUso(){
        $this->assertTrue(
                method_exists($this->object, 'removerCasoDeUso'),
                'Método removerCasoDeUso não localizado ou inexistente na Classe'
        );
    }  
    
    
    public function testExistenciaDoMetodoObterColecaoCasoDeUso(){
        $this->assertTrue(
                method_exists($this->object, 'obterColecaoCasoDeUso'),
                'Método obterColecaoCasoDeUso não localizado ou inexistente na Classe'
        );
    }    
    
    /**
     * @depends testDefinirColecaoCasoDeUso
     */
    public function testObterColecaoCasoDeUso() {
                
    } 
    
    /**
     * @depends testDefinirColecaoCasoDeUso
     * @depends testExistenciaDoMetodoRemoverCasoDeUso
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