<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/ping');

        $this->assertEquals(
            json_encode([
                'message' => 'ping',
                'timezone' => time(),
            ]), $this->response->getContent()
        );
    }

    public function testGetUsersSuccess()
    {
        $this->get('/api/v1/users');
        $this->assertEquals(
            json_encode( [
                [
                    'id' => 1,
                    'name' => 'Mario',
                ],[
                    'id' => 2,
                    'name' => 'Luigi',
                ]
            ]), $this->response->getContent()
        );
    }

    public function testUpdateUser()
    {
        $this->put('/api/v1/users');
        $this->assertEquals(
            json_encode( [
                'status' => 'success',
            ]), $this->response->getContent()
        );
    }

    public function testCreateUser()
    {
        $this->post('/api/v1/users');
        $this->assertEquals(
            json_encode( [
                'status' => 'success',
            ]), $this->response->getContent()
        );
    }
}
