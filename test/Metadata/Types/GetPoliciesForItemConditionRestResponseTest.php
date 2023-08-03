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

use DTS\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestResponse;

class GetPoliciesForItemConditionRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetPoliciesForItemConditionRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestResponse', $this->obj);
    }

    public function testExtendsItemConditionPolicyResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\ItemConditionPolicyResponse', $this->obj);
    }
}
