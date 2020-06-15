<?php
namespace src\config\connection;

class dbconnection {

    public function connect() {
      
      //connecting to filemaker server
      $fm = new \FileMaker("CounsellingSystem", "http://172.16.9.184", "admin", "mindfire@5");

      if (\FileMaker::isError($fm)) {
        $findError = 'Find Error: '. $fm->getMessage(). ' (' . $fm->code. ')';
        return $response->withJson(['success'=>false, "dbObjectCreation"=>$findError], 500);  
      }
      return $fm;
    }
  }
  
?>