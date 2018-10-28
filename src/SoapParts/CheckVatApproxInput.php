<?php

namespace GoetasWebservices\Client\EuroVies\SoapParts;

/**
 * Class representing CheckVatApproxInput
 */
class CheckVatApproxInput
{

    /**
     * @property \GoetasWebservices\Client\EuroVies\Types\CheckVatApprox $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\EuroVies\Types\CheckVatApprox
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\EuroVies\Types\CheckVatApprox $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\EuroVies\Types\CheckVatApprox $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

