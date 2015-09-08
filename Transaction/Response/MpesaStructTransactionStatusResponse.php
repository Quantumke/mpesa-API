<?php
/**
 * File for class MpesaStructTransactionStatusResponse
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * This class stands for MpesaStructTransactionStatusResponse originally named transactionStatusResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl}
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaStructTransactionStatusResponse extends MpesaWsdlClass
{
    /**
     * The MSISDN
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $MSISDN;
    /**
     * The AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $AMOUNT;
    /**
     * The MPESA_TRX_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $MPESA_TRX_DATE;
    /**
     * The MPESA_TRX_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $MPESA_TRX_ID;
    /**
     * The TRX_STATUS
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $TRX_STATUS;
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
     * The ENC_PARAMS
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $ENC_PARAMS;
    /**
     * The TRX_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $TRX_ID;
    /**
     * Constructor method for transactionStatusResponse
     * @see parent::__construct()
     * @param string $_mSISDN
     * @param string $_aMOUNT
     * @param string $_mPESA_TRX_DATE
     * @param string $_mPESA_TRX_ID
     * @param string $_tRX_STATUS
     * @param string $_rETURN_CODE
     * @param string $_dESCRIPTION
     * @param string $_mERCHANT_TRANSACTION_ID
     * @param string $_eNC_PARAMS
     * @param string $_tRX_ID
     * @return MpesaStructTransactionStatusResponse
     */
    public function __construct($_mSISDN,$_aMOUNT,$_mPESA_TRX_DATE,$_mPESA_TRX_ID,$_tRX_STATUS,$_rETURN_CODE,$_dESCRIPTION,$_mERCHANT_TRANSACTION_ID,$_eNC_PARAMS,$_tRX_ID)
    {
        parent::__construct(array('MSISDN'=>$_mSISDN,'AMOUNT'=>$_aMOUNT,'MPESA_TRX_DATE'=>$_mPESA_TRX_DATE,'MPESA_TRX_ID'=>$_mPESA_TRX_ID,'TRX_STATUS'=>$_tRX_STATUS,'RETURN_CODE'=>$_rETURN_CODE,'DESCRIPTION'=>$_dESCRIPTION,'MERCHANT_TRANSACTION_ID'=>$_mERCHANT_TRANSACTION_ID,'ENC_PARAMS'=>$_eNC_PARAMS,'TRX_ID'=>$_tRX_ID),false);
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
     * Get AMOUNT value
     * @return string
     */
    public function getAMOUNT()
    {
        return $this->AMOUNT;
    }
    /**
     * Set AMOUNT value
     * @param string $_aMOUNT the AMOUNT
     * @return string
     */
    public function setAMOUNT($_aMOUNT)
    {
        return ($this->AMOUNT = $_aMOUNT);
    }
    /**
     * Get MPESA_TRX_DATE value
     * @return string
     */
    public function getMPESA_TRX_DATE()
    {
        return $this->MPESA_TRX_DATE;
    }
    /**
     * Set MPESA_TRX_DATE value
     * @param string $_mPESA_TRX_DATE the MPESA_TRX_DATE
     * @return string
     */
    public function setMPESA_TRX_DATE($_mPESA_TRX_DATE)
    {
        return ($this->MPESA_TRX_DATE = $_mPESA_TRX_DATE);
    }
    /**
     * Get MPESA_TRX_ID value
     * @return string
     */
    public function getMPESA_TRX_ID()
    {
        return $this->MPESA_TRX_ID;
    }
    /**
     * Set MPESA_TRX_ID value
     * @param string $_mPESA_TRX_ID the MPESA_TRX_ID
     * @return string
     */
    public function setMPESA_TRX_ID($_mPESA_TRX_ID)
    {
        return ($this->MPESA_TRX_ID = $_mPESA_TRX_ID);
    }
    /**
     * Get TRX_STATUS value
     * @return string
     */
    public function getTRX_STATUS()
    {
        return $this->TRX_STATUS;
    }
    /**
     * Set TRX_STATUS value
     * @param string $_tRX_STATUS the TRX_STATUS
     * @return string
     */
    public function setTRX_STATUS($_tRX_STATUS)
    {
        return ($this->TRX_STATUS = $_tRX_STATUS);
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
     * Get ENC_PARAMS value
     * @return string
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
     * @return MpesaStructTransactionStatusResponse
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
