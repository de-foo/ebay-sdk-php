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

use DTS\eBaySDK\PostOrder\Types\UploadReturnDraftFileRestResponse;

class UploadReturnDraftFileRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UploadReturnDraftFileRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\UploadReturnDraftFileRestResponse', $this->obj);
    }

    public function testExtendsUploadFileResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\UploadFileResponse', $this->obj);
    }
}
