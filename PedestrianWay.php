<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $maxSpeed = 10;
    protected $nbLane = 1;


    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bike) {
            $this->currentVehicles[] = $vehicle;
        }
    }


}