<?php declare(strict_types=1);
namespace src\sustancias;

class Sustancias
{
    private Tabaco $_tabaco;

    private Alcohol $_alcohol;

    private Cannabis $_cannabis;

    private Cocaina $_cocaina;

    private Anfetamina $_anfetamina;

    private Inhalables $_inhalables;

    private Sedantes $_sedantes;

    private Alucinogenos $_alucinogenos;

    private Opiaceos $_opiaceos;

    private Otros $_otros;

    public function __construct(
        Tabaco $tabaco,
        Alcohol $alcohol,
        Cannabis $cannabis,
        Cocaina $cocaina,
        Anfetamina $anfetamina,
        Inhalables $inhalables,
        Sedantes $sedantes,
        Alucinogenos $alucinogenos,
        Opiaceos $opiaceos,
        Otros $otros
    ) {
        $this->_tabaco = $tabaco;
        $this->_alcohol = $alcohol;
        $this->_cannabis = $cannabis;
        $this->_cocaina = $cocaina;
        $this->_anfetamina = $anfetamina;
        $this->_inhalables = $inhalables;
        $this->_sedantes = $sedantes;
        $this->_alucinogenos = $alucinogenos;
        $this->_opiaceos = $opiaceos;
        $this->_otros = $otros;
    }

    public function tabaco(): Tabaco
    {
        return $this->_tabaco;
    }

    public function alcohol(): Alcohol
    {
        return $this->_alcohol;
    }

    public function cannabis(): Cannabis
    {
        return $this->_cannabis;
    }

    public function cocaina(): Cocaina
    {
        return $this->_cocaina;
    }

    public function anfetamina(): Anfetamina
    {
        return $this->_anfetamina;
    }

    public function inhalables(): Inhalables
    {
        return $this->_inhalables;
    }

    public function sedantes(): Sedantes
    {
        return $this->_sedantes;
    }

    public function alucinogenos(): Alucinogenos
    {
        return $this->_alucinogenos;
    }

    public function opiaceos(): Opiaceos
    {
        return $this->_opiaceos;
    }

    public function otros(): Otros
    {
        return $this->_otros;
    }
}
