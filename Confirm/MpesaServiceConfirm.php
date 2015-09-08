<?php
/**
 * File for class MpesaServiceConfirm
 * @package Mpesa
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * This class stands for MpesaServiceConfirm originally named Confirm
 * @package Mpesa
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaServiceConfirm extends MpesaWsdlClass
{
    /**
     * Sets the CheckOutHeader SoapHeader param
     * @uses MpesaWsdlClass::setSoapHeader()
     * @param MpesaStructCheckOutHeader $_mpesaStructCheckOutHeader
     * @param string $_nameSpace tns:ns
     * @param bool $_mustUnderstand
     * @param string $_actor
     * @return bool true|false
     */
    public function setSoapHeaderCheckOutHeader(MpesaStructCheckOutHeader $_mpesaStructCheckOutHeader,$_nameSpace = 'tns:ns',$_mustUnderstand = false,$_actor = null)
    {
        return $this->setSoapHeader($_nameSpace,'CheckOutHeader',$_mpesaStructCheckOutHeader,$_mustUnderstand,$_actor);
    }
    /**
     * Method to call the operation originally named confirmTransaction
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : CheckOutHeader
     * - SOAPHeaderNamespaces : tns:ns
     * - SOAPHeaderTypes : {@link MpesaStructCheckOutHeader}
     * - SOAPHeaders : required
     * @uses MpesaWsdlClass::getSoapClient()
     * @uses MpesaWsdlClass::setResult()
     * @uses MpesaWsdlClass::saveLastError()
     * @param MpesaStructTransactionConfirmRequest $_mpesaStructTransactionConfirmRequest
     * @return MpesaStructTransactionConfirmResponse
     */
    public function confirmTransaction(MpesaStructTransactionConfirmRequest $_mpesaStructTransactionConfirmRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->confirmTransaction($_mpesaStructTransactionConfirmRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MpesaWsdlClass::getResult()
     * @return MpesaStructTransactionConfirmResponse
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
