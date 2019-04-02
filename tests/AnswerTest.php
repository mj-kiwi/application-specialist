<?php
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
            ['SPECIALISTS', 'sslies']
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
}
