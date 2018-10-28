<?php

namespace GoetasWebservices\Client\EuroVies\Types;

/**
 * Class representing CheckVatResponse
 */
class CheckVatResponse
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
     * @property \DateTime $requestDate
     */
    private $requestDate = null;

    /**
     * @property bool $valid
     */
    private $valid = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $address
     */
    private $address = null;

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

    /**
     * Gets as requestDate
     *
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Sets a new requestDate
     *
     * @param \DateTime $requestDate
     * @return self
     */
    public function setRequestDate(\DateTime $requestDate)
    {
        $this->requestDate = $requestDate;
        return $this;
    }

    /**
     * Gets as valid
     *
     * @return bool
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Sets a new valid
     *
     * @param bool $valid
     * @return self
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


}

