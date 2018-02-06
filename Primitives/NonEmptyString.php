<?php
/**
 * Created by ahmad.
 * Project: primitives
 * Date: 2018-02-06
 * Time: 21:20
 */
declare(strict_types=1);

namespace Zenex\Primitives;


class NonEmptyString
{

    private $str;

    public function __construct(string $str)
    {
        if(empty($str))
        {
            throw new \InvalidArgumentException("Given string $str is empty", 1001);
        }
        $this->str = $str;
    }

    public function __toString()
    {
        return $this->str;
    }
}