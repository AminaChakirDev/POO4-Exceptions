<?php

require_once 'Bicycle.php';

class Bike extends Bicycle implements LightableInterface
{

    public function switchOn():bool
    {
        if ($this->currentSpeed > 10) {
            return true;
        }
        else {
            return false;
        }
    }

    public function switchOff():bool
    {
        return false;
    }
}