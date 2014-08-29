<?php

/**
 * @package Teste\BusinessTeste
 */
namespace Teste\BusinessTeste;

/**
 * Classe de teste responsável por testar(garantir) os métodos da Business de Projeto
 */
class ProjetoTeste extends \PHPUnit_Framework_TestCase{
    
    protected $projeto;
    
    /**
     * "Pré-condições" para realização do Teste
     */
    public function setUp() {
        $this->projeto = new \DocumentaSis\Core\Model\Business\Projeto();
    }
    
    /**
     * Testa se o objeto atualmente instanciado é uma instância do esperado
     * retorna uma mensagem de erro se a instancia atual for diferente do esperado
     */
    public function testInstanciarClasseProjeto() {
        
        $class = '\DocumentaSis\Core\Model\Business\Projeto';
        $this->assertInstanceOf(
                $esperado = $class, 
                $atual = $this->projeto,
                'Este objeto não é uma instância da Classe'
        );
    } 
    
    /**
     * Teste para definir o nome de um projeto e se o valor 
     */
    public function testMetodoDefinirNomeProjeto() {        
        
        $nome = "Nome do Projeto";
        $objetoRetornado = $this->projeto->definirNome( $nome );
        
        #verifica se metodo existe na classe Projeto
        $this->assertTrue(
                        method_exists($this->projeto, 'definirNome'),
                        'Método não localizado ou não existe no objeto Projeto'
        );
        
        # verifica se nome passado é igual ao nome que está no objeto        
        $this->assertEquals( 
                        $nome,
                        $this->projeto->obterNome() 
        );
        
        #verifica se a variavel póssui o tipo esperado 
        $this->assertInternalType(
                            'string',
                            $nome,
                            'Nome deve ser uma string'
        );
    }
    
    public function testDefinirNome($param) {
        
    }

    /**
     * "Destrói" as pré condições definidas em SetUp
     * utilizado para "limpar" a memória para evitar erros em outras classes de 
     * testes que se utilizem de instãncias da mesma classe, porem com valores diferentes
     */
    public function tearDown() {
        $this->projeto = NULL;
    }
}