<?php

namespace App\Model;

class Bar
{
    /**
     * @var string
     */
    private $foo;

    /**
     * @var string
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
     * @return string
     */
    public function getBar(): string
    {
        return $this->bar;
    }

    /**
     * @param string $foo
     *
     * @return Bar
     */
    public function setFoo(string $foo): Bar
    {
        $this->foo = $foo;

        return $this;
    }

    /**
     * @param string $bar
     *
     * @return Bar
     */
    public function setBar(string $bar): Bar
    {
        $this->bar = $bar;

        return $this;
    }
}