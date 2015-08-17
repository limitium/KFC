<?php


namespace AppBundle\Tests\Controller;


use Symfony\Component\HttpFoundation\Request;

class ContactControllerTest extends DatabaseTest
{
    public function testGetByCriteria()
    {
        $criteriaJson = file_get_contents("contact-criteria.json");
        $criteriaArray = json_decode($criteriaJson, true);
        $this->client->request(
            'GET',
            '/api/contacts/search',
            $criteriaArray
        );
        $content = $this->client->getResponse()->getContent();
        $data = json_decode($content, true);
    }

    public function testGetMy()
    {
        $this->client->request(
            'GET',
            '/api/contacts/my',
            array()
        );
        $content = $this->client->getResponse()->getContent();
        $data = json_decode($content, true);
    }
}