<?php
/**
 * File for class MpesaStructCheckOutHeader
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * This class stands for MpesaStructCheckOutHeader originally named CheckOutHeader
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl}
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaStructCheckOutHeader extends MpesaWsdlClass
{
    /**
     * The MERCHANT_ID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $MERCHANT_ID;
    /**
     * The PASSWORD
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $PASSWORD;
    /**
     * The TIMESTAMP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $TIMESTAMP;
    /**
     * Constructor method for CheckOutHeader
     * @see parent::__construct()
     * @param string $_mERCHANT_ID
     * @param string $_pASSWORD
     * @param string $_tIMESTAMP
     * @return MpesaStructCheckOutHeader
     */
    public function __construct($_mERCHANT_ID,$_pASSWORD,$_tIMESTAMP)
    {
        parent::__construct(array('MERCHANT_ID'=>$_mERCHANT_ID,'PASSWORD'=>$_pASSWORD,'TIMESTAMP'=>$_tIMESTAMP),false);
    }
    /**
     * Get MERCHANT_ID value
     * @return string
     */
    public function getMERCHANT_ID()
    {
        return $this->MERCHANT_ID;
    }
    /**
     * Set MERCHANT_ID value
     * @param string $_mERCHANT_ID the MERCHANT_ID
     * @return string
     */
    public function setMERCHANT_ID($_mERCHANT_ID)
    {
        return ($this->MERCHANT_ID = $_mERCHANT_ID);
    }
    /**
     * Get PASSWORD value
     * @return string
     */
    public function getPASSWORD()
    {
        return $this->PASSWORD;
    }
    /**
     * Set PASSWORD value
     * @param string $_pASSWORD the PASSWORD
     * @return string
     */
    public function setPASSWORD($_pASSWORD)
    {
        return ($this->PASSWORD = $_pASSWORD);
    }
    /**
     * Get TIMESTAMP value
     * @return string
     */
    public function getTIMESTAMP()
    {
        return $this->TIMESTAMP;
    }
    /**
     * Set TIMESTAMP value
     * @param string $_tIMESTAMP the TIMESTAMP
     * @return string
     */
    public function setTIMESTAMP($_tIMESTAMP)
    {
        return ($this->TIMESTAMP = $_tIMESTAMP);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MpesaWsdlClass::__set_state()
     * @uses MpesaWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MpesaStructCheckOutHeader
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
