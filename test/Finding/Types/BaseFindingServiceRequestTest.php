<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Finding\Types;

use DTS\eBaySDK\Finding\Types\BaseFindingServiceRequest;

class BaseFindingServiceRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BaseFindingServiceRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BaseFindingServiceRequest', $this->obj);
    }

    public function testExtendsBestMatchFindingServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BestMatchFindingServiceRequest', $this->obj);
    }
}
