<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarMakeTest extends TestCase
{
    /**
     *
     */
    public function testCarModel()
    {
        $cars = Car::all();
        $car = Car::inRandomOrder()->first();
        if ($car->make = "Honda"){
            $this-> assertTrue(true);
        }
        elseif ($car->make = "Toyota"){
            $this-> assertTrue(true);
        }
        else ($car->make = "Ford");{
        $this-> assertTrue(true);
        }
    }
}