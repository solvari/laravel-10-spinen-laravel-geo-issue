<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Spinen\Geometry\Geometry;
use Tests\TestCase;

class SpinenTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_working(): void
    {
        // ARRANGE
        $geometry = $this->app->make(Geometry::class);
        $polygonGeoJson = '{"type":"MultiPolygon","coordinates":[[[[4.2721668,51.3758503],[4.2798236,51.3761214],[4.2774246,51.3760352],[4.2774232,51.3760382],[4.2747282,51.3759419],[4.2721668,51.3758503]]]]}';

        // ACT
        $result = $geometry->parseGeoJson($polygonGeoJson);

        $this->assertNotNull($result);
    }
}
