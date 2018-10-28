<?php

namespace GoetasWebservices\Client\EuroVies\SoapParts;

/**
 * Class representing CheckVatInput
 */
class CheckVatInput
{

    /**
     * @property \GoetasWebservices\Client\EuroVies\Types\CheckVat $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\EuroVies\Types\CheckVat
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\EuroVies\Types\CheckVat $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\EuroVies\Types\CheckVat $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

