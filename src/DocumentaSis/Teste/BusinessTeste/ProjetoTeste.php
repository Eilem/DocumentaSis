<?php

/**
 * @package Teste\BusinessTeste
 */
namespace Teste\BusinessTeste;

class ProjetoTeste extends \PHPUnit_Framework_TestCase{
    
    
    protected $projeto;


    public function setUp() {
        
        $this->projeto = new \DocumentaSis\Core\Model\Business\Projeto();
        
    }

    /**
     * 
     */
    public function testarSeClasseExiste() {
        
        $class = '\DocumentaSis\Core\Model\Business\Projeto';       
        $this->assertTrue(
                class_exists($class), 
                'Classe não existe'.$class
        );
    }

    /**
     * Testa se o objeto atualmente instanciado é uma instância do esperado
     */
    public function testeIntanciarProjeto() {
        
        $class = '\DocumentaSis\Core\Model\Business\Projeto';
        
        #retorna uma mensagem de erro se atual for diferente do esperado
        $this->assertInstanceOf(
                $esperado = $class, 
                $atual = $this->projeto,
                'Este objeto não é uma instância da Classe'
        );
        
        
        //assertInternalType('int' $x->getid);
        //assertInternalType('string' $x->getNome());
        
        #se forem iguais
        //assertEquals( param, valor q sera comparado);
    } 
    
    public function testarDefinirNomeComConteudoDeTexto() {
        
        $projeto = new \DocumentaSis\Core\Model\Business\Projeto();
        
        $projeto->definirNome("Nome do Projeto");
    }
    
    
    public function testarDefinirNomeComConteudoNulo() {
        
        
        $projeto = new \DocumentaSis\Core\Model\Business\Projeto();
        $projeto->definirNome(NULL);
        
        $this->assertTrue(
                $condition,
                $message
        );
        
    }
    
 
    
    /**
     * 
     */
    public function tearDown() {
                
        $this->projeto = NULL;
    }
    
}