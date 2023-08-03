<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Shopping\Types;

use DTS\eBaySDK\Shopping\Types\DistanceType;

class DistanceTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DistanceType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\DistanceType', $this->obj);
    }

    public function testExtendsDoubleType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\DoubleType', $this->obj);
    }
}
