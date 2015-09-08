<?php
/**
 * File for class MpesaServiceProcess
 * @package Mpesa
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * This class stands for MpesaServiceProcess originally named Process
 * @package Mpesa
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaServiceProcess extends MpesaWsdlClass
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
     * Method to call the operation originally named processCheckOut
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : CheckOutHeader
     * - SOAPHeaderNamespaces : tns:ns
     * - SOAPHeaderTypes : {@link MpesaStructCheckOutHeader}
     * - SOAPHeaders : required
     * @uses MpesaWsdlClass::getSoapClient()
     * @uses MpesaWsdlClass::setResult()
     * @uses MpesaWsdlClass::saveLastError()
     * @param MpesaStructProcessCheckOutRequest $_mpesaStructProcessCheckOutRequest
     * @return MpesaStructProcessCheckOutResponse
     */
    public function processCheckOut(MpesaStructProcessCheckOutRequest $_mpesaStructProcessCheckOutRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->processCheckOut($_mpesaStructProcessCheckOutRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MpesaWsdlClass::getResult()
     * @return MpesaStructProcessCheckOutResponse
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
