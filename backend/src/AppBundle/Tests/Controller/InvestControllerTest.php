<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/6/2015
 * Time: 10:15 PM
 */

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InvestControllerTest extends WebTestCase
{

    public function setUp()
    {
        $this->client = static::createClient();
    }

    public function testGetInvestment()
    {
        $id = 'TKCISI6VIIZW';
        $expected = '{"spkPropertyid":"TKCISI6VIIZW","nameRus":"Test Object 1123 \u0418"}';
        $this->client->request('GET', '/api/investments/' . $id);
        $response = $this->client->getResponse();
        $content = $this->client->getResponse()->getContent();

        $this->assertJsonResponse($response, 200);
        $this->assertEquals($expected, $content);
    }


    protected function assertJsonResponse($response, $statusCode = 200)
    {
        $this->assertEquals(
            $statusCode, $response->getStatusCode(),
            $response->getContent()
        );
        $this->assertTrue(
            $response->headers->contains('Content-Type', 'application/json'),
            $response->headers
        );
    }
}