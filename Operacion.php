<?php

abstract class Operacion
{
    protected int|string $op1;
    protected int|string $op2;
    protected string $operador;
    const OPERACION_REAL = 1;
    const OPERACION_RACIONAL = 2;
    const ERROR = 0;

    static public function tipoOperacion(string $cadena): int
    {

        //expresiones

        $expresion_Racional = "[0-9]\/[1-9]";
        $expresion_Real = "([0-9])(\.[1-9])?";
        $expresion_Entero = "[0-9]+";

        //operadores
        $operador_Real = "+"; //"+\-\*\/]/";
        $operador_Racional = "+"; //"/[\+\-\*\:]/";

        //operaciones
        $operacion_Real = "$expresion_Real$operador_Real$expresion_Real";
        $operacion_Racional = "$expresion_Racional$operador_Racional$expresion_Racional";
        $operacion_Entero = "$expresion_Entero$operador_Racional$expresion_Entero";
        $operacion_Racional_2 = "$expresion_Entero$operador_Racional$expresion_Racional";

        //validar cadena racionales o reales
       $retorno= match (1) {
            preg_match("/$operacion_Real/", $cadena) => self::OPERACION_REAL,
            preg_match("/$operacion_Entero/", $cadena) => self::OPERACION_REAL,
            preg_match("/$operacion_Racional/", $cadena) => self::OPERACION_RACIONAL,
            preg_match("/$operacion_Racional_2/", $cadena) => self::OPERACION_RACIONAL
        };
    return $retorno;
    }

    public function __construct(string $cadena)
    {
        $this->operador=$this->buscar_operador($cadena);
        $numero = explode($this->operador,$cadena);
        $this->op1=$numero[0];
        $this->op2=$numero[1];
    }

    private function buscar_operador($cadena){
        if (str_contains($cadena,'+'))
            return '+';
        if (str_contains($cadena,'-'))
            return '-';
        if (str_contains($cadena,'*'))
            return '*';
        if (str_contains($cadena,':'))
            return ':';

        return '';
    }
    abstract function operar();
}