<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Compliance\Enums;

use DTS\eBaySDK\Compliance\Enums\ComplianceTypeEnum;

class ComplianceTypeEnumTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ComplianceTypeEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Compliance\Enums\ComplianceTypeEnum', $this->obj);
    }
}
