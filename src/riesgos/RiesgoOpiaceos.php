<?php
namespace src\riesgos;

use src\sustancias\Opiaceos;

class RiesgoOpiaceos
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
     * @var \src\sustancias\Opiaceos
     */
    private Opiaceos $_opiaceos;

    /**
     *
     * @param \src\sustancias\Opiaceos $Opiaceos
     */
    public function __construct(Opiaceos $Opiaceos)
    {
        $this->_opiaceos = $Opiaceos;
    }

    /**
     *
     * @return string
     */
    public function numero(): string
    {
        return
        $this->_opiaceos->preguntaDos()->numero() +
        $this->_opiaceos->preguntaTres()->numero() +
        $this->_opiaceos->preguntaCuatro()->numero() +
        $this->_opiaceos->preguntaCinco()->numero() +
        $this->_opiaceos->preguntaSeis()->numero() +
        $this->_opiaceos->preguntaSiete()->numero();
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
