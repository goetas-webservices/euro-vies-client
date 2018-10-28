<?php

namespace GoetasWebservices\Client\EuroVies\Types;

/**
 * Class representing CheckVatApproxResponse
 */
class CheckVatApproxResponse
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
     * @property string $traderName
     */
    private $traderName = null;

    /**
     * @property string $traderCompanyType
     */
    private $traderCompanyType = null;

    /**
     * @property string $traderAddress
     */
    private $traderAddress = null;

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
     * @property string $traderNameMatch
     */
    private $traderNameMatch = null;

    /**
     * @property string $traderCompanyTypeMatch
     */
    private $traderCompanyTypeMatch = null;

    /**
     * @property string $traderStreetMatch
     */
    private $traderStreetMatch = null;

    /**
     * @property string $traderPostcodeMatch
     */
    private $traderPostcodeMatch = null;

    /**
     * @property string $traderCityMatch
     */
    private $traderCityMatch = null;

    /**
     * @property string $requestIdentifier
     */
    private $requestIdentifier = null;

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
     * Gets as traderAddress
     *
     * @return string
     */
    public function getTraderAddress()
    {
        return $this->traderAddress;
    }

    /**
     * Sets a new traderAddress
     *
     * @param string $traderAddress
     * @return self
     */
    public function setTraderAddress($traderAddress)
    {
        $this->traderAddress = $traderAddress;
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
     * Gets as traderNameMatch
     *
     * @return string
     */
    public function getTraderNameMatch()
    {
        return $this->traderNameMatch;
    }

    /**
     * Sets a new traderNameMatch
     *
     * @param string $traderNameMatch
     * @return self
     */
    public function setTraderNameMatch($traderNameMatch)
    {
        $this->traderNameMatch = $traderNameMatch;
        return $this;
    }

    /**
     * Gets as traderCompanyTypeMatch
     *
     * @return string
     */
    public function getTraderCompanyTypeMatch()
    {
        return $this->traderCompanyTypeMatch;
    }

    /**
     * Sets a new traderCompanyTypeMatch
     *
     * @param string $traderCompanyTypeMatch
     * @return self
     */
    public function setTraderCompanyTypeMatch($traderCompanyTypeMatch)
    {
        $this->traderCompanyTypeMatch = $traderCompanyTypeMatch;
        return $this;
    }

    /**
     * Gets as traderStreetMatch
     *
     * @return string
     */
    public function getTraderStreetMatch()
    {
        return $this->traderStreetMatch;
    }

    /**
     * Sets a new traderStreetMatch
     *
     * @param string $traderStreetMatch
     * @return self
     */
    public function setTraderStreetMatch($traderStreetMatch)
    {
        $this->traderStreetMatch = $traderStreetMatch;
        return $this;
    }

    /**
     * Gets as traderPostcodeMatch
     *
     * @return string
     */
    public function getTraderPostcodeMatch()
    {
        return $this->traderPostcodeMatch;
    }

    /**
     * Sets a new traderPostcodeMatch
     *
     * @param string $traderPostcodeMatch
     * @return self
     */
    public function setTraderPostcodeMatch($traderPostcodeMatch)
    {
        $this->traderPostcodeMatch = $traderPostcodeMatch;
        return $this;
    }

    /**
     * Gets as traderCityMatch
     *
     * @return string
     */
    public function getTraderCityMatch()
    {
        return $this->traderCityMatch;
    }

    /**
     * Sets a new traderCityMatch
     *
     * @param string $traderCityMatch
     * @return self
     */
    public function setTraderCityMatch($traderCityMatch)
    {
        $this->traderCityMatch = $traderCityMatch;
        return $this;
    }

    /**
     * Gets as requestIdentifier
     *
     * @return string
     */
    public function getRequestIdentifier()
    {
        return $this->requestIdentifier;
    }

    /**
     * Sets a new requestIdentifier
     *
     * @param string $requestIdentifier
     * @return self
     */
    public function setRequestIdentifier($requestIdentifier)
    {
        $this->requestIdentifier = $requestIdentifier;
        return $this;
    }


}

