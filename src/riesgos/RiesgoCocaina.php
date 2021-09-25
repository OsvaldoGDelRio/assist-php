<?php
namespace src\riesgos;

use src\sustancias\Cocaina;

class RiesgoCocaina
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
     * @var \src\sustancias\Cocaina
     */
    private Cocaina $_cocaina;

    /**
     *
     * @param \src\sustancias\Cocaina $Cocaina
     */
    public function __construct(Cocaina $Cocaina)
    {
        $this->_cocaina = $Cocaina;
    }

    /**
     *
     * @return string
     */
    public function numero(): string
    {
        return
        $this->_cocaina->preguntaDos()->numero() +
        $this->_cocaina->preguntaTres()->numero() +
        $this->_cocaina->preguntaCuatro()->numero() +
        $this->_cocaina->preguntaCinco()->numero() +
        $this->_cocaina->preguntaSeis()->numero() +
        $this->_cocaina->preguntaSiete()->numero();
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
