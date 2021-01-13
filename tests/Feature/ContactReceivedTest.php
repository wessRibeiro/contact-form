<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Created by Weslley Ribeiro
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Class ContactReceivedTest
 * @package Tests\Feature
 */
class ContactReceivedTest extends TestCase
{
    use RefreshDatabase;
    /**
     * assert all process of contacts received.
     *
     * @return void
     */
    public function testSendContactTest()
    {
        $response = $this->post('/api/v1/contactsReceived');
        $response->assertStatus(200);
    }
}
