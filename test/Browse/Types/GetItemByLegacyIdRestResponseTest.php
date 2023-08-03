<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Browse\Types;

use DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestResponse;

class GetItemByLegacyIdRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetItemByLegacyIdRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestResponse', $this->obj);
    }

    public function testExtendsItem()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\Item', $this->obj);
    }
}
