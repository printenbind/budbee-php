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
class BoxDelivery implements JsonSerializable
{
    public static $dataTypes = array(
        'selectedBox' => 'string'
    );

    /**
     * Selected Box ID
     * @var string
     */
    public $selectedBox;

    public function jsonSerialize()
    {
        return array(
            'selectedBox' => $this->selectedBox
        );
    }
}
