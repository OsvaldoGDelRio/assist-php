<?php declare(strict_types=1);
namespace src\riesgos;

class Riesgos
{
    private RiesgoTabaco $_tabaco;

    private RiesgoAlcohol $_alcohol;

    private RiesgoCannabis $_cannabis;

    private RiesgoCocaina $_cocaina;

    private RiesgoAnfetamina $_anfetamina;

    private RiesgoInhalables $_inhalables;

    private RiesgoSedantes $_sedantes;

    private RiesgoAlucinogenos $_alucinogenos;

    private RiesgoOpiaceos $_opiaceos;

    private RiesgoOtros $_otros;

    public function __construct(
        RiesgoTabaco $riesgoTabaco,
        RiesgoAlcohol $riesgoAlcohol,
        RiesgoCannabis $riesgoCannabis,
        RiesgoCocaina $riesgoCocaina,
        RiesgoAnfetamina $riesgoAnfetamina,
        RiesgoInhalables $riesgoInhalables,
        RiesgoSedantes $riesgoSedantes,
        RiesgoAlucinogenos $riesgoAlucinogenos,
        RiesgoOpiaceos $riesgoOpiaceos,
        RiesgoOtros $riesgoOtros
    ) {
        $this->_tabaco = $riesgoTabaco;
        $this->_alcohol = $riesgoAlcohol;
        $this->_cannabis = $riesgoCannabis;
        $this->_cocaina = $riesgoCocaina;
        $this->_anfetamina = $riesgoAnfetamina;
        $this->_inhalables = $riesgoInhalables;
        $this->_sedantes = $riesgoSedantes;
        $this->_alucinogenos = $riesgoAlucinogenos;
        $this->_opiaceos = $riesgoOpiaceos;
        $this->_otros = $riesgoOtros;
    }

    public function tabaco(): RiesgoTabaco
    {
        return $this->_tabaco;
    }
    
    public function alcohol(): RiesgoAlcohol
    {
        return $this->_alcohol;
    }

    public function cannabis(): RiesgoCannabis
    {
        return $this->_cannabis;
    }

    public function cocaina(): RiesgoCocaina
    {
        return $this->_cocaina;
    }

    public function anfetamina(): RiesgoAnfetamina
    {
        return $this->_anfetamina;
    }

    public function inhalables(): RiesgoInhalables
    {
        return $this->_inhalables;
    }

    public function sedantes(): RiesgoSedantes
    {
        return $this->_sedantes;
    }

    public function alucinogenos(): RiesgoAlucinogenos
    {
        return $this->_alucinogenos;
    }

    public function opiaceos(): RiesgoOpiaceos
    {
        return $this->_opiaceos;
    }

    public function otros(): RiesgoOtros
    {
        return $this->_otros;
    }
}
