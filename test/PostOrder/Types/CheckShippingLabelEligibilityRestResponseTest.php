<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\CheckShippingLabelEligibilityRestResponse;

class CheckShippingLabelEligibilityRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CheckShippingLabelEligibilityRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CheckShippingLabelEligibilityRestResponse', $this->obj);
    }

    public function testExtendsCheckLabelPrintEligibilityResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CheckLabelPrintEligibilityResponse', $this->obj);
    }
}
