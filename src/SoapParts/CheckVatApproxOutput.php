<?php

namespace GoetasWebservices\Client\EuroVies\SoapParts;

/**
 * Class representing CheckVatApproxOutput
 */
class CheckVatApproxOutput
{

    /**
     * @property \GoetasWebservices\Client\EuroVies\Types\CheckVatApproxResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\EuroVies\Types\CheckVatApproxResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\EuroVies\Types\CheckVatApproxResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\EuroVies\Types\CheckVatApproxResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

