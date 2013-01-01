<?php 

function apache_request_headers() {
  $arh = array();
  $rx_http = '/\AHTTP_/';
  foreach($_SERVER as $key => $val) {
    if( preg_match($rx_http, $key) ) {
      $arh_key = preg_replace($rx_http, '', $key);
      $rx_matches = array();
      // do some nasty string manipulations to restore the original letter case
      // this should work in most cases
      $rx_matches = explode('_', $arh_key);
      if( count($rx_matches) > 0 and strlen($arh_key) > 2 ) {
        foreach($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
        $arh_key = implode('-', $rx_matches);
      }
      $arh[$arh_key] = $val;
    }
  }
  return( $arh );
}


  
   
    require_once 'includes/configxml.php';
    
   // $deviceID = $_REQUEST['deviceID'];
   // $sql = 'insert into pesquisa_recebida(aparelho) values ("' . $deviceID . '")';
   // $db->query($sql);
    
 /*    foreach ($_REQUEST as $name => $value) {
     $sql = 'insert into pesquisa_recebida(aparelho) values ("' . $name . ' -- ' . $value . '")';
     $db->query($sql);
    }
    
    $headers = apache_request_headers(); */


    
    
    foreach($_FILES as $file) {
       move_uploaded_file($file["tmp_name"], "formularios/" . $file['name']);
       $sql = 'insert into pesquisa_recebida(aparelho) values ("' . $file['name'] . '")';
       $db->query($sql);
    }     
    
     
    header("Status: 201");
 ?>