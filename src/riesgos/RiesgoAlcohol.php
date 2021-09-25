<?php
namespace src\riesgos;

use src\sustancias\Alcohol;

class RiesgoAlcohol
{
    /**
     *
     * @var array
     */
    private array $_intervencion = [
        '0-10' => 'No requiere intervención (consejo breve)',
        '11-26' => 'Requiere intervención breve',
        '27-99' => 'Requiere tratamiento más intensivo'
    ];

    /**
     *
     * @var array
     */
    private array $_riesgo = [
        '0-10' => 'Riesgo bajo',
        '11-26' => 'Riesgo moderado',
        '27-99' => 'Riesgo alto'
    ];

    /**
     *
     * @var \src\sustancias\Alcohol
     */
    private Alcohol $_alcohol;

    /**
     *
     * @param \src\sustancias\Alcohol $Alcohol
     */
    public function __construct(Alcohol $Alcohol)
    {
        $this->_alcohol = $Alcohol;
    }

    /**
     *
     * @return string
     */
    public function numero(): string
    {
        return
        $this->_alcohol->preguntaDos()->numero() +
        $this->_alcohol->preguntaTres()->numero() +
        $this->_alcohol->preguntaCuatro()->numero() +
        $this->_alcohol->preguntaCinco()->numero() +
        $this->_alcohol->preguntaSeis()->numero() +
        $this->_alcohol->preguntaSiete()->numero();
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
