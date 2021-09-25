<?php
namespace src\preguntas;

class Consume
{
    /**
     *
     * @var PreguntaUno
     */
    private PreguntaUno $_consume;

    /**
     *
     * @param PreguntaUno $preguntaUno
     */
    public function __construct(PreguntaUno $preguntaUno)
    {
        $this->_consume = $preguntaUno;
    }

    /**
     *
     * @return boolean
     */
    public function consume(): bool
    {
        if ($this->_consume->numero() == '1') {
            return true;
        }

        return false;
    }
}
