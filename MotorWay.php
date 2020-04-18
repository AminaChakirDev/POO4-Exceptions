<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected $maxSpeed = 130;
    protected $nbLane = 4;


    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}