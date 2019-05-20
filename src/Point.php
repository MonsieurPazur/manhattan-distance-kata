<?php

/**
 * Point on a two dimensional grid.
 */

namespace App;

/**
 * Class Point
 * @package App
 */
class Point
{
    /**
     * @var int $x this Point's position in X axis
     */
    private $x;

    /**
     * @var int $y this Point's position in Y axis
     */
    private $y;

    /**
     * Point constructor.
     *
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
