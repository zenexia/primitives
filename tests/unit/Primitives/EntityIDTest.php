<?php
/**
 * Created by ahmad.
 * Project: primitives
 * Date: 2018-02-06
 * Time: 21:24
 */
namespace Zenex\Tests\Primitives;

use PHPUnit\Framework\TestCase;
use \InvalidArgumentException;
use Zenex\Primitives\NonEmptyString;

class EntityIDTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }


    public function test_empty_string_should_not_be_accepted()
    {
        $this->expectException(InvalidArgumentException::class);
        $str = new NonEmptyString("");
    }

    public function test_non_empty_string_should_be_accepted()
    {
        $str = new NonEmptyString("this is a string");
        $this->assertInstanceOf("Zenex\Primitives\NonEmptyString", $str, "The object belongs to the proper class");
    }

    public function tearDown()
    {
        parent::tearDown();
    }

}