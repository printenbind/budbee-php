<?php
/**
 *  Printenbind additional model
 */
namespace Budbee\Model;

use \JsonSerializable;

/**
 * @author Erik Schoel
 */
class ParcelRequest implements JsonSerializable
{
    public static $dataTypes = array(
        'shipmentId' => 'string',
        'packageId' => 'string',
        'dimensions' => '\Budbee\Model\Dimensions'
    );

    /**
     * The shipment ID of the end users purchase
     * @var string
     */
    public $shipmentId;

    /**
     * The package ID of the end users purchase
     * @var string
     */
    public $packageId;

    /**
     * The dimensions of the entire shipment.
     * @var \Budbee\Model\Dimensions
     */
    public $dimensions;

    public function jsonSerialize()
    {
        return array(
            'shipmentId' => $this->shipmentId,
            'packageId' => $this->packageId,
            'dimensions' => $this->dimensions
        );
    }
}
