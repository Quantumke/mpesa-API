<?php
/**
 * Test with Mpesa for 'https://www.safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl'
 * @package Mpesa
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/MpesaAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a MpesaWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[MpesaWsdlClass::WSDL_URL] = 'https://www.safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl';
 * $wsdl[MpesaWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[MpesaWsdlClass::WSDL_TRACE] = true;
 * $wsdl[MpesaWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[MpesaWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new MpesaWsdlClass($wsdl);
 */
/**
 * Examples
 */


/*********************************
 * Example for MpesaServiceProcess
 */
$mpesaServiceProcess = new MpesaServiceProcess();
// sample call for MpesaServiceProcess::setSoapHeaderCheckOutHeader() in order to initialize required SoapHeader
$mpesaServiceProcess->setSoapHeaderCheckOutHeader(new MpesaStructCheckOutHeader(/*** update parameters list ***/));
// sample call for MpesaServiceProcess::processCheckOut()
if($mpesaServiceProcess->processCheckOut(new MpesaStructProcessCheckOutRequest(/*** update parameters list ***/)))
    print_r($mpesaServiceProcess->getResult());
else
    print_r($mpesaServiceProcess->getLastError());

/*************************************
 * Example for MpesaServiceTransaction
 */
$mpesaServiceTransaction = new MpesaServiceTransaction();
// sample call for MpesaServiceTransaction::setSoapHeaderCheckOutHeader() in order to initialize required SoapHeader
$mpesaServiceTransaction->setSoapHeaderCheckOutHeader(new MpesaStructCheckOutHeader(/*** update parameters list ***/));
// sample call for MpesaServiceTransaction::transactionStatusQuery()
if($mpesaServiceTransaction->transactionStatusQuery(new MpesaStructTransactionStatusRequest(/*** update parameters list ***/)))
    print_r($mpesaServiceTransaction->getResult());
else
    print_r($mpesaServiceTransaction->getLastError());

/*********************************
 * Example for MpesaServiceConfirm
 */
$mpesaServiceConfirm = new MpesaServiceConfirm();
// sample call for MpesaServiceConfirm::setSoapHeaderCheckOutHeader() in order to initialize required SoapHeader
$mpesaServiceConfirm->setSoapHeaderCheckOutHeader(new MpesaStructCheckOutHeader(/*** update parameters list ***/));
// sample call for MpesaServiceConfirm::confirmTransaction()
if($mpesaServiceConfirm->confirmTransaction(new MpesaStructTransactionConfirmRequest(/*** update parameters list ***/)))
    print_r($mpesaServiceConfirm->getResult());
else
    print_r($mpesaServiceConfirm->getLastError());

/*******************************
 * Example for MpesaServiceLNMOR
 */
$mpesaServiceLNMOR = new MpesaServiceLNMOR();
// sample call for MpesaServiceLNMOR::LNMOResult()
if($mpesaServiceLNMOR->LNMOResult(new MpesaStructResultMsg(/*** update parameters list ***/)))
    print_r($mpesaServiceLNMOR->getResult());
else
    print_r($mpesaServiceLNMOR->getLastError());
