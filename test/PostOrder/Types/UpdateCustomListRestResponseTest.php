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

use DTS\eBaySDK\PostOrder\Types\UpdateCustomListRestResponse;

class UpdateCustomListRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateCustomListRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\UpdateCustomListRestResponse', $this->obj);
    }

    public function testExtendsModifyCustomListResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ModifyCustomListResponse', $this->obj);
    }
}
