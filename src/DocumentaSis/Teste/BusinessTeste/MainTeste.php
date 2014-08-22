<?php

namespace Teste\BusinessTeste;

use PHPUnit_Framework_TestCase;

/**
 * Classe Principal de teste que herda classe de teste do Framework PHPUnit
 */
class MainTeste extends PHPUnit_Framework_TestCase{
    
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
    
    public function testSoma() {
        $this->assertTrue(TRUE);
    }
    
    
    
    
    
    
    
    
    public function tearDown() {
        
    }

}