<?php  
try{
  $client = new SoapClient("catalog.wsdl");
  $catalogId='catalog1';
  $response = $client->getCatalogEntry($catalogId);
  echo $response;
  } catch(SoapFault $e){
    var_dump($e);
}
?>