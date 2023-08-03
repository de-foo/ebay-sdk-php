<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantData\Types;

use DTS\eBaySDK\MerchantData\Types\RefundLineType;

class RefundLineTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundLineType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\RefundLineType', $this->obj);
    }

    public function testExtendsAmountType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AmountType', $this->obj);
    }
}
