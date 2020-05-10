<?php

require_once 'Vehicle.php';

require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake;



    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getParkBrake(): bool {
        return $this->hasParkBrake;
    }

    public function setParkBrake($PartBrake): void {
        $this->hasParkBrake = $PartBrake;
    }

    public function start() {
        if ($this->hasParkBrake == true) {
            throw new Exception("Y a le frein à main enclenché !");
        }
            echo "Ca roule";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn():bool
    {
        return true;
    }

    public function switchOff():bool
    {
        return false;
    }
}