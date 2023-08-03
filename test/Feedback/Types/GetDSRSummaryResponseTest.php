<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Feedback\Types;

use DTS\eBaySDK\Feedback\Types\GetDSRSummaryResponse;

class GetDSRSummaryResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetDSRSummaryResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Feedback\Types\GetDSRSummaryResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Feedback\Types\BaseServiceResponse', $this->obj);
    }
}
