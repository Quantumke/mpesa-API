<?php
/**
 * File for class MpesaServiceLNMOR
 * @package Mpesa
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * This class stands for MpesaServiceLNMOR originally named LNMOR
 * @package Mpesa
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaServiceLNMOR extends MpesaWsdlClass
{
    /**
     * Method to call the operation originally named LNMOResult
     * @uses MpesaWsdlClass::getSoapClient()
     * @uses MpesaWsdlClass::setResult()
     * @uses MpesaWsdlClass::saveLastError()
     * @param MpesaStructResultMsg $_mpesaStructResultMsg
     * @return string
     */
    public function LNMOResult(MpesaStructResultMsg $_mpesaStructResultMsg)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->LNMOResult($_mpesaStructResultMsg));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MpesaWsdlClass::getResult()
     * @return string
     */
    public function getResult()
    {
        return parent::getResult();
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
