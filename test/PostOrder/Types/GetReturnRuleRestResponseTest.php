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

use DTS\eBaySDK\PostOrder\Types\GetReturnRuleRestResponse;

class GetReturnRuleRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnRuleRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnRuleRestResponse', $this->obj);
    }

    public function testExtendsGetDispositionRuleDetailResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetDispositionRuleDetailResponse', $this->obj);
    }
}
