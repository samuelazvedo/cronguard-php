<?php
namespace Cronguard\Tests;
use PHPUnit\Framework\TestCase;
use Cronguard\Client;
class ExampleTest extends TestCase
{
    public function test_can_instantiate_client()
    {
        $client = new Client('fake-api-key');
        $this->assertInstanceOf(Client::class, $client);
    }
}
