<?php
/**
 * File for class MpesaStructProcessCheckOutResponse
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * This class stands for MpesaStructProcessCheckOutResponse originally named processCheckOutResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl}
 * @package Mpesa
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaStructProcessCheckOutResponse extends MpesaWsdlClass
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
     * The TRX_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $TRX_ID;
    /**
     * The ENC_PARAMS
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $ENC_PARAMS;
    /**
     * The CUST_MSG
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var string
     */
    public $CUST_MSG;
    /**
     * Constructor method for processCheckOutResponse
     * @see parent::__construct()
     * @param string $_rETURN_CODE
     * @param string $_dESCRIPTION
     * @param string $_tRX_ID
     * @param string $_eNC_PARAMS
     * @param string $_cUST_MSG
     * @return MpesaStructProcessCheckOutResponse
     */
    public function __construct($_rETURN_CODE,$_dESCRIPTION,$_tRX_ID,$_eNC_PARAMS,$_cUST_MSG)
    {
        parent::__construct(array('RETURN_CODE'=>$_rETURN_CODE,'DESCRIPTION'=>$_dESCRIPTION,'TRX_ID'=>$_tRX_ID,'ENC_PARAMS'=>$_eNC_PARAMS,'CUST_MSG'=>$_cUST_MSG),false);
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
     * Get CUST_MSG value
     * @return string
     */
    public function getCUST_MSG()
    {
        return $this->CUST_MSG;
    }
    /**
     * Set CUST_MSG value
     * @param string $_cUST_MSG the CUST_MSG
     * @return string
     */
    public function setCUST_MSG($_cUST_MSG)
    {
        return ($this->CUST_MSG = $_cUST_MSG);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MpesaWsdlClass::__set_state()
     * @uses MpesaWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MpesaStructProcessCheckOutResponse
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
