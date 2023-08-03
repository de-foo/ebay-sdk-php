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

use DTS\eBaySDK\PostOrder\Types\CancelReturnRequestRestRequest;

class CancelReturnRequestRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CancelReturnRequestRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CancelReturnRequestRestRequest', $this->obj);
    }

    public function testExtendsCloseReturnRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CloseReturnRequest', $this->obj);
    }
}
