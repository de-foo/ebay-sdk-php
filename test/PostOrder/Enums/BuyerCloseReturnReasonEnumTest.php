<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Enums;

use DTS\eBaySDK\PostOrder\Enums\BuyerCloseReturnReasonEnum;

class BuyerCloseReturnReasonEnumTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerCloseReturnReasonEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Enums\BuyerCloseReturnReasonEnum', $this->obj);
    }
}
