<?php

### DO NOT MODIFY THIS FILE ###

class Activity
{
    private $type;
    private $day;
    private $time;
    private $fee;

    const GST = 0.08;

    public function __construct($type, $day, $time, $fee)
    {
        $this->type = $type;
        $this->day = $day;
        $this->time = $time;
        $this->fee = $fee;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getTime()
    {
        return $this->time;
    }
    
    public function getFee()
    {
        return $this->fee;
    }

}