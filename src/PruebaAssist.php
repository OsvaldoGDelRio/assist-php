<?php declare(strict_types=1);
namespace src;

use src\riesgos\Riesgos;
use src\sustancias\Sustancias;

/**
 * Clase de la prueba de ASSIST
 */
class PruebaAssist
{
    /**
     *
     * @var Sustancias
     */
    private Sustancias $_sustancias;
    /**
     * Clase de todos los riesgos calculados
     *
     * @var Riesgos
     */
    private Riesgos $_riesgos;

    public function __construct(Sustancias $sustancias, Riesgos $riesgos)
    {
        $this->_sustancias = $sustancias;
        $this->_riesgos = $riesgos;
    }

    /**
     *
     * @return \src\sustancias\Sustancias
     */
    public function sustancia(): Sustancias
    {
        return $this->_sustancias;
    }
    
    /**
    *
    * @return \src\riesgos\Riesgos
    */
    public function riesgo(): Riesgos
    {
        return $this->_riesgos;
    }
}
