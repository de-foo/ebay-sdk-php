<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ProductMetadata\Types;

use DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesResponse;

class GetCompatibilitySearchValuesResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetCompatibilitySearchValuesResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\BaseServiceResponse', $this->obj);
    }
}
