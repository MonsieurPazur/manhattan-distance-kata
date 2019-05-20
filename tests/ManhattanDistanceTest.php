<?php

/**
 * Basic test suite for calculating manhattan distance.
 */

namespace Test;

use App\Grid;
use App\Point;
use Generator;
use PHPUnit\Framework\TestCase;

/**
 * Class ManhattanDistanceTest
 * @package Test
 */
class ManhattanDistanceTest extends TestCase
{
    /**
     * @var Grid $grid two dimensional matrix that handles calculating distance
     */
    private $grid;

    /**
     * Sets up grid.
     */
    protected function setUp(): void
    {
        $this->grid = new Grid();
    }

    /**
     * Tests manhattan distance between two given points.
     *
     * @dataProvider distanceProvider
     *
     * @param array $start
     * @param array $end
     * @param int $expected
     */
    public function testGrid(array $start, array $end, int $expected)
    {
        $start = new Point($start[0], $start[1]);
        $end = new Point($end[0], $end[1]);
        $distance = $this->grid->manhattanDistance($start, $end);
        $this->assertEquals($expected, $distance);
    }

    /**
     * Provides start and end point coordinates and expected distance between them.
     *
     * @return Generator
     */
    public function distanceProvider()
    {
        yield 'same two points' => [
            'start' => [0, 0],
            'end' => [0, 0],
            'expected' => 0
        ];
        yield 'neighbouring points' => [
            'start' => [0, 1],
            'end' => [0, 0],
            'expected' => 1
        ];
        yield 'different x' => [
            'start' => [-6, 2],
            'end' => [2, 2],
            'expected' => 8
        ];
        yield 'different y' => [
            'start' => [-1, -3],
            'end' => [-1, 11],
            'expected' => 14
        ];
        yield 'both coords different' => [
            'start' => [2, -1],
            'end' => [-3, 4],
            'expected' => 10
        ];
    }
}
