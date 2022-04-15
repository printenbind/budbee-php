<?php
/**
 *  Copyright 2014 Printenbind.
 *
 */
namespace Budbee\Model;

use \JsonSerializable;

/**
 * @author Erik Schoel
 */
class OpeningHoursPeriodTime implements JsonSerializable
{
    public static $dataTypes = array(
        'day' => 'string',
        'time' => 'string'
    );

    /**
     * Opening day of the opening hours period
     * @var string
     */
    public $day;

    /**
     * Opening time of the opening hours period
     * @var string
     */
    public $time;

    public function jsonSerialize()
    {
        return array(
            'day' => $this->day,
            'time' => $this->time
        );
    }
}
