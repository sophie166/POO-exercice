<?php


interface RechargeableInterface
    {
        Public function charge (int $percentage) :int;

        public function unLoad (int $percentage) : int;
    }
