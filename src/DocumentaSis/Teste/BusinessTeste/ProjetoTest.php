<?php

/**
 * @package Teste\BusinessTeste
 */
namespace Teste\BusinessTeste;

/**
 * Classe de teste responsável por testar(garantir) os métodos da Business de Projeto
 */
class ProjetoTest extends \PHPUnit_Framework_TestCase{
    
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
       
    public function testVerificarExistenciaDoMetodoDefinirNome() {
        #verifica se metodo existe na classe Projeto
        $this->assertTrue(
                        method_exists($this->projeto, 'definirNome'),
                        'Método definirNome não localizado ou não existe no objeto Projeto'
        );
    }
    
    public function testVerificarExistenciaDoMetodoObterNome() {
        $this->assertTrue(
                        method_exists($this->projeto, 'obterNome'),
                        'Método obterNome não localizado ou não existe no objeto Projeto'
        );
    }
    
    public function testVerificarExistenciaDoMetodoDefinirDescricao() {
         $this->assertTrue(
                        method_exists($this->projeto, 'definirDescricao'),
                        'Método definirDescricao não localizado ou não existe no objeto Projeto'
        );     
    }
    
    public function testVerificarExistenciaDoMetodoObterDescricao() {
         $this->assertTrue(
                        method_exists($this->projeto, 'obterDescricao'),
                        'Método obterDescricao não localizado ou não existe no objeto Projeto'
        );     
    }
    
    public function testVerificarExistenciaDoMetodoDefinirDocumentacaoDeTeste() {
        $this->assertTrue(
                        method_exists($this->projeto, 'definirDocumentacaoDeTeste'),
                        'Método definirDocumentacaoDeTeste não localizado ou não existe no objeto Projeto'
        );
    }
    
    public function testVerificarExistenciaDoMetodoObterDocumentacaoDeTeste() {
        $this->assertTrue(
                        method_exists($this->projeto, 'obterDocumentacaoDeTeste'),
                        'Método obterDocumentacaoDeTeste não localizado ou não existe no objeto Projeto'
        );
    }
    
    public function testVerificarExistenciaDoMetodoDefinirDocumentacaoDeSoftware() {
        $this->assertTrue(
                        method_exists($this->projeto, 'definirDocumentacaoDeSoftware'),
                        'Método definirDocumentacaoDeSoftware não localizado ou não existe no objeto Projeto'
        );
    }
    
    public function testVerificarExistenciaDoMetodoObterDocumentacaoDeSoftware() {
        $this->assertTrue(
                        method_exists($this->projeto, 'obterDocumentacaoDeSoftware'),
                        'Método obterDocumentacaoDeSoftware não localizado ou não existe no objeto Projeto'
        );
    }
    
    public function testVerificarExistenciaDoMetodoObterDataCriacao() {
        $this->assertTrue(
                        method_exists($this->projeto, 'obterDataCriacao'),
                        'Método definirDataCriacao não localizado ou não existente em Projeto'
        );
    }
    
    public function testVerificarExistenciaDoMetododefinirDataCriacao() {
        $this->assertTrue(
                        method_exists($this->projeto, 'definirDataCriacao'),
                        'Método definirDataCriacao não localizado ou não existente em Projeto'
        );
    }
    
    public function testVerificarExistenciaDoMetodoObterColDocumentacao() {
        $this->assertTrue(
                        method_exists($this->projeto, 'obterColDocumentacao'),
                        'Método obterColDocumentacao não localizado ou não existe no objeto Projeto'
        );
    }
    
    /**
     * Teste para definir o nome de um projeto e se o valor 
     * @depends testVerificarExistenciaDoMetodoDefinirNome
     */
    public function testDefinirNomeProjeto() {        
        
        $nome = "Nome do Projeto";
        $objetoRetornado = $this->projeto->definirNome( $nome );
        
        #verifica se objeto retornado é o mesmo objeto passado
        $this->assertSame(
                        $this->projeto,
                        $objetoRetornado,
                        'Valor do Objeto retornado ao definir nome é diferente do objeto esperado!'
        );
        
        # verifica se nome passado é igual ao nome que está no objeto        
        $this->assertEquals( 
                        $nome,
                        $objetoRetornado->obterNome(),
                        'Atributo Nome do projeto não contém valor igual ao valor nome esperado!'
        );        
        
        $this->assertAttributeEquals(
                                    $nome,
                                    'nome',
                                    $this->projeto,                                    
                                    'Atributo Nome do Projeto não foi definido corretamente'
        );
        
        #verifica se a variavel póssui o tipo esperado 
        $this->assertInternalType(
                            'string',
                            $nome,
                            'Atributo Nome não contém o valor string!'
        );
    }
    
    /**
     * @depends testVerificarExistenciaDoMetodoObterNome
     */
    public function testObterNome() {
        
        $nome = "Nome do Projeto";
        $objetoRetornado = $this->projeto->definirNome( $nome );
        $this->assertEquals( 
                        $nome,
                        $objetoRetornado->obterNome(),
                        'valor do Atributo Nome do objeto retornado não contém o valor definido!'
        );
    }
    
    /**
     * 
     * @depends testVerificarExistenciaDoMetodoObterNome
     *
     * @todo verificar se em definirNome lançará uma excesão com nome nulo
     * @todo implementar
     */
    public function testExceptionDefinirNomeDeProjetoNulo() {
        $nome = NULL;
        $this->projeto->definirNome($nome);
        
        $this->markTestIncomplete('Teste definir nome nulo ainda não foi implementado');
    }
    
    /**
     * @depends testVerificarExistenciaDoMetodoDefinirNome
     */
    public function testDefinirDescricaoDoProjeto() {
        
        $descricao = "Descrevendo um projeto: Como o Projeto deve ser desenvolvido...etc...";
        $retorno = $this->projeto->definirNome( $descricao );
        
        $this->assertEquals( 
                        $descricao,
                        $retorno->obterNome(),
                        'Atributo Descrição do projeto não contém o mesmo do valor que lhe foi atribuído!'
        ); 
          
        $this->assertSame(
                        $this->projeto,
                        $retorno,
                        'Valor do Objeto retornado ao definir nome é diferente do objeto esperado!'
        );
    }    
    
    /**
     * @depends testVerificarExistenciaDoMetodoDefinirNome
     */
    public function testDefinirDescricaoComValorNull() {
        
        $descricao = NULL;
        $retorno = $this->projeto->definirNome( $descricao );
        
        $this->assertNull(
                        $retorno->obterDescricao(),
                        'Valor da Descrição não é nulo!'
        );
    }
        
    /**
     * @depends testVerificarExistenciaDoMetodoObterNome
     */
    public function testObterDescricao() {
        
        $descricao = "Descrevendo meu Projeto de documentação";
        $objetoRetornado = $this->projeto->definirDescricao($descricao);
        $this->assertEquals( 
                        $descricao,
                        $objetoRetornado->obterDescricao(),
                        'valor do Atributo Descrição do Projeto retornado não é igual ao valor definido!'
        );
    }    
    
    /**
     * @depends testVerificarExistenciaDoMetodoDefinirDocumentacaoDeTeste
     */
    public function testDefinirDocumentacaoDeTeste() {
        
        $teste = new \DocumentaSis\Core\Model\Business\Teste();
        $retorno = $this->projeto->definirDocumentacaoDeTeste($teste);
        
        $this->assertSame(
                        $retorno->obterDocumentacaoDeTeste(),
                        $teste,
                        'Documentação de teste definida diferente da instância o objeto documentação de teste que consta no Projeto!'
        );
        
        $this->assertSame(
                        $this->projeto,
                        $retorno,
                        'Objeto Projeto retornado ao definirDocumentacaoDeTeste é diferente do objeto esperado !'
        ); 
    }
    
    /**
     * @depends testVerificarExistenciaDoMetodoObterDocumentacaoDeTeste
     */
    public function testObterDocumentacaoDeTeste() {
        
        $teste = new \DocumentaSis\Core\Model\Business\Teste();
        $retorno = $this->projeto->definirDocumentacaoDeTeste($teste);
        
        $this->assertSame(
                        $teste,
                        $retorno->obterDocumentacaoDeTeste(),
                        'Objeto teste diferente do objeto definido !'
        );
    }
    
    /**
     * @depends testVerificarExistenciaDoMetodoObterDocumentacaoDeSoftware
     */
    public function testDefinirDocumentacaoDeSoftware() {
        
        $software = new \DocumentaSis\Core\Model\Business\Software();
        $retorno = $this->projeto->definirDocumentacaoDeSoftware($software);
        
        $this->assertSame(
                        $retorno->obterDocumentacaoDeSoftware(),
                        $software,
                        'Documentação de Software definida é diferente da instância do objeto que consta no Projeto!'
        );
        
        $this->assertSame(
                        $this->projeto,
                        $retorno,
                        'Objeto Projeto retornado ao definirDocumentacaoDeSoftware é diferente do objeto esperado !'
        ); 
    }
    
    /**
     * @depends testVerificarExistenciaDoMetodoObterDocumentacaoDeSoftware
     */
    public function testObterDocumentacaoDeSoftware() {
        
        $software = new \DocumentaSis\Core\Model\Business\Software();
        $retorno = $this->projeto->definirDocumentacaoDeSoftware($software);
        
        $this->assertSame(
                        $software,
                        $retorno->obterDocumentacaoDeSoftware(),
                        'Intância de Software definida em projeto é diferente da esperada!'
        );
    }
    
    /**
     * @depends testVerificarExistenciaDoMetodoObterDocumentacaoDeSoftware
     */
    public function testObterColDocumentacaoDoProjeto() {
        
        $docTeste = new \DocumentaSis\Core\Model\Business\Teste();
        $docSoftware = new \DocumentaSis\Core\Model\Business\Software();
        $documentacaoDoProjeto = array(
            $docTeste,
            $docSoftware
        );
        
        $this->projeto->definirDocumentacaoDeTeste($docTeste);
        $this->projeto->definirDocumentacaoDeSoftware($docSoftware);
        
        $colDocumentacao = $this->projeto->obterColDocumentacao();
        
        $this->assertEquals(
                            $documentacaoDoProjeto,
                            $colDocumentacao, 
                            'coleção do projeto não é igual aos dados definidos!'
        );
    } 
    
    /**
     * @depends testVerificarExistenciaDoMetodoObterDocumentacaoDeSoftware
     */
    public function testObterColDocumentacaoVaziaDoProjeto() {
        
        #objeto projeto doi instanciado vazio, porém nenhum 
        $this->assertEmpty($this->projeto->obterColDocumentacao(), 
                           'Coleçaõ de Documentação do Projeto não está vazia. '
        );
    }    
    
    public function testDefinirDataDeCriacao() {
        $data = new \DateTime();
        $retorno = $this->projeto->definirDataCriacao($data);
        
        $this->assertSame(
                        $data,
                        $retorno->obterDataCriacao(),
                        'Data de Criação do Projeto é direfente da data esperada!'
        );
    }
    
    public function testObterDataDeCriacao() {
        $data = new \DateTime();
        $retorno = $this->projeto->definirDataCriacao($data);
        
        $this->assertSame(
                        $data,
                        $retorno->obterDataCriacao(),
                        'Data de criação do Projeto obtida não é a igual a esperada!'
        );
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testFailedDefinirDataDeCriacaoMaiorQueDataAtual(){
        
        $this->projeto->definirDataCriacao(new \DateTime('+1day'));
                
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