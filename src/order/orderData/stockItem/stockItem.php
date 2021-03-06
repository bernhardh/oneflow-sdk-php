<?php

/**
 * OneFlowStockItem class.
 *
 * @extends OneFlowBase
 */
class OneFlowStockItem extends OneFlowBase {

    /**
     * init function.
     *
     * @access public
     * @return void
     */
    public function init()      {
        $this->__addProperty("code");
        $this->__addProperty("quantity", 1, false);
        $this->__addProperty("shipmentIndex");
    }

    /**
     * setCode function.
     *
     * @access public
     * @param mixed $code
     * @return mixed
     */
    public function setCode($code)    {
        return $this->code = $code;
    }

    /**
     * setQuantity function.
     *
     * @access public
     * @param mixed $quantity
     * @return void
     */
    public function setQuantity($quantity)  {
        $this->quantity = $quantity;
    }


    /**
     * setShipment function.
     *
     * @access public
     * @param mixed $shipment
     * @return void
     */
    public function setShipment($shipment)  {
        $this->shipmentIndex = $shipment->shipmentIndex;
    }

    /**
     * setShipmentIndex function.
     *
     * @access public
     * @param mixed $shipmentIndex
     * @return void
     */
    public function setShipmentIndex($shipmentIndex)  {
        $this->shipmentIndex = $shipmentIndex;
    }
}

?>
