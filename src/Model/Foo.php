<?php
/**
 * Created by PhpStorm.
 * User: wunder
 * Date: 30.11.2018
 * Time: 21:31
 */

namespace App\Model;


class Foo
{
    /**
     * @var string
     */
    private $foo;

    /**
     * @var Bar
     */
    private $bar;

    /**
     * @return string
     */
    public function getFoo(): string
    {
        return $this->foo;
    }

    /**
     * @return mixed
     */
    public function getBar(): Bar
    {
        return $this->bar;
    }

    /**
     * @param string $foo
     *
     * @return \App\Model\Foo
     */
    public function setFoo(string $foo): Foo
    {
        $this->foo = $foo;

        return $this;
    }

    /**
     * @param Bar $bar
     *
     * @return Foo
     */
    public function setBar(Bar $bar): Foo
    {
        $this->bar = $bar;

        return $this;
}
}