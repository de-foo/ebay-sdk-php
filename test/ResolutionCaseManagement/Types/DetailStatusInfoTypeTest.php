<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ResolutionCaseManagement\Types;

use DTS\eBaySDK\ResolutionCaseManagement\Types\DetailStatusInfoType;

class DetailStatusInfoTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DetailStatusInfoType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\DetailStatusInfoType', $this->obj);
    }

    public function testExtendsEnumerationDetailType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\EnumerationDetailType', $this->obj);
    }
}
