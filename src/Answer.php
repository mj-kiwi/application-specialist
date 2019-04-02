<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 2019-04-02
 * Time: 16:04
 */

namespace MjLiang\ApplicationSpecialist;

class Answer
{
    /**
     * @param string $input
     * @return string
     */
    public function stringProcess(string $input) : string
    {
        $return = '';
        $input = str_replace(' ', '', $input);
        $split = str_split($input, 2);

        foreach ($split as $item) {
            $return = ($item[0] ?? '') . $return;
        }

        return strtolower($return);
    }
}
