<?php

namespace app\webservice;


class Correios{

    const URL_BASE = 'http://ws.correios.com.br';

    /**
     * @var string
     */
    const SERVICO_SEDEX = '04014';
    const SERVICO_SEDEX_12 = '04782';
    const SERVICO_SEDEX_10 = '04790';
    const SERVICO_SEDEX_HOJE = '04804';
    const SERVICO_PAC = '04510';

    const FORMATO_CAIXA_PACOTE = 1;
    const FORMATO_ROLO_PRISMA = 2;
    
    const FORMATO_ENVELOPE = 3;
    
    /**
     * @var string
     */

    private $codigoEmpresa;


    /**
     * @var string
     */

     private $senhaEmpresa = '';

     /**
      * Metodos responsaveis pela definição dos dados de contrato de webservice dos Correios
      * @param string 
      * @param string
      */

    public function __construct($codigoEmpresa = '', $senhaEmpresa = ''){
        $this->codigoEmpresa = $codigoEmpresa;
        $this->senhaEmpresa = $senhaEmpresa;

    }
/**
 * @param string $codigoServico
 * @param string $cepOrigem
 *  @param string $cepDestino
 * @param float $peso
 * @param int $formato
 * @param int $largura
 * @param int $diametro
 * @param boolean $maoPropria
 * @param int $valorDeclarado
 * @param boolean $avisoRecebimento
 * @return object
 */
    public function calcularFrete($codigoServico, 
    $cepOrigem, 
    $cepDestino, 
    $peso, 
    $formato, 
    $comprimento, 
    $altura, 
    $largura, 
    $diametro = 0, 
    $maoPropria = false, 
    $valorDeclarado = 0, 
    $avisoRecebimento = false){

       $parametros = [
        'nCdEmpresa' => $this->codigoEmpresa,
        'sDsSenha' => $this->senhaEmpresa,
        'nCdServico' => $codigoServico,
        'sCepOrigem' => $cepOrigem, 
        'sCepDestino' => $cepDestino,
        'nVlPeso' => $peso,
        'nCdFormato' => $formato,
        'nVlComprimento' => $comprimento, 
        'nVlAltura' => $altura, 
        'nVlLargura' => $largura,
        'nVlDiametro' => $diametro,
        'sCdMaoPropria' => $maoPropria  ? 'S' : 'N',
        'nVlValorDeclarado' => $valorDeclarado,
        'sCdAvisoRecebimento' => $avisoRecebimento ? 'S' : 'N',
        'StrRetorno' => 'xml'

       ];

;
    
       $query = http_build_query($parametros);

       $resultado = $this->get('/calculador/CalcPrecoPrazo.aspx?' .$query);

       return $resultado ? $resultado->cServico :  null;
        
   
}

/** 
 * @param string $resource 
 * @return object
*/


    public function get($resource){
        var_dump($resource);
        $endpoint = self::URL_BASE.$resource;
    
        $curl = curl_init();

        curl_setopt_array($curl,[
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);


        $response = curl_exec($curl);


        curl_close($curl);

       

        return strlen($response) ? simplexml_load_string($response) : null;
    }
}
?>