<?php declare(strict_types=1);
namespace src\preguntas;

use InvalidArgumentException;
use src\interfaces\PreguntaInterface;

class Pregunta implements PreguntaInterface
{
    /**
     *
     * @var array
     */
    private array $_valores;

    /**
     *
     * @var string
     */
    private string $_valor;
    
    /**
     *
     * @var string
     */
    private string $_texto;

    /**
     *
     * @var string
     */
    private string $_numero;

    /**
     *
     * @var Consume
     */
    private Consume $_consume;

    /**
     *
     * @param string $valor
     * @param array $valoresPermitidos
     * @param Consume $consume
     */
    public function __construct(string $valor, array $valoresPermitidos, Consume $consume)
    {
        $this->_consume = $consume;
        $this->_valores = $valoresPermitidos;
        $this->_valor = $this->setValor($valor);
        $this->_texto = $this->valorTexto();
        $this->_numero = $this->valorNumero();
    }

    /**
     *
     * @return string
     */
    public function texto(): string
    {
        return $this->_texto;
    }

    /**
     *
     * @return string
     */
    public function numero(): string
    {
        return $this->_numero;
    }
    
    /**
     *
     * @return string
     */
    private function valorTexto(): string
    {
        if (is_numeric($this->_valor)) {
            return $this->_valores[$this->_valor];
        }

        return $this->_valor;
    }

    /**
     *
     * @return string
     */
    private function valorNumero(): string
    {
        if (!is_numeric($this->_valor)) {
            return (string) array_search($this->_valor, $this->_valores);
        }

        return $this->_valor;
    }

    /**
     * Define si lo que recibió la clase es el valor número aceptado o texto
     *
     * @param string $string
     *
     * @return string
     */
    private function setValor(string $string): string
    {
        if (!$this->_consume->consume()) {
            return '0';
        }

        if (array_key_exists($string, $this->_valores)) {
            return $string;
        }

        if (in_array($string, $this->_valores)) {
            return $string;
        }

        throw new InvalidArgumentException("El tipo de valor para la pregunta es incorrecto");
    }
}
