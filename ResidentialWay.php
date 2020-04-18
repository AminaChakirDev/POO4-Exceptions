<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected $maxSpeed = 50;
    protected $nbLane = 2;


    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}