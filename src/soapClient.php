<?php
    
    $myapi = new SoapClient("http://localhost:8088/soapTest/services/myService?wsdl");
	 
   $fcs = $myapi->__getFunctions();
   $types = $myapi->__getTypes();
   var_dump($fcs);
   var_dump($types);
   
   $value1=2;
   $value2=25;
   $request_param = array("a" => $value1, "b" => $value2 );
   
  try
{
    $responce_param = $myapi->sum($request_param);
	   var_dump($responce_param);
   //$responce_param =  $client->call("webservice_methode_name", $request_param); // Alternative way to call soap method
} 
catch (Exception $e) 
{ 
    echo "<h2>Exception Error!</h2>"; 
    echo $e->getMessage(); 
}
?>