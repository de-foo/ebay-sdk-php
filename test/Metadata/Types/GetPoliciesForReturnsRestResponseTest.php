<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Metadata\Types;

use DTS\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestResponse;

class GetPoliciesForReturnsRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetPoliciesForReturnsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestResponse', $this->obj);
    }

    public function testExtendsReturnPolicyResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\ReturnPolicyResponse', $this->obj);
    }
}
