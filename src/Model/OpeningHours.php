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
class OpeningHours implements JsonSerializable
{
    public static $dataTypes = array(
        'periods' => 'array[\Budbee\Model\OpeningHoursPeriod]',
        'weekdayText' => 'array[string]'
    );

    /**
     * List of periods belonging to this openinghours.
     * @var array[\Budbee\Model\Address]
     */
    public $periods;

    /**
     * List of opening time strings belonging to this openinghours.
     * @var array[string]
     */
    public $weekdayText;

    public function jsonSerialize()
    {
        return array(
            'periods' => $this->periods,
            'weekdayText' => $this->weekdayText
        );
    }
}
