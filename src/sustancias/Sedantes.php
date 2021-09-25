<?php declare(strict_types=1);

namespace src\sustancias;

use src\interfaces\PreguntaInterface;

/**
 * Clase Sendantes
 */
class Sedantes
{
    /**
     *
     * @var PreguntaInterface
     */
    private PreguntaInterface $_preguntaUno;
    /**
     *
     * @var PreguntaInterface
     */
    private PreguntaInterface $_preguntaDos;
    /**
     *
     * @var PreguntaInterface
     */
    private PreguntaInterface $_preguntaTres;
    /**
     *
     * @var PreguntaInterface
     */
    private PreguntaInterface $_preguntaCuatro;

    /**
     *
     * @var PreguntaInterface
     */

    private PreguntaInterface $_preguntaCinco;
    /**
     *
     * @var PreguntaInterface
     */
    private PreguntaInterface $_preguntaSeis;
    /**
     *
     * @var PreguntaInterface
     */
    private PreguntaInterface $_preguntaSiete;
    
    /**
     *
     * @param PreguntaInterface $preguntaUno
     * @param PreguntaInterface $preguntaDos
     * @param PreguntaInterface $preguntaTres
     * @param PreguntaInterface $preguntaCuatro
     * @param PreguntaInterface $preguntaCinco
     * @param PreguntaInterface $preguntaSeis
     * @param PreguntaInterface $preguntaSiete
     */
    public function __construct(
        PreguntaInterface $preguntaUno,
        PreguntaInterface $preguntaDos,
        PreguntaInterface $preguntaTres,
        PreguntaInterface $preguntaCuatro,
        PreguntaInterface $preguntaCinco,
        PreguntaInterface $preguntaSeis,
        PreguntaInterface $preguntaSiete
    ) {
        $this->_preguntaUno = $preguntaUno;
        $this->_preguntaDos = $preguntaDos;
        $this->_preguntaTres = $preguntaTres;
        $this->_preguntaCuatro = $preguntaCuatro;
        $this->_preguntaCinco = $preguntaCinco;
        $this->_preguntaSeis = $preguntaSeis;
        $this->_preguntaSiete = $preguntaSiete;
    }

    /**
     *
     * @return PreguntaInterface
     */
    public function preguntaUno(): PreguntaInterface
    {
        return $this->_preguntaUno;
    }
    
    /**
     *
     * @return PreguntaInterface
     */
    public function preguntaDos(): PreguntaInterface
    {
        return $this->_preguntaDos;
    }

    /**
     *
     * @return PreguntaInterface
     */
    public function preguntaTres(): PreguntaInterface
    {
        return $this->_preguntaTres;
    }

    /**
     *
     * @return PreguntaInterface
     */
    public function preguntaCuatro(): PreguntaInterface
    {
        return $this->_preguntaCuatro;
    }

    /**
     *
     * @return PreguntaInterface
     */
    public function preguntaCinco(): PreguntaInterface
    {
        return $this->_preguntaCinco;
    }

    /**
     *
     * @return PreguntaInterface
     */
    public function preguntaSeis(): PreguntaInterface
    {
        return $this->_preguntaSeis;
    }

    /**
     *
     * @return PreguntaInterface
     */
    public function preguntaSiete(): PreguntaInterface
    {
        return $this->_preguntaSiete;
    }
}
