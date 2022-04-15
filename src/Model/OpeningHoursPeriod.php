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
class OpeningHoursPeriod implements JsonSerializable
{
    public static $dataTypes = array(
        'open' => '\Budbee\Model\OpeningHoursPeriodTime',
        'close' => '\Budbee\Model\OpeningHoursPeriodTime'
    );

    /**
     * Opening time of the opening hours period
     * @var array[\Budbee\Model\OpeningHoursPeriodTime]
     */
    public $open;

    /**
     * Opening time of the opening hours period
     * @var array[\Budbee\Model\OpeningHoursPeriodTime]
     */
    public $close;

    public function jsonSerialize()
    {
        return array(
            'open' => $this->open,
            'close' => $this->close
        );
    }
}
