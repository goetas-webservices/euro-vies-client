<?php

namespace GoetasWebservices\Client\EuroVies\Types;

/**
 * Class representing CheckVat
 */
class CheckVat
{

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $vatNumber
     */
    private $vatNumber = null;

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as vatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * Sets a new vatNumber
     *
     * @param string $vatNumber
     * @return self
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }


}

