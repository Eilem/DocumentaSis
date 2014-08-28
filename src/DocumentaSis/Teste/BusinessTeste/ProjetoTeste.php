<?php

/**
 * @package Teste\BusinessTeste
 */
namespace Teste\BusinessTeste;




        //assertInternalType('int' $x->getid);
        //assertInternalTyp
        //e('string' $x->getNome());
        
        #se forem iguais
        //assertEquals( param, valor q sera comparado);


/**
 * Classe de teste responsável por testar(garantir) os métodos da Business de Projeto
 */
class ProjetoTeste extends \PHPUnit_Framework_TestCase{
        
    protected $projeto;    
    protected $documentacaoDeSoftware;    
    protected $documentacaoDeTeste;
    
    /**
     * verifica se a classe que deseja testar existe
     */
    public function testarSeAClasseExiste() {
        $classe = '\DocumentaSis\Core\Model\Business\Projeto';
        $this->assertTrue(
                class_exists($classe), 
                'Classe não existe'.$classe
        );
    }
    
    /**
     * "Pré-condições" para realização do Teste
     */
    public function setUp() {
        $this->projeto = new \DocumentaSis\Core\Model\Business\Projeto();
        
        #criando documentações que serão utilizadas no testo do Projeto
        $this->documentacaoDeSoftware = new \DocumentaSis\Core\Model\Business\Software();
        $this->documentacaoDeTeste = new \DocumentaSis\Core\Model\Business\Teste();
    }  
    
    /**
     * Testa se o objeto atualmente instanciado é uma instância do esperado
     */
    public function testeInstanciarProjeto() {
        
        $class = '\DocumentaSis\Core\Model\Business\Projeto';
        
        #retorna uma mensagem de erro se a instancia atual for diferente do esperado
        $this->assertInstanceOf(
                $esperado = $class, 
                $atual = $this->projeto,
                'Este objeto não é uma instância da Classe'
        );
    } 
 

    ############################################
    # relacionamento com Documentação de Teste #
    ############################################
    
    /**
     * Teste que define uma documentaçaõ de teste para o  projeto
     */
    public function testarDefinirDocumentacaoDeTeste() {
        
        $this->assertInstanceOf(
                '\DocumentaSis\Core\Model\Business\Teste', 
                $this->documentacaoDeTeste
        );
        
        $this->projeto->definirDocumentacaoTeste($this->documentacaoDeTeste);
    }
    
    /**
     * Teste de falha se a documentação de teste não for uma instancia de Teste
     */
    public function testarFailDefinirDocumentacaoDeTeste() {
        
        $this->assertNotInstanceOf(
                '\DocumentaSis\Core\Model\Business\Teste', 
                $this->documentacaoDeTeste
        );
        
       // $this->projeto->definirDocumentacaoTeste($this->documentacaoDeTeste);
    }
    
    /**
     * obter a Documentacao de Teste definida no Método
     * @depends testarDefinirDocumetacaoDeTeste
     */
    public function testarObterDocumentacaoDeTeste(){
        $docTeste = $this->projeto->obterDocumentacaoTeste();
        
        $this->assertEquals(
                $this->projeto->definirDocumentacaoTeste($this->documentacaoDeTeste), 
                $docTeste
        );
        
        var_dump($docTeste);
        die;
        
    }

    
    public function testarFalhaDefinirMaisDeDocumentacaoDeTesteParaProjeto(){
        
        #tentar atribuir mais de uma Documentaçaõ de TEste para o mesmo projeto
    }    
    
    
    ###############################################
    # relacionamento com Documentação de SofTware #
    ###############################################
    
    /**
     * definir Documentação de Software do projeto
     */
    public function testarDefinirDocumentacaoDeSoftware() {
        
        $this->assertInstanceOf(
                '\DocumentaSis\Core\Model\Business\Software', 
                $this->documentacaoDeSoftware
        );
        
        $this->projeto->definirDocumentacaoTeste($this->documentacaoDeSoftware);   
    }
    
    /**
     * Se não receber uma documentaçaõ de SOftware ]
     * @todo o q é esperado  q retorne se não for uma doc de software??
     */
    public function testarFalhaDefinirDocumentacaoDeSoftware(){
        
    }
    
    /**
     *  inserir mais de uma documentaçaõ de software para um projeto
     */
    public function testarFalhaDefinirMaisDeDocumentacaoDeSoftwareParaProjeto(){
        
        #tentar atribuir mais de uma Documentaçaõ de TEste para o mesmo projeto
    }




    
    public function testarObterColecaoDeDocumentacao() {
        
        #deve obter todas as documentaões q o projeto possui
        #lembrando
        
        #projeto possui somente uma doc de cada tipo
        #atualmente 28-08-2014 só existem dois tipos de documentação: teste e Software
        
        
        $colDocumentacao = $this->projeto->obterColDocumentacao();
        
        $this->assertCount(
                2, 
                array($colDocumentacao),
                'possui mais de duas documentacoes'
        );
        
        #???
    }












































    /**
     * 
     */
    public function testarDefinirNomeComConteudoDeTexto() {
        $nome = "Nome do Projeto";
        $this->projeto->definirNome($nome);
    }
    
    
    
    
    public function testarObterNomeComConteudoDeTexto() {
        
    }
    
    
    #não pode ser nulo, o q fazer 
    #pq assertNull afirma q é nulo, mas este capo não pode ser nulo..
    public function testarDefinirNomeComConteudoNulo() {
        
        $this->assertNotNull(
                $this->projeto->obterNome(),
                'Nome não pode ser nulo!'
        );
    }
    
    
    
    
//    public function testarRRRRSeTipoDoObjetoInstanciadoEIgualAClasse() {
//        
//        $classe = '\DocumentaSis\Core\Model\Business\Projeto';
//        $this->testarSeTipoDoObjetoInstanciadoEIgualAClasse($classe, $this->projeto);
//    }
    


 
    
    /**
     * "Destrói" as pré condições definidas em SetUp
     * utilizado para "limpar" a memória para evitar erros em outras classes de 
     * testes que se utilizem de instãncias da mesma classe, porem com valores diferentes
     */
    public function tearDown() {
                
        $this->projeto = NULL;
        $this->documentacaoDeSoftware = NULL;
        $this->documentacaoDeTeste = NULL;
    }
    
}