<?php

/**
 * Two dimensional grid made of points (x, y).
 */

namespace App;

/**
 * Class Grid
 * @package App
 */
class Grid
{
    /**
     * @var Point[] $path array of Points from start to end
     */
    private $path;

    /**
     * Grid constructor.
     */
    public function __construct()
    {
        $this->path = [];
    }

    /**
     * Gets manhattan distance between two given points.
     *
     * @param Point $start point from which we calculate distance
     * @param Point $end point to which we calculate distance
     *
     * @return int calculated distance between two given points
     */
    public function manhattanDistance(Point $start, Point $end): int
    {
        $this->path = [];
        $start->createPathTowards($end, $this->path);

        // Final distance is a count of all points on the path (minus starting one).
        return count($this->path) - 1;
    }
}
