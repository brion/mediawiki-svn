--TEST--
SOAP Interop Round4 GroupI XSD 013 (php/wsdl): echoStringMultiOccurs(nil)
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$client = new SoapClient(dirname(__FILE__)."/round4_groupI_xsd.wsdl",array("trace"=>1,"exceptions"=>0));
$client->echoStringMultiOccurs(array("inputStringMultiOccurs"=>array("arg1",NULL,"arg3")));
echo $client->__getlastrequest();
$HTTP_RAW_POST_DATA = $client->__getlastrequest();
include("round4_groupI_xsd.inc");
echo "ok\n";
?>
--EXPECT--
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://soapinterop.org/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><SOAP-ENV:Body><ns1:echoStringMultiOccurs><ns1:inputStringMultiOccurs><ns1:string>arg1</ns1:string><ns1:string xsi:nil="true"/><ns1:string>arg3</ns1:string></ns1:inputStringMultiOccurs></ns1:echoStringMultiOccurs></SOAP-ENV:Body></SOAP-ENV:Envelope>
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://soapinterop.org/"><SOAP-ENV:Body><ns1:echoStringMultiOccursResponse><ns1:return>arg1</ns1:return><ns1:return/><ns1:return>arg3</ns1:return></ns1:echoStringMultiOccursResponse></SOAP-ENV:Body></SOAP-ENV:Envelope>
ok
