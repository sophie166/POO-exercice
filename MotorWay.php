<?php


final class MotorWay extends HighWay
{
    protected $nbLane = 4;

    protected $maxSpeed = 130;

    public function addVehicule(vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[]=$vehicle;
        }
    }

}