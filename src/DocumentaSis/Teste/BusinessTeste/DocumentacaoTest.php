<?php

/**
 * @package Teste\BusinessTeste
 */
namespace Teste\BusinessTeste;

use DocumentaSis\Core\Model\Business\Documentacao;

abstract class DocumentacaoTest extends \PHPUnit_Framework_TestCase{
    
    public abstract function dataProviderDocumentacao();
    
    /**
     * @dataProvider dataProviderDocumentacao
     */
    public function testObterNome( Documentacao $doc){
                
        $nome = 'Documentação X';
        $retorno = $doc->definirNome($nome);
        
        $this->assertEquals(
                        $nome,
                        $retorno->obterNome(),
                        'O conteudo do atributo nome nÃ£o Ã© igual ao esperado'
        );
    }
    
    /**
     * @dataProvider dataProviderDocumentacao
     * @param \DocumentaSis\Core\Model\Business\Documentacao $doc
     */
    public function testDefinirNome( Documentacao $doc ){
        
        $nome = 'Documentaçao Y';
        $retorno = $doc->definirNome( $nome );
        
        $this->assertSame(
                        $doc,
                        $retorno,
                        'Objeto Documentação retornado não é o mesmo q o esperado.'
        );
        
        $this->assertEquals(
                        $nome,
                        $retorno->obterNome(),
                        'O conteudo do atributo nome não é igual ao esperado'
        );
        
        $this->assertInternalType(
                            'string',
                            $nome,
                            'Atributo Nome não contém o valor string!'
        );
    }
    
    /**
     * @dataProvider dataProviderDocumentacao
     */
    public function testDefinirDataDeCriacao( Documentacao $doc ) {
        $data = new \DateTime();
        $retorno = $doc->definirDataCriacao($data);
        
        $this->assertSame(
                        $data,
                        $retorno->obterDataCriacao(),
                        'Data de Criação do Projeto é direfente da data esperada!'
        );
    }
    
    /**
     * @dataProvider dataProviderDocumentacao
     */
    public function testObterDataDeCriacao( Documentacao $doc ) {
        $data = new \DateTime();
        $retorno = $doc->definirDataCriacao($data);
        
        $this->assertSame(
                        $data,
                        $retorno->obterDataCriacao(),
                        'Data de criação do Projeto obtida não é a igual a esperada!'
        );
    }
    
    /**
     * @dataProvider dataProviderDocumentacao
     */
    public function testObterProjeto( Documentacao $doc ){
        $projeto = new \DocumentaSis\Core\Model\Business\Projeto();
        
        $retorno = $doc->definirProjeto( $projeto );
        
        $this->assertSame(
                        $projeto,
                        $retorno->obterProjeto(),
                        ' Objeto retornado não é p mesmo que o esperado'
        );
    }
    
    /**
     * @dataProvider dataProviderDocumentacao
     */
    public function testDefinirProjeto( Documentacao $doc ){
        
        $projeto = new \DocumentaSis\Core\Model\Business\Projeto();
        $retorno = $doc->definirProjeto( $projeto );
        
        $this->assertSame(
                        $doc,
                        $retorno,
                        'Objeto Documentação retornado não é o mesmo q o esperado.'
        );
        
        $this->assertSame(
                        $projeto,
                        $retorno->obterProjeto(),
                        'O conteudo do atributo nome não é igual ao esperado'
        );
    }
    
}