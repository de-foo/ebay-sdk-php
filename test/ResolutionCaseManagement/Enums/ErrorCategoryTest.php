<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ResolutionCaseManagement\Enums;

use DTS\eBaySDK\ResolutionCaseManagement\Enums\ErrorCategory;

class ErrorCategoryTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new ErrorCategory();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\ErrorCategory', $this->obj);
    }
}
