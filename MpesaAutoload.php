<?php
/**
 * File to load generated classes once at once time
 * @package Mpesa
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
/**
 * Includes for all generated classes files
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-05-30
 */
require_once dirname(__FILE__) . '/MpesaWsdlClass.php';
require_once dirname(__FILE__) . '/Transaction/Request/MpesaStructTransactionConfirmRequest.php';
require_once dirname(__FILE__) . '/Transaction/Response/MpesaStructTransactionConfirmResponse.php';
require_once dirname(__FILE__) . '/Result/Msg/MpesaStructResultMsg.php';
require_once dirname(__FILE__) . '/Transaction/Response/MpesaStructTransactionStatusResponse.php';
require_once dirname(__FILE__) . '/Process/Response/MpesaStructProcessCheckOutResponse.php';
require_once dirname(__FILE__) . '/Process/Request/MpesaStructProcessCheckOutRequest.php';
require_once dirname(__FILE__) . '/Transaction/Request/MpesaStructTransactionStatusRequest.php';
require_once dirname(__FILE__) . '/Check/Header/MpesaStructCheckOutHeader.php';
require_once dirname(__FILE__) . '/Process/MpesaServiceProcess.php';
require_once dirname(__FILE__) . '/Transaction/MpesaServiceTransaction.php';
require_once dirname(__FILE__) . '/Confirm/MpesaServiceConfirm.php';
require_once dirname(__FILE__) . '/LNMOR/MpesaServiceLNMOR.php';
require_once dirname(__FILE__) . '/MpesaClassMap.php';
