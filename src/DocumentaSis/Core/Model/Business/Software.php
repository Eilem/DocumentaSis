<?php

/**
 * @package DocumentaSis\Core\Model\Business
 */
namespace DocumentaSis\Core\Model\Business;

class Software extends Documentacao{
    
    
    public $colCasoDeUso;
    
    
    public function adicionarCasoDeUso(){
        return $this;
    }
    
    public function definirColCasoDeUso( array $colCSU ){
      
        
        return $this;
    }
    
}