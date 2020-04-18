<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $volumeCapacity;

    /**
     * @var int
     */
    private $loading;



    public function __construct(int $volumeCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->volumeCapacity = $volumeCapacity;
    }

    public function setLoading($loading): void
    {
        $this->loading = $loading;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setVolumeCapacity(int $VolumeCapacity): void
    {
        $this->VolumeCapacity = $VolumeCapacity;
    }

    //public function checkVolume(): string
    //{
    //  if ($this->loading < $this->volumeCapacity) {
    //        return "in filling!";
    //     }
    //     else {
    //        return "full";
    //    }
    // }

    public function fill(): string
    {
        $sentence = "";
        while ($this->loading < $this->volumeCapacity) {
            $this->loading+=15;
            $sentence .= "In filling<br>";
        }

        $sentence .= "FULL !";
        return $sentence;
    }
}