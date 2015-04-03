<?php

namespace OpenOrchestra\ModelInterface\Tests\Mapping\Annotations;

use Phake;
use OpenOrchestra\ModelInterface\Mapping\Annotations\Document;

/**
 * Class DocumentTest
 */
class DocumentTest extends \PHPUnit_Framework_TestCase
{
    protected $node;

    /**
     * setUp
     */
    public function setUp()
    {
        $this->node = Phake::mock('OpenOrchestra\ModelInterface\Model\NodeInterface');
    }

    /**
     * @param array  $parameters
     * @param string $expectedResult
     *
     * @dataProvider provideSource
     */
    public function testGetSource($parameters, $expectedResult)
    {
        $document = new Document($parameters);
        $result = $document->getSource($this->node);
        $this->assertSame($result, $expectedResult);
    }

    /**
     * @param array  $parameters
     * @param string $exception
     *
     * @dataProvider provideExceptionSource
     */
    public function testExceptionGetSource($parameters, $exception)
    {
        $document = new Document($parameters);
        $this->setExpectedException($exception);
        $document->getSource($this->node);
    }

    /**
     * @param array  $parameters
     * @param string $expectedResult
     *
     * @dataProvider provideGetGenerated
     */
    public function testGetGenerated($parameters, $expectedResult)
    {
        $document = new Document($parameters);
        $result = $document->getGenerated($this->node);
        $this->assertSame($result, $expectedResult);
    }

    /**
     * @param array  $parameters
     * @param string $exception
     *
     * @dataProvider provideExceptionGetGenerated
     */
    public function testExceptionGetGenerated($parameters, $exception)
    {
        $document = new Document($parameters);
        $this->setExpectedException($exception);
        $document->getGenerated($this->node);
    }

    /**
     * @param array  $parameters
     * @param string $expectedResult
     *
     * @dataProvider provideSetGenerated
     */
    public function testSetGenerated($parameters, $expectedResult)
    {
        $document = new Document($parameters);
        $result = $document->setGenerated($this->node);
        $this->assertSame($result, $expectedResult);
    }

    /**
     * @param array  $parameters
     * @param string $exception
     *
     * @dataProvider provideExceptionSetGenerated
     */
    public function testExceptionSetGenerated($parameters, $exception)
    {
        $document = new Document($parameters);
        $this->setExpectedException($exception);
        $document->setGenerated($this->node);
    }

    /**
     * @return array
     */
    public function provideSource()
    {
        $parameters0 = array('sourceField' => 'name');

        return array(
            array($parameters0, 'getName'),
        );
    }

    /**
     * @return array
     */
    public function provideExceptionSource()
    {
        $parameters0 = array();

        $parameters1 = array('sourceField' => 'fakeproperty');

        return array(
            array($parameters0, 'OpenOrchestra\ModelInterface\Exceptions\PropertyNotFoundException'),
            array($parameters1, 'OpenOrchestra\ModelInterface\Exceptions\MethodNotFoundException'),
        );
    }

    /**
     * @return array
     */
    public function provideGetGenerated()
    {
        $parameters0 = array('generatedField' => 'nodeId');

        return array(
            array($parameters0, 'getNodeId'),
        );
    }

    /**
     * @return array
     */
    public function provideExceptionGetGenerated()
    {
        $parameters0 = array();

        $parameters1 = array('generatedField' => 'fakeproperty');

        return array(
            array($parameters0, 'OpenOrchestra\ModelInterface\Exceptions\PropertyNotFoundException'),
            array($parameters1, 'OpenOrchestra\ModelInterface\Exceptions\MethodNotFoundException'),
        );
    }

    /**
     * @return array
     */
    public function provideSetGenerated()
    {
        $parameters0 = array('generatedField' => 'nodeId');

        return array(
            array($parameters0, 'setNodeId'),
        );
    }

    /**
     * @return array
     */
    public function provideExceptionSetGenerated()
    {
        $parameters0 = array();

        $parameters1 = array('generatedField' => 'fakeproperty');

        return array(
            array($parameters0, 'OpenOrchestra\ModelInterface\Exceptions\PropertyNotFoundException'),
            array($parameters1, 'OpenOrchestra\ModelInterface\Exceptions\MethodNotFoundException'),
        );
    }
}
