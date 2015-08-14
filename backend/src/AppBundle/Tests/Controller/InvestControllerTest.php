<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/6/2015
 * Time: 10:15 PM
 */

namespace AppBundle\Tests\Controller;


class InvestControllerTest extends DatabaseTest
{
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

    public function testGetInvestmentsByCriteria()
    {
        $criteriaJson = file_get_contents("investment-criteria.json");
        $this->client->request(
            'GET',
            '/api/investments',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            $criteriaJson
        );
        $response = $this->client->getResponse();
        $content = $this->client->getResponse()->getContent();
        $data = json_decode($content, true);
    }

    public function testPostInvestment()
    {
        $investmentJson = file_get_contents("investment.json");

        $this->client->request(
            'POST',
            '/api/investments',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            $investmentJson
        );
        $response = $this->client->getResponse();
        $content = $this->client->getResponse()->getContent();
        $data = json_decode($content, true);
        if ($data['error']) {
            $this->fail($data['error']['exception'][0]['message']);
        }
        if (count($data['errors']['errors']) > 0) {
            $this->fail($data['errors']['errors'][0]);
        }
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