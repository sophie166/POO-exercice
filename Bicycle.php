<?php


class bicycle
{
    public $color;

    public $currentSpeed;

    public $nbSeats = 12;

    public $nbWheels = 9;
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */



    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function __construct(string $color)
    {
        $this->color = $color;
    }
    }
