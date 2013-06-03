<?php
/**
 * User: gpawlik
 * To change this template use File | Settings | File Templates.
 */
namespace TheSupport\Test\Utils\ArrayatorDecorator;

use TheSupport\Utils\Iterator2ArrayDecorator;

class Iterator2ArrayDecoratorTest extends \PHPUnit_Framework_TestCase {

    public function test_arrayator_instance()
    {
        $arrayator = new Iterator2ArrayDecorator(new \MultipleIterator());
        $this->assertInstanceOf('TheSupport\Utils\Iterator2ArrayDecorator', $arrayator);
    }

    public function test_should_have_to_array_method()
    {
        $obj = new \stdClass();
        $obj->one = "1";
        $obj->two = "2";

        $arrayator = new Iterator2ArrayDecorator(new \ArrayIterator($obj));

        $this->assertEquals(
            array("one" => 1, "two" => 2),
            $arrayator->toArray()
        );

    }
}
