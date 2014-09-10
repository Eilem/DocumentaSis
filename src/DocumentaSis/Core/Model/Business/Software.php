<?php

/**
 * @package DocumentaSis\Core\Model\Business
 */
namespace DocumentaSis\Core\Model\Business;

use Doctrine\Common\Collections\ArrayCollection,
    ProjetoTeste\Core\Model\Business\CasoDeUso as CasoDeUso;

class Software extends Documentacao{
    
    /**
     * Método construtor 
     */
    public function __construct() {
        
        #por ter dependência de um projeto, receber o projeto ao qual pertence a Documentação de Software no paramentro do constutor
        
        $this->colCasoDeUso = new ArrayCollection();
    }

    public $colCasoDeUso;
    
    public function obterColCasoDeUso() {
        return $this->colCasoDeUso;
//        return $this->colCasoDeUso->toArray();
    }
    
        
    public function adicionarCasoDeUso(){
        return $this;
    }
    
    public function definirColCasoDeUso( array $colCSU ){
      
        
        return $this;
    }
    
    public function removerCasoDeUso(CasoDeUso $casoDeUso){
        
    }
}