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
class Locker implements JsonSerializable
{
    public static $dataTypes = array(
        'id' => 'string',
        'address' => '\Budbee\Model\Address',
        'estimatedDelivery' => 'string',
        'cutoff' => 'string',
        'distance' => 'int',
        'name' => 'string',
        'directions' => 'string',
        'label' => 'string',
        'openingHours' => '\Budbee\Model\OpeningHours'
    );

    /**
     * @var int
     */
    public $id;

    /**
     * @var \Budbee\Model\Address
     */
    public $address;

    /**
     * Estimated delivery
     * @var \DateTime
     */
    public $estimatedDelivery;

    /**
     * Cutoff
     * @var \DateTime
     */
    public $cutoff;

    /**
     * @var int
     */
    public $distance;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $directions;

    /**
     * @var string
     */
    public $label;

    /**
     * @var \Budbee\Model\OpeningHours
     */
    public $openingHours;

    public function jsonSerialize()
    {
        return array(
            'id' => $this->id,
            'address' => $this->address,
            'estimatedDelivery' => $this->estimatedDelivery,
            'cutoff' => $this->cutoff,
            'distance' => $this->distance,
            'name' => $this->name,
            'directions' => $this->directions,
            'label' => $this->label,
            'openingHours' => $this->openingHours
        );
    }
}
