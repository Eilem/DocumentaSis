<?php

namespace Teste\BusinessTeste;

use PHPUnit_Framework_TestCase;

/**
 * Classe Principal de teste que herda classe de teste do Framework PHPUnit
 */
abstract class MainTeste extends \PHPUnit_Framework_TestCase{
    
    /**
     * "Pré-condições" para realização do Teste
     */
    public function setUp() {
                
    }
    
    /**
    * 
    * @param string $nomedaClasse
   
    public function assertPreConditions( $CaminhoNomeDaClasse ) {
        
        $this->assertTrue(
                class_exists($CaminhoNomeDaClasse), 
                'Classe não Localizada'.$CaminhoNomeDaClasse
                );
    }
    */
    
    
    /**
     * Verifica se a classe recebida por parâmetro Existe
     * @param string $classe
     */
    public function testarSeClasseExiste( $classe ){      
        $this->assertTrue(
                class_exists($classe), 
                'Classe não existe'.$classe
        );
    }
    
    /**
     * Verificar se o objeto é realmente uma instância da Classe 
     * @param Class $classe
     * @param Objeto $objeto
     */
    public function testarSeTipoDoObjetoInstanciadoEIgualAClasse( $classe , $objeto ){
 
        $this->assertInstanceOf(
                $classe,
                $objeto,
                'objeto não é da da classe'.$classe
        );

     }

     /**
     * "Destrói" as pré condições definidas em SetUp
     * utilizado para "limpar" a memória para evitar erros em outras classes de 
     * testes que se utilizem de instãncias da mesma classe, porem com valores diferentes
     */
    public function tearDown() {
                
    }
}