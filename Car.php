<?php


/**
 * Class Car
 */
class Car
{
    /**
     * @var int
     */
    private $nbWheels = 4 ;

    /**
     * @var int
     */
    private $currentSpeed = 0;

    /**
     * @var string
     */
    private $color = "";

    /**
     * @var int
     */
    private $nbSeats = 0;

    /**
     * @var string
     */
    private $energy = "" ;

    /**
     * @var int
     */
    private $energyLevel = 0;

    // nb whelles

    /**
     * @return int
     */
    public function getnbWheels(): int
    {

    return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setnbWheels(int $nbWheels)
    {

    $this->nbWheels = $nbWheels ;
    return $this;

    }

    // Speed

    /**
     * @return int
     */
    public function getcurrentSpeed(): int
    {

        return $this->nbWheels;
    }

    /**
     * @param int $currentSpeed
     */
    public  function setcurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
        return $this;

    }

    //color

    /**
     * @return string
     */
    public  function getcolor() :string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setcolor(string $color)
    {
        $this->color = $color;
        return $this;
    }

    //nbSeats

    /**
     * @return int
     */
    public  function getnbSeats() :int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     */
    public function setnbSeats(int $nbSeats)
    {

        $this->nbSeats = $nbSeats;
        return $this;
    }

    //energy

    /**
     * @return string
     */
    public  function getenergy() :string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setenergy(string $energy)
    {

        $this->energy = $energy;
        return $this;
    }

    //energy

    /**
     * @return int
     */
    public  function getenergyLever() :int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setenergyLever(int $energyLevel)
    {

        $this->energyLevel = $energyLevel;
        return $this;
    }

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {

        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     *
     */
    public function forward(){
        $this->currentSpeed = 30;

        return "Go !";
    }

    /**
     *
     */
    public function brake(){
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed = $this->currentSpeed -5;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped, ouf !";
        return $sentence;

    }

    /**
     *
     */
    public function start(){

    }

}