<?php
/**
 * File for the class which returns the class map definition
 * @package Mpesa
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * Class which returns the class map definition by the static method MpesaClassMap::classMap()
 * @package Mpesa
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
class MpesaClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'CheckOutHeader' => 'MpesaStructCheckOutHeader',
  'ResultMsg' => 'MpesaStructResultMsg',
  'processCheckOutRequest' => 'MpesaStructProcessCheckOutRequest',
  'processCheckOutResponse' => 'MpesaStructProcessCheckOutResponse',
  'transactionConfirmRequest' => 'MpesaStructTransactionConfirmRequest',
  'transactionConfirmResponse' => 'MpesaStructTransactionConfirmResponse',
  'transactionStatusRequest' => 'MpesaStructTransactionStatusRequest',
  'transactionStatusResponse' => 'MpesaStructTransactionStatusResponse',
);
    }
}
