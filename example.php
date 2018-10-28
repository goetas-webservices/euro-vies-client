<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\EuroVies\SoapContainer;
use GoetasWebservices\Client\EuroVies\SoapStubs\CheckVatPortType;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();
$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client CheckVatPortType
 */
$client = $factory->getClient('http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl','checkVatPort', 'checkVatService');


$result = $client->checkVat("DE", "123456789");

var_dump($result);
