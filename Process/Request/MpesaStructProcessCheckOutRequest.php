<?php
/**
 * File for class MpesaStructProcessCheckOutRequest
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * This class stands for MpesaStructProcessCheckOutRequest originally named processCheckOutRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl}
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaStructProcessCheckOutRequest extends MpesaWsdlClass
{
    /**
     * The MERCHANT_TRANSACTION_ID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $MERCHANT_TRANSACTION_ID;
    /**
     * The REFERENCE_ID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $REFERENCE_ID;
    /**
     * The AMOUNT
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var double
     */
    public $AMOUNT;
    /**
     * The MSISDN
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $MSISDN;
    /**
     * The CALL_BACK_URL
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $CALL_BACK_URL;
    /**
     * The CALL_BACK_METHOD
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var string
     */
    public $CALL_BACK_METHOD;
    /**
     * The ENC_PARAMS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ENC_PARAMS;
    /**
     * The TIMESTAMP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TIMESTAMP;
    /**
     * Constructor method for processCheckOutRequest
     * @see parent::__construct()
     * @param string $_mERCHANT_TRANSACTION_ID
     * @param string $_rEFERENCE_ID
     * @param double $_aMOUNT
     * @param string $_mSISDN
     * @param string $_cALL_BACK_URL
     * @param string $_cALL_BACK_METHOD
     * @param string $_eNC_PARAMS
     * @param string $_tIMESTAMP
     * @return MpesaStructProcessCheckOutRequest
     */
    public function __construct($_mERCHANT_TRANSACTION_ID,$_rEFERENCE_ID,$_aMOUNT,$_mSISDN,$_cALL_BACK_URL,$_cALL_BACK_METHOD,$_eNC_PARAMS = NULL,$_tIMESTAMP = NULL)
    {
        parent::__construct(array('MERCHANT_TRANSACTION_ID'=>$_mERCHANT_TRANSACTION_ID,'REFERENCE_ID'=>$_rEFERENCE_ID,'AMOUNT'=>$_aMOUNT,'MSISDN'=>$_mSISDN,'CALL_BACK_URL'=>$_cALL_BACK_URL,'CALL_BACK_METHOD'=>$_cALL_BACK_METHOD,'ENC_PARAMS'=>$_eNC_PARAMS,'TIMESTAMP'=>$_tIMESTAMP),false);
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
     * Get REFERENCE_ID value
     * @return string
     */
    public function getREFERENCE_ID()
    {
        return $this->REFERENCE_ID;
    }
    /**
     * Set REFERENCE_ID value
     * @param string $_rEFERENCE_ID the REFERENCE_ID
     * @return string
     */
    public function setREFERENCE_ID($_rEFERENCE_ID)
    {
        return ($this->REFERENCE_ID = $_rEFERENCE_ID);
    }
    /**
     * Get AMOUNT value
     * @return double
     */
    public function getAMOUNT()
    {
        return $this->AMOUNT;
    }
    /**
     * Set AMOUNT value
     * @param double $_aMOUNT the AMOUNT
     * @return double
     */
    public function setAMOUNT($_aMOUNT)
    {
        return ($this->AMOUNT = $_aMOUNT);
    }
    /**
     * Get MSISDN value
     * @return string
     */
    public function getMSISDN()
    {
        return $this->MSISDN;
    }
    /**
     * Set MSISDN value
     * @param string $_mSISDN the MSISDN
     * @return string
     */
    public function setMSISDN($_mSISDN)
    {
        return ($this->MSISDN = $_mSISDN);
    }
    /**
     * Get CALL_BACK_URL value
     * @return string
     */
    public function getCALL_BACK_URL()
    {
        return $this->CALL_BACK_URL;
    }
    /**
     * Set CALL_BACK_URL value
     * @param string $_cALL_BACK_URL the CALL_BACK_URL
     * @return string
     */
    public function setCALL_BACK_URL($_cALL_BACK_URL)
    {
        return ($this->CALL_BACK_URL = $_cALL_BACK_URL);
    }
    /**
     * Get CALL_BACK_METHOD value
     * @return string
     */
    public function getCALL_BACK_METHOD()
    {
        return $this->CALL_BACK_METHOD;
    }
    /**
     * Set CALL_BACK_METHOD value
     * @param string $_cALL_BACK_METHOD the CALL_BACK_METHOD
     * @return string
     */
    public function setCALL_BACK_METHOD($_cALL_BACK_METHOD)
    {
        return ($this->CALL_BACK_METHOD = $_cALL_BACK_METHOD);
    }
    /**
     * Get ENC_PARAMS value
     * @return string|null
     */
    public function getENC_PARAMS()
    {
        return $this->ENC_PARAMS;
    }
    /**
     * Set ENC_PARAMS value
     * @param string $_eNC_PARAMS the ENC_PARAMS
     * @return string
     */
    public function setENC_PARAMS($_eNC_PARAMS)
    {
        return ($this->ENC_PARAMS = $_eNC_PARAMS);
    }
    /**
     * Get TIMESTAMP value
     * @return string|null
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
     * @return MpesaStructProcessCheckOutRequest
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
