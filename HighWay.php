<?php
require_once 'Vehicle.php';
abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles = array();

    /**
     * @var integer
     */
    protected $nbLane;

    /**
     * @var integer
     */
    protected $maxSpeed;


    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $newCurrentVehicle) {
        $this->currentVehicles = $newCurrentVehicle;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLanes($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle($vehicle);

}