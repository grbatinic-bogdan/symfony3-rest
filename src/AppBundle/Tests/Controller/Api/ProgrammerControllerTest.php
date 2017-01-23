<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 12/12/16
 * Time: 4:42 PM
 */

namespace AppBundle\Tests\Controller\Api;


use AppBundle\Tests\ApiTestCase;
use Psr\Http\Message\ResponseInterface;

class ProgrammerControllerTest extends ApiTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->createUser('weaverryan');
    }


    public function testPOST()
    {
        $nickname = 'ObjectOrienter';
        $data = array(
            'nickname' => $nickname,
            'avatarNumber' => 5,
            'tagLine' => 'a test dev!'
        );

        // 1) Create a programmer resource
        /** @var ResponseInterface $response */
        $response = $this->client->post('/api/programmers', [
            'body' => json_encode($data)
        ]);

        //$this->assertEquals(201, $response->getStatusCode());

        $this->assertStringEndsWith('/api/programmers/ObjectOrienter', $response->getHeader('Location')[0]);
        $finishedData = json_decode($response->getBody(true), true);
        $this->assertArrayHasKey('nickname', $finishedData);
        $this->assertEquals('ObjectOrienter', $finishedData['nickname']);
    }

    public function testGETProgrammer()
    {
        $this->createProgrammer(array(
            'nickname' => 'UnitTester',
            'avatarNumber' => 3,
        ));
        $response = $this->client->get('/api/programmers/UnitTester');
        $this->assertEquals(200, $response->getStatusCode());
        $this->asserter()->assertResponsePropertiesExist($response, array(
            'nickname',
            'avatarNumber',
            'powerLevel',
            'tagLine'
        ));
        $this->asserter()->assertResponsePropertyEquals($response, 'nickname', 'UnitTester');
    }

    public function testGETProgrammersCollection()
    {
        $this->createProgrammer(array(
            'nickname' => 'UnitTester',
            'avatarNumber' => 3,
        ));
        $this->createProgrammer(array(
            'nickname' => 'CowboyCoder',
            'avatarNumber' => 5,
        ));
        $response = $this->client->get('/api/programmers');
        $this->assertEquals(200, $response->getStatusCode());
        $this->asserter()->assertResponsePropertyIsArray($response, 'items');
        $this->asserter()->assertResponsePropertyCount($response, 'items', 2);
        $this->asserter()->assertResponsePropertyEquals($response, 'items[1].nickname', 'CowboyCoder');
    }

    public function testGETProgrammersCollectionPaginated()
    {

        for ($i = 0; $i < 25; $i++) {
            $this->createProgrammer(array(
                'nickname' => 'Programmer'.$i,
                'avatarNumber' => 3,
            ));
        }

        $response = $this->client->get('/api/programmers');
        $this->assertEquals(200, $response->getStatusCode());
        $this->asserter()->assertResponsePropertyEquals(
            $response,
            'items[5].nickname',
            'Programmer5'
        );
        $this->asserter()->assertResponsePropertyEquals(
            $response,
            'count',
            '10'
        );
        $this->asserter()->assertResponsePropertyEquals(
            $response,
            'total',
            '25'
        );
        $this->asserter()->assertResponsePropertyExists(
            $response,
            '_links.next'
        );

        $nextUrl = $this->asserter()->readResponseProperty($response, '_links.next');
        $response = $this->client->get($nextUrl);

        $this->assertEquals(200, $response->getStatusCode());
        $this->asserter()->assertResponsePropertyEquals(
            $response,
            'items[5].nickname',
            'Programmer15'
        );
        $this->asserter()->assertResponsePropertyEquals(
            $response,
            'count',
            10
        );


        $lastUrl = $this->asserter()->readResponseProperty($response, '_links.last');
        $response = $this->client->get($lastUrl);

        $this->assertEquals(200, $response->getStatusCode());
        $this->asserter()->assertResponsePropertyEquals(
            $response,
            'items[4].nickname',
            'Programmer24'
        );
        $this->asserter()->assertResponsePropertyDoesNotExist($response, 'items[5].nickname');
        $this->asserter()->assertResponsePropertyEquals(
            $response,
            'count',
            5
        );
    }

    public function testPUTProgrammer()
    {
        $this->createProgrammer(array(
            'nickname' => 'CowboyCoder',
            'avatarNumber' => 5,
            'tagLine' => 'foo',
        ));
        $data = array(
            'nickname' => 'CowgirlCoder',
            'avatarNumber' => 2,
            'tagLine' => 'foo',
        );
        $response = $this->client->put('/api/programmers/CowboyCoder', [
            'body' => json_encode($data)
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->asserter()->assertResponsePropertyEquals($response, 'avatarNumber', 2);
        $this->asserter()->assertResponsePropertyEquals($response, 'nickname', 'CowgirlCoder');
    }

    public function testDELETEProgrammer()
    {
        $this->createProgrammer(array(
            'nickname' => 'UnitTester',
            'avatarNumber' => 3,
        ));
        $response = $this->client->delete('/api/programmers/UnitTester');
        $this->assertEquals(204, $response->getStatusCode());
    }

    public function testPATCHProgrammer()
    {
        $this->createProgrammer(array(
            'nickname' => 'CowboyCoder',
            'avatarNumber' => 5,
            'tagLine' => 'foo',
            'powerLevel' => 4,
        ));
        $data = array(
            'tagLine' => 'bar',
        );
        $response = $this->client->patch('/api/programmers/CowboyCoder', [
            'body' => json_encode($data)
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->asserter()->assertResponsePropertyEquals($response, 'avatarNumber', 5);
        $this->asserter()->assertResponsePropertyEquals($response, 'tagLine', 'bar');
    }

    public function testValidationErrors()
    {
        $data = array(
            'avatarNumber' => 5,
            'tagLine' => 'a test dev!'
        );

        // 1) Create a programmer resource
        /** @var ResponseInterface $response */
        $response = $this->client->post('/api/programmers', [
            'body' => json_encode($data),
            'http_errors' => false
        ]);

        $this->assertEquals('application/problem+json', $response->getHeader('Content-Type')[0]);
        $this->assertEquals(400, $response->getStatusCode());

        $this->asserter()->assertResponsePropertiesExist($response, array(
            'type',
            'title',
            'errors'
        ));
        $this->asserter()->assertResponsePropertyExists($response, 'errors.nickname');
        $this->asserter()->assertResponsePropertyEquals($response, 'errors.nickname[0]', 'Please enter a clever nickname');
        $this->asserter()->assertResponsePropertyDoesNotExist($response, 'errors.avatarNumber');
    }

    public function testInvalidJson()
    {
        $invalidBody = <<<EOF
{
    "nickname": "JohnnyRobot",
    "avatarNumber" : "2
    "tagLine": "I'm from a test!"
}
EOF;
        $response = $this->client->post('/api/programmers', [
            'body' => $invalidBody,
            'http_errors' => false
        ]);

        $this->assertEquals(400, $response->getStatusCode());
        $this->asserter()->assertResponsePropertyContains($response, 'type', 'invalid_body_format');
    }

    public function test404Exception()
    {
        $response = $this->client->get('/api/programmers/fake', array(
            'http_errors' => false
        ));

        $this->assertEquals(404, $response->getStatusCode());
        $this->assertEquals('application/problem+json', $response->getHeader('Content-Type')[0]);

        $this->asserter()->assertResponsePropertyEquals($response, 'type', 'about:blank');
        $this->asserter()->assertResponsePropertyEquals($response, 'title', 'Not Found');
        $this->asserter()->assertResponsePropertyEquals($response, 'detail', 'No programmer found with nickname "fake"');
    }
}