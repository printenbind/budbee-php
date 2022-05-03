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
class AdditionalServices implements JsonSerializable
{
    public static $dataTypes = array(
        'fraudDetection' => 'boolean'
    );

    /**
     * Fraud detection yes/no
     * @var string
     */
    public $fraudDetection;

    public function jsonSerialize()
    {
        return array(
            'fraudDetection' => $this->fraudDetection
        );
    }
}
