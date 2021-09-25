<?php
namespace src\riesgos;

use src\sustancias\Cannabis;

class RiesgoCannabis
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
     * @var \src\sustancias\Cannabis
     */
    private Cannabis $_cannabis;

    /**
     *
     * @param \src\sustancias\Cannabis $Cannabis
     */
    public function __construct(Cannabis $Cannabis)
    {
        $this->_cannabis = $Cannabis;
    }

    /**
     *
     * @return string
     */
    public function numero(): string
    {
        return
        $this->_cannabis->preguntaDos()->numero() +
        $this->_cannabis->preguntaTres()->numero() +
        $this->_cannabis->preguntaCuatro()->numero() +
        $this->_cannabis->preguntaCinco()->numero() +
        $this->_cannabis->preguntaSeis()->numero() +
        $this->_cannabis->preguntaSiete()->numero();
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
