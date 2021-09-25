<?php
namespace src\riesgos;

use src\sustancias\Otros;

class RiesgoOtros
{
    /**
     *
     * @var array
     */
    private array $_intervencion = [
        '0-3' => 'No requiere intervención (consejo breve)',
        '4-26' => 'Requiere intervención breve',
        '27-99' => 'Requiere tratamiento más intensivo'
    ];

    /**
     *
     * @var array
     */
    private array $_riesgo = [
        '0-3' => 'Riesgo bajo',
        '4-26' => 'Riesgo moderado',
        '27-99' => 'Riesgo alto'
    ];

    /**
     *
     * @var \src\sustancias\Otros
     */
    private Otros $_otros;

    /**
     *
     * @param \src\sustancias\Otros $Otros
     */
    public function __construct(Otros $Otros)
    {
        $this->_otros = $Otros;
    }

    /**
     *
     * @return string
     */
    public function numero(): string
    {
        return
        $this->_otros->preguntaDos()->numero() +
        $this->_otros->preguntaTres()->numero() +
        $this->_otros->preguntaCuatro()->numero() +
        $this->_otros->preguntaCinco()->numero() +
        $this->_otros->preguntaSeis()->numero() +
        $this->_otros->preguntaSiete()->numero();
    }

    /**
     *
     * @return string
     */
    public function texto(): string
    {
        return $this->setRiesgo($this->numero(), $this->_riesgo);
    }

    /**
     *
     * @return string
     */
    public function intervencion(): string
    {
        return $this->setRiesgo($this->numero(), $this->_intervencion);
    }

    /**
     *
     * @param string $riesgo
     * @param array $comparador
     *
     * @return string
     */
    private function setRiesgo(string $riesgo, array $comparador): string
    {
        foreach ($comparador as $key => $value) {
            $val = explode('-', $key);
            
            if ($riesgo >= $val[0] && $riesgo <= $val[1]) {
                $riesgo = $value;
            }
        }

        return $riesgo;
    }
}
