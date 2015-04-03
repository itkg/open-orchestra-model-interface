<?php

namespace OpenOrchestra\ModelInterface\Mapping\Annotations;

use Doctrine\Common\Annotations\Annotation;
use OpenOrchestra\ModelInterface\Exceptions\PropertyNotFoundException;
use OpenOrchestra\ModelInterface\Exceptions\MethodNotFoundException;

/**
 * @Annotation
 */
class Document extends Annotation
{
    protected $generatedField;
    protected $sourceField;
    protected $serviceName;
    protected $testMethod;

    /**
     * return service name
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * return test method
     *
     * @return string
     */
    public function getTestMethod()
    {
        return $this->testMethod;
    }

    /**
     * Get source method
     *
     * @param string $target
     *
     * @return string
     */
    public function getSource($target)
    {
        return $this->getMethod($target, 'sourceField');
    }

    /**
     * Get generated method
     *
     * @param string $target
     *
     * @return string
     */
    public function getGenerated($target)
    {
        return $this->getMethod($target, 'generatedField');
    }

    /**
     * @param string $target
     *
     * @return string
     * @throws MethodNotFoundException
     * @throws PropertyNotFoundException
     */
    public function setGenerated($target)
    {
        return $this->getMethod($target, 'generatedField', 'set');
    }

    /**
     * @param string $target
     * @param string $property
     * @param string $pre
     *
     * @return string
     * @throws MethodNotFoundException
     * @throws PropertyNotFoundException
     */
    protected function getMethod($target, $property, $pre = 'get')
    {
        if(isset($this->$property)){
            $method = $pre . ucfirst($this->$property);
            if(method_exists($target, $method)){
                return $method;
            }
            throw new MethodNotFoundException($method, get_class($target));
        }
        throw new PropertyNotFoundException($property, get_class($target));
    }
}
