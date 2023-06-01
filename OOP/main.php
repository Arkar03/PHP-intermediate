<?php

class Rent
{
    public $car, $driver;
    public function __construct(Car $car, Driver $driver)
    {
        $this->car = $car;
        $this->driver = $driver;
    }
    public function getCar(): Car
    {
        return $this->car;
    }

    public function getDriver(): Driver
    {
        return $this->driver;
    }
}
class Driver
{
    public $name, $age, $family, $hourlyRate, $martialStatus;


    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setFamily(array $family)
    {
        $this->family = $family;
    }
    public function getFamily(): array
    {
        return $this->family;
    }
    public function setHourlyRate($hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
    }
    public function getHourlyRate(): float
    {
        return $this->hourlyRate;
    }
    public function getMartialStatus(): string
    {
        return $this->martialStatus;
    }
    public function setMartialStatus($martialStatus)
    {
        $this->name = $martialStatus;
    }
}
class Car
{
    public $brand, $model, $price, $spares, $available;
    public function __construct(string $brand, int $model, float $price, array $spares, bool $available)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->spares = $spares;
        $this->available = $available;
    }
    public function getBrand(): string
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getModel(): int
    {
        return $this->brand;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getSpares(): array
    {
        return $this->spares;
    }
    public function setSpares($spares)
    {
        $this->$spares = $spares;
    }
    public function getAvailable(): bool
    {
        return $this->brand;
    }
    public function setAvailable($available)
    {
        $this->$available = $available;
    }
}

$driver1 = new Driver();
$driver1->setName('Mg Mg');
$driver1->setAge(25);
$driver1->setFamily(["Father" => "U Kyaw", "Mother" => "Daw Mya", "Sister" => "Su Su"]);
$driver1->setHourlyRate(8.5);
$driver1->setMartialStatus(false);

$driver2 = new Driver();
$driver2->setName('Ag Ag');
$driver2->setAge(30);
$driver2->setFamily(["Father" => "U Mya", "Mother" => "Daw Hla", "Sister" => "Nu NU"]);
$driver2->setHourlyRate(9.5);
$driver2->setMartialStatus(true);

$toyota = new Car('Crown', '2020', '30.5', ["Tissues", "Drinking Water", "Cupon"], true);
$mazda = new Car('m1', '2020', '30.5', ["Tissues", "Drinking Water"], false);

$rent1 = new Rent($toyota, $driver1);
$rent2 = new Rent($mazda, $driver2);

$list = [$rent1, $rent2];

$serializeData = serialize($list);
$unserializeData = unserialize($serializeData);

print_r($unserializeData);

