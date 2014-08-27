<?php

namespace Teste\BusinessTeste;

use PHPUnit_Framework_TestCase;

/**
 * Classe Principal de teste que herda classe de teste do Framework PHPUnit
 */
abstract class MainTeste extends \PHPUnit_Framework_TestCase{
    
    
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
        
    }*/
    
    /**
     * verificar se o objeto é realmente uma instância da Classe
     * @param Class $classe
     * @param Objeto $objeto
     */
    public function testarSeTipoDoObjetoInstanciadoEIgualAClasse($classe , $objeto) {
 
        $this->assertInstanceOf(
                $classe,
                $objeto,
                'objeto não é da da classe'.$classe
        );

     }

    public function tearDown() {
        
    }

}