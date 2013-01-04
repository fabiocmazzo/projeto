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
    
    try 
        {
         $mongo = new MongoClient(); // connect
         $dbMongo = $mongo->selectDB("local");
       } catch (Exception $e) {
         $sql = 'insert into log(error_msg) values ("erro de conexao")';
         $db->query($sql);
       }
       
    
    
    foreach($_FILES as $file) {
       
      
       move_uploaded_file($file["tmp_name"], "formularios/" . $file['name']);
       $sql = 'insert into pesquisa_recebida(aparelho) values ("' . $file['name'] . '")';
       $db->query($sql);
       
       /* Vou tentar converter pra JSON e inserir no MongoDB, se der errado gravarei o nome do arquivo em um log
          no MYSQL */
         $ext = pathinfo($file['name']);
         
         if('xml' == $ext['extension']) {
        
        
          $conteudoXML = simplexml_load_string(file_get_contents("formularios/" . $file['name'] ));
         // $jsonConteudo =  json_encode($conteudoXML);
          
               try {
                
                   
                   $colecao = $dbMongo->familias;
                   //  $colecao->insert(json_decode($jsonConteudo));
                   $colecao->insert($conteudoXML);
               
               } catch (Exception $e) {
                 $sql = 'insert into log(error_msg) values ("erro de conversao")';
                 $db->query($sql); 
               }
               
        }  
    }     
    
     
    header("Status: 201");
 ?>