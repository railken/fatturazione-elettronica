<?php

namespace Railken\FatturazioneElettronica\Tests;

use PHPUnit\Framework\TestCase;
use Railken\FatturazioneElettronica\Client;

class BaseTest extends TestCase
{
    public function testClient()
    {
        $client = new Client();
    }
}
