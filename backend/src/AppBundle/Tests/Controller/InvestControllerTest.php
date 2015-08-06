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
    public function testGetInvestments()
    {
        $client = static::createClient();

        $result = $client->request('GET', '/api/investments');

    }


}