<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    const STORAGE_MAX = 500;
    protected $storage = 0;

    protected $load = 0;

    /**
     * @return int
     */
    public function getload(): int
    {
        return $this->load;
    }

    /**
     * @param int $load
     */
    public function setload(int $load)
    {
        $this->load = $load;
    }

    /**
     * @param mixed $
     */

    /**
     * @return mixed
     */
    public function getstorage():int
    {
        return $this->storage;
    }

    public function setstorage($storage)
    {
        $this->storage = $storage;
    }
    public function __construct(string $color, int $nbSeats, int $storage)
    {
        parent::__construct($color, $nbSeats,$storage);
        $this->storage = $storage;
    }

    public function isfull(): string
    {
        $possibleCapacity = false;

        if ($this->storage >= self::STORAGE_MAX ) {
            $possibleCapacity = true;}

        if ($possibleCapacity == true){
            return ' Full';
        }

        if ($possibleCapacity == false){
            return 'In filling';
        }
    }

}