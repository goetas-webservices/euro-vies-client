<?php

namespace GoetasWebservices\Client\EuroVies\Types;

/**
 * Class representing CheckVatApprox
 */
class CheckVatApprox
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
     * @property string $traderName
     */
    private $traderName = null;

    /**
     * @property string $traderCompanyType
     */
    private $traderCompanyType = null;

    /**
     * @property string $traderStreet
     */
    private $traderStreet = null;

    /**
     * @property string $traderPostcode
     */
    private $traderPostcode = null;

    /**
     * @property string $traderCity
     */
    private $traderCity = null;

    /**
     * @property string $requesterCountryCode
     */
    private $requesterCountryCode = null;

    /**
     * @property string $requesterVatNumber
     */
    private $requesterVatNumber = null;

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
     * Gets as traderName
     *
     * @return string
     */
    public function getTraderName()
    {
        return $this->traderName;
    }

    /**
     * Sets a new traderName
     *
     * @param string $traderName
     * @return self
     */
    public function setTraderName($traderName)
    {
        $this->traderName = $traderName;
        return $this;
    }

    /**
     * Gets as traderCompanyType
     *
     * @return string
     */
    public function getTraderCompanyType()
    {
        return $this->traderCompanyType;
    }

    /**
     * Sets a new traderCompanyType
     *
     * @param string $traderCompanyType
     * @return self
     */
    public function setTraderCompanyType($traderCompanyType)
    {
        $this->traderCompanyType = $traderCompanyType;
        return $this;
    }

    /**
     * Gets as traderStreet
     *
     * @return string
     */
    public function getTraderStreet()
    {
        return $this->traderStreet;
    }

    /**
     * Sets a new traderStreet
     *
     * @param string $traderStreet
     * @return self
     */
    public function setTraderStreet($traderStreet)
    {
        $this->traderStreet = $traderStreet;
        return $this;
    }

    /**
     * Gets as traderPostcode
     *
     * @return string
     */
    public function getTraderPostcode()
    {
        return $this->traderPostcode;
    }

    /**
     * Sets a new traderPostcode
     *
     * @param string $traderPostcode
     * @return self
     */
    public function setTraderPostcode($traderPostcode)
    {
        $this->traderPostcode = $traderPostcode;
        return $this;
    }

    /**
     * Gets as traderCity
     *
     * @return string
     */
    public function getTraderCity()
    {
        return $this->traderCity;
    }

    /**
     * Sets a new traderCity
     *
     * @param string $traderCity
     * @return self
     */
    public function setTraderCity($traderCity)
    {
        $this->traderCity = $traderCity;
        return $this;
    }

    /**
     * Gets as requesterCountryCode
     *
     * @return string
     */
    public function getRequesterCountryCode()
    {
        return $this->requesterCountryCode;
    }

    /**
     * Sets a new requesterCountryCode
     *
     * @param string $requesterCountryCode
     * @return self
     */
    public function setRequesterCountryCode($requesterCountryCode)
    {
        $this->requesterCountryCode = $requesterCountryCode;
        return $this;
    }

    /**
     * Gets as requesterVatNumber
     *
     * @return string
     */
    public function getRequesterVatNumber()
    {
        return $this->requesterVatNumber;
    }

    /**
     * Sets a new requesterVatNumber
     *
     * @param string $requesterVatNumber
     * @return self
     */
    public function setRequesterVatNumber($requesterVatNumber)
    {
        $this->requesterVatNumber = $requesterVatNumber;
        return $this;
    }


}

