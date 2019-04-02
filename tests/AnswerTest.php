<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 2019-04-02
 * Time: 16:13
 */

namespace MjLiang\ApplicationSpecialist\Tests;

use MjLiang\ApplicationSpecialist\Answer;
use PHPUnit\Framework\TestCase;

class AnswerTest extends TestCase
{


    public function provider()
    {
        return [
            ['APPLICATION SPECIALISTS', 'tiacpniaipa'],
            ['', ''],
            ['APP', 'pa'],
            ['SPECIALISTS', 'sslies'],
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testStringProcess($a, $b)
    {
        $answer = new Answer();
        $this->assertEquals($b, $answer->stringProcess($a));
    }

    public function wrongTypesProvider()
    {
        return [
            [1000],
            [false],
            [12.3],
            [new \stdClass()],
            [null],
        ];
    }

    /**
     * @test
     * @dataProvider wrongTypesProvider
     */
    public function wrongInputType($a)
    {
        $this->expectException(\TypeError::class);
        $answer = new Answer();
        $answer->stringProcess($a);
    }
}
