# VIES SOAP PHP client

This project provides a SOAP client for the European VAT Information Exchange System

More info can be found visiting [http://ec.europa.eu/taxation_customs/vies/faq.html](http://ec.europa.eu/taxation_customs/vies/faq.html) 

## Installing

The recommended way to install `goetas-webservices/euro-vies-client` is using [Composer](https://getcomposer.org/), just run:

```yaml
composer require goetas-webservices/euro-vies-client
```
## Features

- Pure PHP, no dependencies on `ext-soap`
- Complete IDE type hinting support
- PSR-7 HTTP messaging compatible
- Multi HTTP client (guzzle, buzz, curl, react)
- No WSDL/XSD parsing on production
- Extensible (event listeners support)

## Usage

```php
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

```

## Note 

The code in this project is provided under the 
[MIT](https://opensource.org/licenses/MIT) license. 
For professional support 
contact [goetas@gmail.com](mailto:goetas@gmail.com) 
or visit [https://www.goetas.com](https://www.goetas.com)
