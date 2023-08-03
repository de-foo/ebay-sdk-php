<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use DTS\eBaySDK\Trading\Types\MoveSellingManagerInventoryFolderRequestType;

class MoveSellingManagerInventoryFolderRequestTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MoveSellingManagerInventoryFolderRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\MoveSellingManagerInventoryFolderRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
