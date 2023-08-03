<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BulkDataExchange\Types;

use DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse;

class DeleteRecurringJobResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new DeleteRecurringJobResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\BaseServiceResponse', $this->obj);
    }
}
