<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Enums;

use DTS\eBaySDK\Inventory\Enums\MarketplaceEnum;

class MarketplaceEnumTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new MarketplaceEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Enums\MarketplaceEnum', $this->obj);
    }
}
