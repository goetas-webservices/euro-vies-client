<?php

namespace GoetasWebservices\Client\EuroVies\SoapParts;

/**
 * Class representing CheckVatOutput
 */
class CheckVatOutput
{

    /**
     * @property \GoetasWebservices\Client\EuroVies\Types\CheckVatResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\EuroVies\Types\CheckVatResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\EuroVies\Types\CheckVatResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\EuroVies\Types\CheckVatResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

