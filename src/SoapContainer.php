<?php

namespace GoetasWebservices\Client\EuroVies;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class SoapContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'goetas_webservices.soap_client.metadata_reader' => 'getGoetasWebservices_SoapClient_MetadataReaderService',
        );
        $this->privates = array(
            'goetas_webservices.soap_client.metadata_reader' => true,
        );

        $this->aliases = array();
    }

    public function getRemovedIds()
    {
        return array(
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'goetas_webservices.soap_client.metadata.generator' => true,
            'goetas_webservices.soap_client.metadata_loader.array' => true,
            'goetas_webservices.soap_client.metadata_loader.dev' => true,
            'goetas_webservices.soap_client.metadata_reader' => true,
            'goetas_webservices.soap_client.stub.class_writer' => true,
            'goetas_webservices.soap_client.stub.client_generator' => true,
            'goetas_webservices.wsdl2php.converter.jms' => true,
            'goetas_webservices.wsdl2php.converter.php' => true,
            'goetas_webservices.wsdl2php.event_dispatcher' => true,
            'goetas_webservices.wsdl2php.soap_reader' => true,
            'goetas_webservices.wsdl2php.wsdl_reader' => true,
            'goetas_webservices.xsd2php.class_writer.php' => true,
            'goetas_webservices.xsd2php.converter.jms' => true,
            'goetas_webservices.xsd2php.converter.php' => true,
            'goetas_webservices.xsd2php.naming_convention' => true,
            'goetas_webservices.xsd2php.naming_convention.long' => true,
            'goetas_webservices.xsd2php.naming_convention.short' => true,
            'goetas_webservices.xsd2php.path_generator.jms' => true,
            'goetas_webservices.xsd2php.path_generator.jms.psr4' => true,
            'goetas_webservices.xsd2php.path_generator.php' => true,
            'goetas_webservices.xsd2php.path_generator.php.psr4' => true,
            'goetas_webservices.xsd2php.php.class_generator' => true,
            'goetas_webservices.xsd2php.schema_reader' => true,
            'goetas_webservices.xsd2php.writer.jms' => true,
            'goetas_webservices.xsd2php.writer.php' => true,
            'logger' => true,
        );
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * Gets the private 'goetas_webservices.soap_client.metadata_reader' shared service.
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader
     */
    protected function getGoetasWebservices_SoapClient_MetadataReaderService()
    {
        return $this->services['goetas_webservices.soap_client.metadata_reader'] = new \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader($this->parameters['goetas_webservices.soap_client.metadata']);
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array();
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'goetas_webservices.soap_client.metadata' => array(
                'http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl' => array(
                    'checkVatService' => array(
                        'checkVatPort' => array(
                            'operations' => array(
                                'checkVat' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'checkVat',
                                    'method' => 'checkVat',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Messages\\CheckVatInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Headers\\CheckVatInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapParts\\CheckVatInput',
                                        'parts' => array(
                                            'parameters' => 'CheckVat',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Messages\\CheckVatOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Headers\\CheckVatOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapParts\\CheckVatOutput',
                                        'parts' => array(
                                            'parameters' => 'CheckVatResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'checkVatApprox' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'checkVatApprox',
                                    'method' => 'checkVatApprox',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Messages\\CheckVatApproxInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Headers\\CheckVatApproxInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapParts\\CheckVatApproxInput',
                                        'parts' => array(
                                            'parameters' => 'CheckVatApprox',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Messages\\CheckVatApproxOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Headers\\CheckVatApproxOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapParts\\CheckVatApproxOutput',
                                        'parts' => array(
                                            'parameters' => 'CheckVatApproxResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'http://ec.europa.eu/taxation_customs/vies/services/checkVatService',
                        ),
                    ),
                ),
            ),
            'goetas_webservices.soap_client.config' => array(
                'namespaces' => array(
                    'urn:ec.europa.eu:taxud:vies:services:checkVat' => 'GoetasWebservices\\Client\\EuroVies',
                    'urn:ec.europa.eu:taxud:vies:services:checkVat:types' => 'GoetasWebservices\\Client\\EuroVies\\Types',
                ),
                'destinations_php' => array(
                    'GoetasWebservices\\Client\\EuroVies' => 'src',
                ),
                'destinations_jms' => array(
                    'GoetasWebservices\\Client\\EuroVies' => 'metadata',
                ),
                'metadata' => array(
                    'http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl' => NULL,
                ),
                'alternative_endpoints' => array(

                ),
                'unwrap_returns' => false,
                'naming_strategy' => 'short',
                'path_generator' => 'psr4',
                'known_locations' => array(

                ),
                'aliases' => array(

                ),
                'headers' => '\\SoapEnvelope\\Headers',
                'parts' => '\\SoapEnvelope\\Parts',
                'messages' => '\\SoapEnvelope\\Messages',
            ),
            'goetas_webservices.soap_client.unwrap_returns' => false,
        );
    }
}
