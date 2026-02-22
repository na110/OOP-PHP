<?php
class Vehicle
{
    // Attributes
    protected $model = '';
    protected $year = 0;

    // Constructor
    public function __construct(string $model, int $year)
    {
        $this->model = $model;
        $this->year = $year;
    }

    // Methods / Actions
    public function start()
    {
        echo "$this->model Engine Started!" . "\n";
    }

    public function stop()
    {
        echo "$this->model Engine Stop!" . "\n";
    }

    // Encapsulation
    public function model_set(string $model)
    {
        $this->model = $model;
    }

    public function model_get(): string
    {
        return $this->model;
    }

    public function year_set(int $year)
    {
        $this->year = $year;
    }

    public function year_get(): int
    {
        return $this->year;
    }
}

class Car extends Vehicle
{
    protected $color = '';

    public function __construct(string $model, int $year, string $color)
    {
        parent::__construct($model, $year);
        $this->color = $color;
    }

    public function color_set(string $color)
    {
        $this->color = $color;
    }

    public function color_get(): string
    {
        return $this->color;
    }

    public function print_info()
    {
        echo "Car model: " . $this->model_get() . "\n";
        echo "Car year: " . $this->year_get() . "\n";
        echo "Car color: " . $this->color_get();
    }
}

$bmw = new Car("bmw", 2021, "blue");
$bmw->print_info();

