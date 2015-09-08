<?php
/**
 * File for class MpesaStructTransactionConfirmRequest
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * This class stands for MpesaStructTransactionConfirmRequest originally named transactionConfirmRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl}
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaStructTransactionConfirmRequest extends MpesaWsdlClass
{
    /**
     * The TRX_ID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TRX_ID;
    /**
     * The MERCHANT_TRANSACTION_ID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MERCHANT_TRANSACTION_ID;
    /**
     * Constructor method for transactionConfirmRequest
     * @see parent::__construct()
     * @param string $_tRX_ID
     * @param string $_mERCHANT_TRANSACTION_ID
     * @return MpesaStructTransactionConfirmRequest
     */
    public function __construct($_tRX_ID = NULL,$_mERCHANT_TRANSACTION_ID = NULL)
    {
        parent::__construct(array('TRX_ID'=>$_tRX_ID,'MERCHANT_TRANSACTION_ID'=>$_mERCHANT_TRANSACTION_ID),false);
    }
    /**
     * Get TRX_ID value
     * @return string|null
     */
    public function getTRX_ID()
    {
        return $this->TRX_ID;
    }
    /**
     * Set TRX_ID value
     * @param string $_tRX_ID the TRX_ID
     * @return string
     */
    public function setTRX_ID($_tRX_ID)
    {
        return ($this->TRX_ID = $_tRX_ID);
    }
    /**
     * Get MERCHANT_TRANSACTION_ID value
     * @return string|null
     */
    public function getMERCHANT_TRANSACTION_ID()
    {
        return $this->MERCHANT_TRANSACTION_ID;
    }
    /**
     * Set MERCHANT_TRANSACTION_ID value
     * @param string $_mERCHANT_TRANSACTION_ID the MERCHANT_TRANSACTION_ID
     * @return string
     */
    public function setMERCHANT_TRANSACTION_ID($_mERCHANT_TRANSACTION_ID)
    {
        return ($this->MERCHANT_TRANSACTION_ID = $_mERCHANT_TRANSACTION_ID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MpesaWsdlClass::__set_state()
     * @uses MpesaWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MpesaStructTransactionConfirmRequest
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
