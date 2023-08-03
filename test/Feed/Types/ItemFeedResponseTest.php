<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Feed\Types;

use DTS\eBaySDK\Feed\Types\ItemFeedResponse;

class ItemFeedResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemFeedResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Feed\Types\ItemFeedResponse', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
