<?php
/**
 *  Printenbind additional model
 */
namespace Budbee\Model;

use \JsonSerializable;

/**
 * @author Erik Schoel
 */

class TrackTrace implements JsonSerializable
{
    public static $dataTypes = array(
        'url' => 'string'
    );

    /**
     * The tracktrace url
     * @var string
     */
    public $url;

    public function jsonSerialize()
    {
        return array(
            'url' => $this->url
        );
    }
}
