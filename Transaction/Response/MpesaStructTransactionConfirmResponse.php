<?php
/**
 * File for class MpesaStructTransactionConfirmResponse
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * This class stands for MpesaStructTransactionConfirmResponse originally named transactionConfirmResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl}
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaStructTransactionConfirmResponse extends MpesaWsdlClass
{
    /**
     * The RETURN_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $RETURN_CODE;
    /**
     * The DESCRIPTION
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $DESCRIPTION;
    /**
     * The MERCHANT_TRANSACTION_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $MERCHANT_TRANSACTION_ID;
    /**
     * The TRX_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $TRX_ID;
    /**
     * Constructor method for transactionConfirmResponse
     * @see parent::__construct()
     * @param string $_rETURN_CODE
     * @param string $_dESCRIPTION
     * @param string $_mERCHANT_TRANSACTION_ID
     * @param string $_tRX_ID
     * @return MpesaStructTransactionConfirmResponse
     */
    public function __construct($_rETURN_CODE,$_dESCRIPTION,$_mERCHANT_TRANSACTION_ID,$_tRX_ID)
    {
        parent::__construct(array('RETURN_CODE'=>$_rETURN_CODE,'DESCRIPTION'=>$_dESCRIPTION,'MERCHANT_TRANSACTION_ID'=>$_mERCHANT_TRANSACTION_ID,'TRX_ID'=>$_tRX_ID),false);
    }
    /**
     * Get RETURN_CODE value
     * @return string
     */
    public function getRETURN_CODE()
    {
        return $this->RETURN_CODE;
    }
    /**
     * Set RETURN_CODE value
     * @param string $_rETURN_CODE the RETURN_CODE
     * @return string
     */
    public function setRETURN_CODE($_rETURN_CODE)
    {
        return ($this->RETURN_CODE = $_rETURN_CODE);
    }
    /**
     * Get DESCRIPTION value
     * @return string
     */
    public function getDESCRIPTION()
    {
        return $this->DESCRIPTION;
    }
    /**
     * Set DESCRIPTION value
     * @param string $_dESCRIPTION the DESCRIPTION
     * @return string
     */
    public function setDESCRIPTION($_dESCRIPTION)
    {
        return ($this->DESCRIPTION = $_dESCRIPTION);
    }
    /**
     * Get MERCHANT_TRANSACTION_ID value
     * @return string
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
     * Get TRX_ID value
     * @return string
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MpesaWsdlClass::__set_state()
     * @uses MpesaWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MpesaStructTransactionConfirmResponse
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
