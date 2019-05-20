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

    /**
     * Creates recursively path of points towards end.
     *
     * @param Point $end target point, where we created path towards
     * @param array $path current path towards target point
     */
    public function createPathTowards(Point $end, array &$path)
    {
        $path[] = $this;
        $point = null;

        if ($this->x > $end->x) {
            $point = new Point($this->x - 1, $this->y);
        } elseif ($this->x < $end->x) {
            $point = new Point($this->x + 1, $this->y);
        } elseif ($this->y > $end->y) {
            $point = new Point($this->x, $this->y - 1);
        } elseif ($this->y < $end->y) {
            $point = new Point($this->x, $this->y + 1);
        }

        if (!is_null($point)) {
            $point->createPathTowards($end, $path);
        }
    }
}
