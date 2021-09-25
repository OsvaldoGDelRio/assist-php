<?php
namespace src\riesgos;

use src\sustancias\Anfetamina;

class RiesgoAnfetamina
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
     * @var \src\sustancias\Anfetamina
     */
    private Anfetamina $_anfetamina;

    /**
     *
     * @param \src\sustancias\Anfetamina $Anfetamina
     */
    public function __construct(Anfetamina $Anfetamina)
    {
        $this->_anfetamina = $Anfetamina;
    }

    /**
     *
     * @return string
     */
    public function numero(): string
    {
        return
        $this->_anfetamina->preguntaDos()->numero() +
        $this->_anfetamina->preguntaTres()->numero() +
        $this->_anfetamina->preguntaCuatro()->numero() +
        $this->_anfetamina->preguntaCinco()->numero() +
        $this->_anfetamina->preguntaSeis()->numero() +
        $this->_anfetamina->preguntaSiete()->numero();
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
