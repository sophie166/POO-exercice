<?php


final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;

    protected $maxSpeed = 50;

public function addVehicule(vehicle $vehicle)
{
    if ($vehicle instanceof Vehicle) {
        $this->currentVehicles[] = $vehicle;
    }

}

}